<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Admin;
use Hash;
use Image;

class AdminController extends Controller
{
    // All Admin Controller Functions Define here 

    public function dashboard()
    {
        Session::put('page','dashboard');
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
    	//echo $password= Hash::make('12345678');die;
    	if($request->isMethod('post')){
    		$data = $request->all();

            // How to create Custom message In Laravel 

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessage = [
                'email.required' => 'Email Address Must be Required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password Must be Required', 
            ];

            $this->validate($request,$rules,$customMessage);

    		if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
    			return redirect('admin/dashboard');
    		}else{
    			Session::flash('error_message','Invalid Email Or Password');
    			return redirect()->back();
    		}
    	}
        return view('admin.login');
    }

    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('/admin');
    }


}
