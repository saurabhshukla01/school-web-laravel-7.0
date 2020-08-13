<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\EventCategory;
use Session;
use Image;

class EventsController extends Controller
{

    public function events(Request $request){
        Session::put('page','events');
        $events = Event::with('eventcategory')->orderby('id','desc')->get();
        $events = json_decode(json_encode($events));
        // echo "<pre>"; print_r($events);die();

        return view('admin.events.Events')->with(['events'=>$events]);
    }

    public function addEditEvent(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add Event";
    		$eventdata = array();
    		//print_r($eventdata);die;
    		$event = new Event;
    		$message = "Event Added Successfully !";

    	}else{
    		$title = "Edit Event";
    		$eventdata = Event::where('id',$id)->first();
    		$eventdata = json_decode(json_encode($eventdata),true);
            // echo "<pre>"; print_r($eventdata);die;

    		$event = Event::find($id);
    		$message = "Event Updated Successfully !";
    		//print_r($eventdata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data);die;

    		$rules = [
                'event_title' => 'required',
                'event_category' => 'required',
                'event_location' => 'required',
                'upcoming_event' => 'required',
                'event_date' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
                'description' => 'required',
                'event_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ];

            $customMessage = [
                'event_title.required' => "Event Title must be Required",
                'event_category.required' => "Event Category must be Required",
                'event_location.required' => "Event Location must be Required",
                'upcoming_event.required' => "Upcoming Event must be Required",
                'event_date.required' => "Event Date must be Required",
                'start_time.required' => "Event Start Time must be Required",
                'end_time.required' => "Upcoming End Time must be Required",
                'description.required' => "Event Description must be Required",
            ];

            $this->validate($request,$rules,$customMessage);

            //Upload Event Image In Laravel
            if($request->hasFile('event_image')){
                $image_tmp = $request->file('event_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,999999).'.'.$extension;
                    $imagePath = 'adminView/img/events/'.$imageName;
                    //Upload the Image
                    //Image::make($image_tmp)->resize(300,400)->save($imagePath);
                    Image::make($image_tmp)->resize(900,600)->save($imagePath);
                    $event->event_image = $imageName;
                }
            }else{
                $imageName = $eventdata['event_image'];
                $event->event_image = $imageName;
            }

    		$event->event_title = $data['event_title'];
    		$event->event_category = $data['event_category'];
    		$event->upcoming_event = $data['upcoming_event'];
    		$event->event_location = $data['event_location'];
    		$event->event_date = $data['event_date'];
    		$event->start_time = $data['start_time'];
    		$event->end_time = $data['end_time'];
    		$event->description = $data['description'];
    		$event->status = 1;
    		$event->save();

    		Session::flash('success_message',$message);
            return redirect('admin/events');

    	}

    	$eventCategories = EventCategory::where(['status'=>1])->get();
    	$eventCategories = json_decode(json_encode($eventCategories),true);
    	// echo "<pre>"; print_r($eventCategories);die;

    	return view('admin.events.addEditEvent')->with(['title'=>$title,'eventCategories'=>$eventCategories,'eventdata'=>$eventdata ]);
    }


    public function deleteEvent($id){
        // Get Event Image
        $eventImage = Event::select('event_image')->where('id',$id)->first();
        // echo $eventImage;die;
        // Get Event Image Path
        $event_image_path = "adminView/img/events/";

        // Delete Category Image From category_images folder if exists
        if(file_exists($event_image_path.$eventImage->event_image)){
            unlink($event_image_path.$eventImage->event_image);
        }

        // Delete Event Image from categories table
        Event::where('id',$id)->delete();
        $message = 'Event Image && Event Data has been deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back();

    }

    public function updateEventStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            // echo "<pre>"; print_r($data);die();
            Event::where('id',$data['event_id'])->update(['status'=>$status]);
            //print_r($data);
            return response()->json(['status'=>$status,'event_id'=>$data['event_id']]);
        }
    }

}
