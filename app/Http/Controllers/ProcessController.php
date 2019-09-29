<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\UserPost;
use Carbon\Carbon;
use Session;
use Auth;
class ProcessController extends Controller{
    public function __construct(){

    }
    public function insert(Request $request){
      $this->validate($request,[
        'topic_title'=>'required|max:100',
        'category'=>'required',
        'subcategory'=>'required',
        'description'=>'required',
      ],[
        'topic_title.required'=>'Please enter  Post Title',
        'category.required'=>'Please enter Category',
        'subcategory.required'=>'Please enter Subcategory',
        'description.required'=>'Please enter Description',
      ]);
      // $slug='CON'.uniqid(20);
      $creator = Auth::user()->name;
      $insert=UserPost::insert([
        'post_title'=>$_POST['topic_title'],
        'post_creator' => $creator,
        'post_catagory'=>$_POST['category'],
        'post_subcatagory'=>$_POST['subcategory'],
        'post_description'=>$_POST['description'],
        'created_at'=>Carbon::now()->toDateTimeString(),
        // 'post_slug'=>$slug,
        // 'post_creator'=>$creator,
      ]);

      if ($insert) {
        Session::flash('success','value');
        return redirect('topic');
      }else{
        Session::flash('error','error');
        return redirect('topic');
      }
    }


    public function topicupdate(Request $request){
      $this->validate($request,[
        'topic_title'=>'required|',
        'category'=>'required',
        'subcategory'=>'required',
        'description'=>'required',
      ],[
        'topic_title.required'=>'Please enter  Post Title',
        'category.required'=>'Please enter Category',
        'subcategory.required'=>'Please enter Subcategory',
        'description.required'=>'Please enter Description',
      ]);
      $id=$request['id'];
      $update=UserPost::where('post_status',1)->where('post_id',$id)->update([
        'post_title'=>$_POST['topic_title'],
        'post_catagory'=>$_POST['category'],
        'post_subcatagory'=>$_POST['subcategory'],
        'post_description'=>$_POST['description'],
        ]);

      if($update){
        Session::flash('success','value');
        return redirect('/');
      }else {
        Session::flash('error','error');
        return redirect('website/edit/'.$id);
      }
    }

    public function soft_delete($id){
      $soft=UserPost::where('post_status',1)->where('post_id',$id)->update([
        'post_status'=>0,
      ]);
      if($soft){
        Session::flash('successfull');
        return redirect('/');
      }
      else{
        Session::flash('error');
        return redirect('/');
      }
    }
}
