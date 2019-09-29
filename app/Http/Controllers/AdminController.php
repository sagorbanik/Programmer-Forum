<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $role_per = Auth::user()->role_id;
      // dd($role_per);
      if($role_per == 1)
        return view('admin.home.index');
      else
        return view('website.index');
    }
}
