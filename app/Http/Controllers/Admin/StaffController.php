<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staff;
use App\SubjectCategory;
use Session;
use Image;

class StaffController extends Controller
{
    public function staff(Request $request){
        Session::put('page','staff');
        $staffs = Staff::with('subjectcategory')->orderby('id','desc')->get();
        $staffs = json_decode(json_encode($staffs));
       	// echo "<pre>"; print_r($staffs);die();

        return view('admin.staff.Staff')->with(['staffs'=>$staffs]);
    }

    public function addEditStaff(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add Staff";
    		$staffdata = array();
    		//print_r($staffdata);die;
    		$staff = new Staff;
    		$message = "Staff Added Successfully !";

    	}else{
    		$title = "Edit Staff";
    		$staffdata = Staff::where('id',$id)->first();
    		$staffdata = json_decode(json_encode($staffdata),true);
            // echo "<pre>"; print_r($staffdata);die;

    		$staff = Staff::find($id);
    		$message = "Staff Updated Successfully !";
    		// print_r($staffdata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data);die;

    		$rules = [
                'teacher_name' => 'required',
                'teacher_email' => 'required',
                'subject_category' => 'required',
                'mobile' => 'required|digits:10',
                'about_me' => 'required',
                'qualification' => 'required',
                'best_teacher' => 'required',
                'teacher_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ];

            $customMessage = [
                'teacher_name.required' => "Teacher Name must be Required",
                'teacher_email.required' => "Teacher Email must be Required",
                'subject_category.required' => "Subject must be Required",
                'mobile.required' => "Mobile must be Required",
                'mobile.digits' => "Mobile 10 digit Number be Required",
                'about_me.required' => "Teacher About Us must be Required",
                'qualification.required' => "Teacher Qualification Time must be Required",
                'best_teacher.required' => "Best Ranking of Teacher End Time must be Required",
            ];

            $this->validate($request,$rules,$customMessage);

            //Upload Teacher Image In Laravel
            if($request->hasFile('teacher_image')){
                $image_tmp = $request->file('teacher_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,999999).'.'.$extension;
                    $imagePath = 'adminView/img/teacher/'.$imageName;
                    //Upload the Image
                    //Image::make($image_tmp)->resize(300,400)->save($imagePath);
                    Image::make($image_tmp)->resize(600,400)->save($imagePath);
                    $staff->teacher_image = $imageName;
                }
            }else{
                $imageName = $staffdata['teacher_image'];
                $staff->teacher_image = $imageName;
            }

    		$staff->teacher_name = $data['teacher_name'];
    		$staff->teacher_email = $data['teacher_email'];
    		$staff->subject_category = $data['subject_category'];
    		$staff->mobile = $data['mobile'];
    		$staff->about_me = $data['about_me'];
    		$staff->qualification = $data['qualification'];
    		$staff->best_teacher = $data['best_teacher'];
    		$staff->status = 1;
    		$staff->save();

    		Session::flash('success_message',$message);
            return redirect('admin/staff');

    	}

    	$subjectCategories = SubjectCategory::where(['status'=>1])->get();
    	$subjectCategories = json_decode(json_encode($subjectCategories),true);
    	// echo "<pre>"; print_r($subjectCategories);die;

    	return view('admin.staff.addEditStaff')->with(['title'=>$title,'subjectCategories'=>$subjectCategories,'staffdata'=>$staffdata ]);
    }

    public function deleteStaff($id){
        // Get Teacher Image
        $teacherImage = Staff::select('teacher_image')->where('id',$id)->first();
        // Get Teacher Image Path
        $teacher_image_path = "adminView/img/teacher/";

        // Delete Teacher Image From teacher_images folder if exists
        if(file_exists($teacher_image_path.$teacherImage->teacher_image)){
            unlink($teacher_image_path.$teacherImage->teacher_image);
        }

        // Delete Staff Image from teacheres table
        Staff::where('id',$id)->delete();
        $message = 'Teacher Image && Staff Data has been deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back();

    }

    public function updateStaffStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            // echo "<pre>"; print_r($data);die();
            Staff::where('id',$data['staff_id'])->update(['status'=>$status]);
            //print_r($data);
            return response()->json(['status'=>$status,'staff_id'=>$data['staff_id']]);
        }
    }

}
