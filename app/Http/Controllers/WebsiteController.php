<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\UserPost;
use Auth;
class WebsiteController extends Controller{

    public function index(){
      return view('website.index');
    }
    
    public function topic(){
      return view('website.topic');
    }

    public function edit($id){
      $data=UserPost::where('post_status',1)->where('post_id',$id)->firstOrFail();
      return view('website.edit',compact('data'));
    }
    public function allPost(){
      $all=UserPost::where('post_status',1)->orderBy('post_id','DESC')->get(); //For id store/view in descending order
      return view('website.index',compact('all'));
    }
    public function allPostCategory($id){
      $all=UserPost::where('post_status',1)->where('post_subcatagory',$id)->orderBy('post_id','DESC')->get(); //For id store/view in descending order
      return view('website.index',compact('all'));
    }

    public function allSearch(Request $request){
      $search = $_POST['search'];
      $all=UserPost::where('post_status',1)->where('post_title','LIKE','%'.$search.'%')->orWhere('post_subcatagory','LIKE','%'.$search.'%')->orWhere('post_catagory','LIKE','%'.$search.'%')->orderBy('post_id','DESC')->get(); //For id store/view in descending order
      return view('website.index',compact('all'));
    }

    public function Commentview($id){
      $data=UserPost::where('post_status',1)->where('post_id',$id)->get();
      return view('website.comments',compact('data'));
    }

}
