<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPost;
class UserPostController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }
    // Approve post view
      public function view($id){
        $data=UserPost::where('post_status',1)->where('post_id',$id)->firstOrFail();
        return view('admin.post.view',compact('data'));
      }
    public function index(){
        $all=UserPost::where('post_status',1)->orderBy('post_id','DESC')->get();  //For id store/view in descending order
        return view('admin.post.all',compact('all'));
    }
  // Approve post view

// Delete post

public function postdelete($id){
  $deletepost=UserPost::where('post_status',0)->where('post_id',$id)->delete();
  if($deletepost){
      return redirect('admin/user/unapprovedpost');
  }
  else{
      return back();
  }
}

// Delete post


  // Pendin post view
    public function unapproved(){
      $all=UserPost::where('post_status',0)->orderBy('post_id','DESC')->get();  //For id store/view in descending order
      return view('admin.post.postapproval',compact('all'));
    }
    public function postview($id){
      $data=UserPost::where('post_status',0)->where('post_id',$id)->firstOrFail();
      return view('admin.post.view',compact('data'));
    }
  // Pendin post view


}
