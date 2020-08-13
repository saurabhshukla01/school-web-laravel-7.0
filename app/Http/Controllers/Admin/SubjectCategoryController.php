<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubjectCategory;
use Session;
use Image;


class SubjectCategoryController extends Controller
{
    public function SubjectCategories(){
		Session::put('page','subject-categories');
    	$subjectcategories = SubjectCategory::orderby('id','desc')->get();
    	$subjectcategories = json_decode(json_encode($subjectcategories));
    	// echo "<pre>"; print_r($subjectcategories);die();

    	return view('admin.subjectCategory.SubjectCategories')->with(['subjectcategories'=>$subjectcategories]);
    }


    public function addEditSubjectCategory(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add Subject Category";
    		$subjectCategorydata = array();
    		//print_r($subjectCategorydata);die;
    		$subjectCategory = new subjectCategory;
    		$message = "Subject Category Added Successfully !";

    	}else{
    		$title = "Edit Subject Category";
    		$subjectCategorydata = SubjectCategory::where('id',$id)->first();
    		$subjectCategorydata = json_decode(json_encode($subjectCategorydata),true);
            // echo "<pre>"; print_r($subjectCategory);die;

    		$subjectCategory = SubjectCategory::find($id);
    		$message = "Subject Category Updated Successfully !";
    		//print_r($subjectCategorydata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);die;

    		$rules = [
                'subject_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'description' => 'required',
            ];

            $customMessage = [
                'name.required' => "Subject Category must be Required",
                'name.regex' => "Invalid Subject Category name",
                'description.required' => "Subject Carrier Description must be Required",
            ];

            $this->validate($request,$rules,$customMessage);
    		$subjectCategory->subject_name = $data['subject_name'];
            $subjectCategory->description = $data['description'];
    		$subjectCategory->status = 1;
    		$subjectCategory->save();

    		Session::flash('success_message',$message);
            return redirect('admin/subject-categories');
    	}

    	return view('admin.subjectCategory.addEditSubjectCategory')->with(['title'=>$title,'subjectCategorydata'=>$subjectCategorydata ]);
    }

    public function deleteSubjectCategory($id){

    	// Delete Subject Category
        SubjectCategory::where('id',$id)->delete();

        $message = 'Subject Category Deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back(); 

    }


    public function updateSubjectCategoryStatus(Request $request){
    	if($request->ajax()){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data);die();
    		if($data['status']=="Active"){
    			$status = 0;
    		}else{
    			$status = 1;
    		}
            // echo "<pre>"; print_r($data);die();
    		SubjectCategory::where('id',$data['subjectCategory_id'])->update(['status'=>$status]);
            //print_r($data);
    		return response()->json(['status'=>$status,'subjectCategory_id'=>$data['subjectCategory_id']]);
    	}
    }

}
