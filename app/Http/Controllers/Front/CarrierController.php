<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubjectCategory;
use Session;
use Image;

class CarrierController extends Controller
{
    public function index(){
    	Session::put('page','carrier');
    	$subjectcategories = SubjectCategory::where(['status'=>1])->orderby('id','desc')->get();
    	$subjectcategories = json_decode(json_encode($subjectcategories));

    	$subjectcategories = SubjectCategory::where(['status'=>1])->orderby('id','desc')->paginate(6);

    	// echo "<pre>"; print_r($subjectcategories);die();
    	// return view('front.carrier')->with(['subjectcategories'=>$subjectcategories]);
    	
    	return view('front.carrier',['subjectcategories'=>$subjectcategories]);
    }
}
