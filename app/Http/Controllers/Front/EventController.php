<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\EventCategory;
use Session;
use Image;

class EventController extends Controller
{
    public function index(){
        $events = Event::with('eventcategory')->where(['status'=>1])->orderby('id','desc')->get();
        $events = json_decode(json_encode($events));
        $events = Event::with('eventcategory')->where(['status'=>1])->orderby('id','desc')->paginate(6);

        // echo "<pre>"; print_r($events);die();
    	// return view('front.event')->with(['events'=>$events]);
    	return view('front.event',['events'=>$events]);
    }

    public function EventDetails($id){
    	if(!empty($id)){
	        $events_id = Event::with('eventcategory')->where(['status'=>1,'id'=>$id])->get();
	        $events_id = json_decode(json_encode($events_id));
	        // echo "<pre>";print_r($events_id);
	    }
        $eventCategories = EventCategory::where(['status'=>1])->get();
        $eventCategories = json_decode(json_encode($eventCategories));

        $events = Event::with('eventcategory')->where(['status'=>1,'upcoming_event'=>'Yes'])->orderby('id','desc')->get();
        $events = json_decode(json_encode($events));
        // echo "<pre>";print_r($events);

    	return view('front.eventDetails')->with(['events_id'=>$events_id,'events'=>$events,'eventCategories'=>$eventCategories]);
    }
}
