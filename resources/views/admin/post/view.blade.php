@extends('layouts.admin')
@section('content')
<div class="row ">
    <div class="col-lg-12 ">
        <div class="card card-outline-info">
          <div class="card-header">
            <div class="row">
              <div class="col-md-8">
                <h4 class="m-b-0 text-white"> <i class="fa fa-bandcamp"></i> View User Post</h4>
              </div>
                <div class="col-md-4 text-right">
                  <a href="{{url('admin/contactus')}}" class="btn btn-sm btn-dark"><i class="fa fa-th"></i> All Post </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <table class="table table-bordered table-striped tableview">
                    <tr>
                      <td>Post Creator</td>
                      <td>:</td>
                      <td>{{$data->post_creator}}</td>
                    </tr>
                    <tr>
                      <td>Post title</td>
                      <td>:</td>
                      <td>{{$data->post_title}}</td>
                    </tr>
                    <tr>
                      <td>Post Catagory</td>
                      <td>:</td>
                      <td>{{$data->post_catagory}}</td>
                    </tr>
                    <tr>
                      <td>Post Subcatagory</td>
                      <td>:</td>
                      <td>{{$data->post_subcatagory}}</td>
                    </tr>
                    <tr>
                      <td>Description</td>
                      <td>:</td>
                      <td>{{$data->post_description}}</td>
                    </tr>
                    <tr>
                      <td>Time</td>
                      <td>:</td>
                      <td>{{$data->created_at ->format('M d,Y | g:i:s a')}}</td>  <!--Date$time format -->
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
