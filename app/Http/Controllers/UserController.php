<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserRole;
use Carbon\Carbon;
use Session;

class UserController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $allUser=User::orderBy('id','DESC')->get();
        return view('admin.user.all',compact('allUser'));
    }

    public function add(){
        $allRole=UserRole::where('role_status',1)->get();
        return view('admin.user.add',compact('allRole'));
    }

    public function edit(){

    }

    // Eikhane Admin info theke user e convert hbe admin e dewa ache
    public function Userinfo(){
      $allUser=User::orderBy('id','DESC')->get();
      return view('admin.post.alluser',compact('allUser'));
    }
    // Eikhane Admin info theke user e convert hbe admin e dewa ache

    public function view($slug){
      $User=User::where('slug',$slug)->firstOrFail();
      return view('admin.user.view',compact('User'));
    }

    public function approvePost($id){
      $approve_post = \App\UserPost::where('post_id',$id)->Update([
        'post_status' => 1,
      ]);
      if($approve_post){
        Session::flash('success');
        return back();
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

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:6|confirmed',
        ],[
            'name.required'=>'Please enter your name!',
            'email.required'=>'Please enter your email address!',
            'password.required'=>'Please enter password!',
        ]);
        $slug='U'.uniqid(2019);
        $insert=User::insert([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
            'role_id'=>$request['role'],
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect('admin/user/add');
        }else{
          Session::flash('error','value');
          return redirect('admin/user/add');
        }
    }

    public function update(){

    }
}
