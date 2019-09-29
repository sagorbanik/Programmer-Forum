<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Session;
use App\UserProgrammer;
use App\UserPost;
class AuthenticationController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth');
  // }
  public function login(){
    
    return view('website.login');
  }
  public function loginSubmit(){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $plogin = UserProgrammer::where('email',$email)->where('password',$password)->get();
    if(!empty($plogin)){
      $all=UserPost::where('post_status',1)->orderBy('post_id','DESC')->get();
      return view('website.index',compact('all','plogin'));
    }
    else{
        return back();
    }

  }

  public function registration(){
    return view('website.registration');
  }

  public function registrationProcess(Request $request){
    $this->validate($request,[
      'name'=>'required|max:100',
      'email'=>'required|unique:users',
      'password'=>'required',
    ],[
      'name.required'=>'Please enter Your Name',
      'email.required'=>'Please enter Email',
      'password.required'=>'Please enter Password',
    ]);
    $insert=UserProgrammer::insert([
      'name'=>$request['name'],
      'email'=>$request['email'],
      'password'=>Hash::make($request['pass']),
      'created_at'=>Carbon::now()->toDateTimeString(),
    ]);

    if ($insert) {
      // Session::flash('success','value');
      return view('website.login');
    }else{
      // Session::flash('error','error');
    // return view('website.registration');
    }
  }
}
