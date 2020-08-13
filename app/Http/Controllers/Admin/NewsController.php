<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;
use Session;
use Image;

class NewsController extends Controller
{
    public function newses(Request $request){
        Session::put('page','news');
        $newses = News::with('newscategory')->orderby('id','desc')->get();
        $newses = json_decode(json_encode($newses));
        // echo "<pre>"; print_r($newses);die();

        return view('admin.news.News')->with(['newses'=>$newses]);
    }

    public function addEditNews(Request $request ,$id=null){
    	if(empty($id)){
    		$title = "Add News";
    		$newsdata = array();
    		//print_r($newsdata);die;
    		$news = new News;
    		$message = "News Added Successfully !";

    	}else{
    		$title = "Edit News";
    		$newsdata = News::where('id',$id)->first();
    		$newsdata = json_decode(json_encode($newsdata),true);
            // echo "<pre>"; print_r($newsdata);die;

    		$news = News::find($id);
    		$message = "News Updated Successfully !";
    		//print_r($newsdata);die;
    	}

    	if($request->isMethod('post')){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data);die;

    		$rules = [
                'news_title' => 'required',
                'news_category' => 'required',
                'upcoming_news' => 'required',
                'news_date' => 'required',
                'description' => 'required',
                'news_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ];

            $customMessage = [
                'news_title.required' => "News Title must be Required",
                'news_category.required' => "News Category must be Required",
                'upcoming_news.required' => "Upcoming News must be Required",
                'news_date.required' => "News Date must be Required",
                'description.required' => "News Description must be Required",
            ];

            $this->validate($request,$rules,$customMessage);

            //Upload News Image In Laravel
            if($request->hasFile('news_image')){
                $image_tmp = $request->file('news_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,999999).'.'.$extension;
                    $imagePath = 'adminView/img/news/'.$imageName;
                    //Upload the Image
                    //Image::make($image_tmp)->resize(300,400)->save($imagePath);
                    Image::make($image_tmp)->resize(900,600)->save($imagePath);
                    $news->news_image = $imageName;
                }
            }else{
                $imageName = $newsdata['news_image'];
                $news->news_image = $imageName;
            }

    		$news->news_title = $data['news_title'];
    		$news->news_category = $data['news_category'];
    		$news->upcoming_news = $data['upcoming_news'];
    		$news->news_date = $data['news_date'];
    		$news->description = $data['description'];
    		$news->status = 1;
    		$news->save();

    		Session::flash('success_message',$message);
            return redirect('admin/news');

    	}

    	$newsCategories = NewsCategory::where(['status'=>1])->get();
    	$newsCategories = json_decode(json_encode($newsCategories),true);
    	// echo "<pre>"; print_r($newsCategories);die;

    	return view('admin.news.addEditNews')->with(['title'=>$title,'newsCategories'=>$newsCategories,'newsdata'=>$newsdata ]);
    }

    public function deleteNews($id){
        // Get Event Image
        $newsImage = News::select('news_image')->where('id',$id)->first();

        // Get News Image Path
        $news_image_path = "adminView/img/news/";

        // Delete News Image From news folder if exists
        if(file_exists($news_image_path.$newsImage->news_image)){
            unlink($news_image_path.$newsImage->news_image);
        }

        // Delete Event Image from categories table
        News::where('id',$id)->delete();
        $message = 'News Image && News Data has been deleted Successfully !';
        Session::flash('success_message',$message);
        return redirect()->back();

    }

    public function updateNewsStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            // echo "<pre>"; print_r($data);die();
            News::where('id',$data['news_id'])->update(['status'=>$status]);
            //print_r($data);
            return response()->json(['status'=>$status,'news_id'=>$data['news_id']]);
        }
    }


}
