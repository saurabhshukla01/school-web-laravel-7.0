<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staff;
use App\SubjectCategory;
use Session;

class StaffController extends Controller
{
    public function index(){
        $staffs = Staff::with('subjectcategory')->where(['status'=>1])->orderby('id','desc')->get();
        $staffs = json_decode(json_encode($staffs));
        $staffs = Staff::with('subjectcategory')->where(['status'=>1])->orderby('id','desc')->paginate(6);
       	// echo "<pre>"; print_r($staffs);die();

        return view('front.staff',['staffs'=>$staffs]);
    }

    public function StaffDetails($id){

	    $staffs = Staff::with('subjectcategory')->where(['status'=>1,'id'=>$id])->get();
	    $staffs = json_decode(json_encode($staffs));
	    // echo "<pre>";print_r($staffs);

    	return view('front.staffDetails')->with(['staffs'=>$staffs]);
    }
    

}
