<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SchoolCategory;
use Session;
use Image;

class SchoolCategoryController extends Controller
{
    public function SchoolCategories(){
		Session::put('page','school-categories');
    	$schoolcategories = SchoolCategory::orderby('id','desc')->get();
    	$schoolcategories = json_decode(json_encode($schoolcategories));
    	// echo "<pre>"; print_r($schoolcategories);die();

    	return view('admin.schoolCategory.SchoolCategories')->with(['schoolcategories'=>$schoolcategories]);
    }

    public function addEditSchoolCategory(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add School Category";
    		$schoolCategorydata = array();
    		//print_r($schoolCategorydata);die;
    		$schoolCategory = new SchoolCategory;
    		$message = "School Category Added Successfully !";

    	}else{
    		$title = "Edit School Category";
    		$schoolCategorydata = SchoolCategory::where('id',$id)->first();
    		$schoolCategorydata = json_decode(json_encode($schoolCategorydata),true);
            // echo "<pre>"; print_r($schoolCategory);die;

    		$schoolCategory = SchoolCategory::find($id);
    		$message = "School Category Updated Successfully !";
    		//print_r($schoolCategorydata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);die;

    		$rules = [
                'school_category' => 'required|regex:/^[\pL\s\-]+$/u',
            ];

            $customMessage = [
                'school_category.required' => "School Category must be Required",
                'school_category.regex' => "Invalid School Category name",
            ];

            $this->validate($request,$rules,$customMessage);
    		$schoolCategory->school_category = $data['school_category'];
    		$schoolCategory->status = 1;
    		$schoolCategory->save();

    		Session::flash('success_message',$message);
            return redirect('admin/school-categories');
    	}

    	return view('admin.schoolCategory.addEditSchoolCategory')->with(['title'=>$title,'schoolCategorydata'=>$schoolCategorydata ]);
    }

    public function deleteSchoolCategory($id){

    	// Delete School Category
        SchoolCategory::where('id',$id)->delete();

        $message = 'School Category Deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back(); 

    }


    public function updateSchoolCategoryStatus(Request $request){
    	if($request->ajax()){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data);die();
    		if($data['status']=="Active"){
    			$status = 0;
    		}else{
    			$status = 1;
    		}
            // echo "<pre>"; print_r($data);die();
    		SchoolCategory::where('id',$data['schoolCategory_id'])->update(['status'=>$status]);
            //print_r($data);
    		return response()->json(['status'=>$status,'schoolCategory_id'=>$data['schoolCategory_id']]);
    	}
    }

}
