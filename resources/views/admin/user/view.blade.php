@extends('layouts.admin')
@section('content')
<div class="row ">
    <div class="col-lg-12 ">
        <div class="card card-outline-info">
          <div class="card-header">
            <div class="row">
              <div class="col-md-8">
                <h4 class="m-b-0 text-white"> <i class="fa fa-bandcamp"></i> View Contact Information</h4>
              </div>
                <div class="col-md-4 text-right">
                  <a href="{{url('admin/user')}}" class="btn btn-sm btn-dark"><i class="fa fa-th"></i> All Information </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <table class="table table-bordered table-striped tableview">
                    <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td>{{$User->name}}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>{{$User->email}}</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td>{{$User->phone}}</td>
                    </tr>
                    <tr>
                      <td>Role</td>
                      <td>:</td>
                      <td>{{$User->userRole->role_name}}</td>
                    </tr>
                    <tr>
                      <td>Time</td>
                      <td>:</td>
                      <td>{{$User->created_at ->format('M d,Y | g:i:s a')}}</td>  <!--Date$time format -->
                    </tr>
                  </table>
                </div>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection
