<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EventCategory;
use Session;
use Image;

class EventCategoryController extends Controller
{
	public function EventCategories(){
		Session::put('page','event-categories');
    	$eventcategories = EventCategory::orderby('id','desc')->get();
    	$eventcategories = json_decode(json_encode($eventcategories));
    	// echo "<pre>"; print_r($eventcategories);die();

    	return view('admin.eventcategory.EventCategories')->with(['eventcategories'=>$eventcategories]);
    }

    public function addEditEventCategory(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add Event Category";
    		$eventCategorydata = array();
    		//print_r($eventCategorydata);die;
    		$eventCategory = new EventCategory;
    		$message = "Event Category Added Successfully !";

    	}else{
    		$title = "Edit Event Category";
    		$eventCategorydata = EventCategory::where('id',$id)->first();
    		$eventCategorydata = json_decode(json_encode($eventCategorydata),true);
            // echo "<pre>"; print_r($eventCategory);die;

    		$eventCategory = EventCategory::find($id);
    		$message = "Event Category Updated Successfully !";
    		//print_r($eventCategorydata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);die;

    		$rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u',
            ];

            $customMessage = [
                'name.required' => "Event Category must be Required",
                'name.regex' => "Invalid Event Category name",
            ];

            $this->validate($request,$rules,$customMessage);
    		$eventCategory->name = $data['name'];
    		$eventCategory->status = 1;
    		$eventCategory->save();

    		Session::flash('success_message',$message);
            return redirect('admin/event-categories');
    	}

    	return view('admin.eventcategory.addEditEventCategory')->with(['title'=>$title,'eventCategorydata'=>$eventCategorydata ]);
    }

    public function deleteEventCategory($id){

    	// Delete Event Category
        EventCategory::where('id',$id)->delete();

        $message = 'Event Category Deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back(); 

    }

    public function updateEventCategoryStatus(Request $request){
    	if($request->ajax()){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data);die();
    		if($data['status']=="Active"){
    			$status = 0;
    		}else{
    			$status = 1;
    		}
            // echo "<pre>"; print_r($data);die();
    		EventCategory::where('id',$data['eventCategory_id'])->update(['status'=>$status]);
            //print_r($data);
    		return response()->json(['status'=>$status,'eventCategory_id'=>$data['eventCategory_id']]);
    	}
    }
    

}
