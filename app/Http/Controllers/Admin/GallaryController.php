<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SchoolCategory;
use App\Gallary;
use Session;
use Image;

class GallaryController extends Controller
{
    public function Gallary(Request $request){
        Session::put('page','gallary');
        $gallaries = Gallary::with('gallaries')->orderby('id','desc')->get();
        $gallaries = json_decode(json_encode($gallaries));
        // echo "<pre>"; print_r($gallaries);die();

        return view('admin.Gallary.Gallary')->with(['gallaries'=>$gallaries]);
    }

    public function addEditGallary(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add Gallary";
    		$gallarydata = array();
    		//print_r($gallarydata);die;
    		$gallary = new Gallary;
    		$message = "Gallary Added Successfully !";

    	}else{
    		$title = "Edit Gallary";
    		$gallarydata = Gallary::where('id',$id)->first();
    		$gallarydata = json_decode(json_encode($gallarydata),true);
            // echo "<pre>"; print_r($gallarydata);die;

    		$gallary = Gallary::find($id);
    		$message = "Gallary Updated Successfully !";
    		//print_r($gallarydata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data);die;

    		$rules = [
                'image_title' => 'required',
                'school_category_id' => 'required',
                'gallary_image' => 'image|mimes:jpeg,png,jpg|max:2048',
                'latest_image_video' => 'required',
                'gallary_video' => 'mimetypes:video/mp4,video/3gp|max:8060',
            ];

            $customMessage = [
                'image_title.required' => "Gallary Title must be Required",
                'school_category_id.required' => "School Category must be Required",
                'latest_image_video.required' => "Latest Type News must be Required",
                'gallary_image.image' => "Valid Image is must be required",
            ];

            $this->validate($request,$rules,$customMessage);

            //Upload Gallary Image In Laravel
            if($request->hasFile('gallary_image')){
                $image_tmp = $request->file('gallary_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,999999).'.'.$extension;
                    $imagePath = 'adminView/img/school_gallary/'.$imageName;
                    //Upload the Image
                    Image::make($image_tmp)->resize(600,400)->save($imagePath);
                    $gallary->gallary_image = $imageName;
                }
            }else{
                $imageName = $gallarydata['gallary_image'];
                $gallary->gallary_image = $imageName;
            }

            // Upload Gallary video here code
            if($request->hasFile('gallary_video')){
                $video_tmp = $request->file('gallary_video');
                $videoname = $video_tmp->getClientOriginalName();
                $extension = $video_tmp->getClientOriginalExtension();
                $extension = strtolower($extension);
                if($extension=="mp4" || $extension=="3gp"){
                    //echo "<pre>"; print_r($videoname);die;
                    //$videoName = $videoname.'-'.rand(100000,9999999).'.'.$extension;
                    $videoName = rand(100000,9999999).'.'.$extension;
                    $video_path = 'adminView/Videos/';
                    $video_tmp->move($video_path,$videoName);
                    //Image::make($video_tmp)->save($video_path);
                    $gallary->gallary_video = $videoName;
                    //echo "<pre>"; print_r($data);die;
                }
            }

    		$gallary->image_title = $data['image_title'];
    		$gallary->school_category_id = $data['school_category_id'];
    		$gallary->latest_image_video = $data['latest_image_video'];
    		$gallary->status = 1;
    		if(empty($gallary->gallary_video)){
                $gallary->gallary_video = "";
            }
            if(empty($gallary->gallary_image)){
                $gallary->gallary_image = "";
            }
    		$gallary->save();

    		Session::flash('success_message',$message);
            return redirect('admin/gallary');

    	}

    	$schoolCategories = SchoolCategory::where(['status'=>1])->get();
    	$schoolCategories = json_decode(json_encode($schoolCategories),true);
    	// echo "<pre>"; print_r($schoolCategories);die;

    	return view('admin.Gallary.addEditGallary')->with(['title'=>$title,'schoolCategories'=>$schoolCategories,'gallarydata'=>$gallarydata ]);
    }

    public function deleteGallary($id){
        // Get Gallary Image
        $gallaryImage = Gallary::select('gallary_image')->where('id',$id)->first();

        // Get Gallary Image Path
        $gallary_image_path = "adminView/img/school_gallary/";

        // Delete Gallary Image From news folder if exists
        if(file_exists($gallary_image_path.$gallaryImage->gallary_image)){
            unlink($gallary_image_path.$gallaryImage->gallary_image);
        }

        // Delete Event Image from categories table
        Gallary::where('id',$id)->delete();
        $message = 'Gallary Image && Gallary Data has been deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back();

    }

    public function updateGallaryStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            // echo "<pre>"; print_r($data);die();
            Gallary::where('id',$data['gallary_id'])->update(['status'=>$status]);
            //print_r($data);
            return response()->json(['status'=>$status,'gallary_id'=>$data['gallary_id']]);
        }
    }
}
