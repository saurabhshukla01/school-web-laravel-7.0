<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewsCategory;
use Session;
use Image;

class NewsCategoryController extends Controller
{
    public function NewsCategories(){
		Session::put('page','news-categories');
    	$newscategories = NewsCategory::orderby('id','desc')->get();
    	$newscategories = json_decode(json_encode($newscategories));
    	// echo "<pre>"; print_r($newscategories);die();

    	return view('admin.newsCategory.NewsCategories')->with(['newscategories'=>$newscategories]);
    }

    public function addEditNewsCategory(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add News Category";
    		$newsCategorydata = array();
    		//print_r($newsCategorydata);die;
    		$newsCategory = new NewsCategory;
    		$message = "News Category Added Successfully !";

    	}else{
    		$title = "Edit News Category";
    		$newsCategorydata = NewsCategory::where('id',$id)->first();
    		$newsCategorydata = json_decode(json_encode($newsCategorydata),true);
            // echo "<pre>"; print_r($eventCategory);die;

    		$newsCategory = NewsCategory::find($id);
    		$message = "News Category Updated Successfully !";
    		//print_r($newsCategorydata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);die;

    		$rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u',
            ];

            $customMessage = [
                'name.required' => "News Category must be Required",
                'name.regex' => "Invalid News Category name",
            ];

            $this->validate($request,$rules,$customMessage);

    		$newsCategory->name = $data['name'];
    		$newsCategory->status = 1;
    		$newsCategory->save();

    		Session::flash('success_message',$message);
            return redirect('admin/news-categories');
    	}

    	return view('admin.newsCategory.addEditNewsCategory')->with(['title'=>$title,'newsCategorydata'=>$newsCategorydata ]);
    }

    public function deleteNewsCategory($id){

    	// Delete News Category
        NewsCategory::where('id',$id)->delete();

        $message = 'News Category Deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back(); 

    }

    public function updateNewsCategoryStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            // echo "<pre>"; print_r($data);die();
            NewsCategory::where('id',$data['newsCategory_id'])->update(['status'=>$status]);
            //print_r($data);
            return response()->json(['status'=>$status,'newsCategory_id'=>$data['newsCategory_id']]);
        }
    }
}
