<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;
use Session;
use Image;

class NewsController extends Controller
{
    public function index(){
    	Session::put('page','news');
        $newses = News::with('newscategory')->where(['status'=>1])->orderby('id','desc')->get();
        $newses = json_decode(json_encode($newses));
        $newses = News::with('newscategory')->where(['status'=>1])->orderby('id','desc')->paginate(6);
        // echo "<pre>"; print_r($newses);die();
    	// return view('front.news')->with(['newses'=>$newses]);
    	return view('front.news',['newses'=>$newses]);
    }

    public function NewsDetails($id){
    	if(!empty($id)){
	        $newses_id = News::with('newscategory')->where(['status'=>1,'id'=>$id])->get();
	        $newses_id = json_decode(json_encode($newses_id));
	        // echo "<pre>";print_r($newses_id);
	    }
        $newsCategories = NewsCategory::where(['status'=>1])->get();
        $newsCategories = json_decode(json_encode($newsCategories));

        $newses = News::with('newscategory')->where(['status'=>1,'upcoming_news'=>'Yes'])->orderby('id','desc')->get();
        $newses = json_decode(json_encode($newses));
        // echo "<pre>";print_r($newses);

    	return view('front.newsDetails')->with(['newses_id'=>$newses_id,'newses'=>$newses,'newsCategories'=>$newsCategories]);
    }
}
