<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SchoolCategory;
use App\Gallary;
use Session;
use Image;

class GallaryController extends Controller
{
    public function index(){
        $gallaries = Gallary::with('gallaries')->where(['status'=>1])->orderby('id','desc')->get();
        $gallaries = json_decode(json_encode($gallaries));
        //echo "<pre>"; print_r($gallaries);die();

        return view('front.Gallary')->with(['gallaries'=>$gallaries]);
    }
}
