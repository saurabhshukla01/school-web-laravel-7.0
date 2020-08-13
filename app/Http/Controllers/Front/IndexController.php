<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\EventCategory;
use App\News;
use App\NewsCategory;
use Session;
use Image;

class IndexController extends Controller
{
    public function index(){
    	$events = Event::with('eventcategory')->where(['status'=>1])->orderby('id','desc')->limit(4)->get();
        $events = json_decode(json_encode($events));

        $upcomming_events = Event::with('eventcategory')->where(['status'=>1,'upcoming_event'=>'Yes'])->orderby('id','desc')->limit(1)->get();
        $upcomming_events = json_decode(json_encode($upcomming_events));

        $top_newses = News::with('newscategory')->where(['status'=>1,'upcoming_news'=>'Yes'])->orderby('id','desc')->get();
        $top_newses = json_decode(json_encode($top_newses));
        // echo "<pre>";print_r($newses);die;
    	return view('front.index',['events'=>$events,'top_newses'=>$top_newses,'upcomming_events'=>$upcomming_events]);
    }

    public function aboutUs(){
    	
    	return view('front.about');
    }

    public function Contact(){
        
        return view('front.contact');
    }

    public function Notification(){
        
        return view('front.notification');
    }

    public function Faq(){
        
        return view('front.faq');
    }

    public function Fee_structure(){
        
        return view('front.fee_structure');
    }

    public function Awards(){
        
        return view('front.awards');
    }

    public function Alumni(){
        
        return view('front.alumni');
    }

}
