@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <div class="row">
                  <div class="col-md-8">
                    <h4 class="m-b-0 text-white"> <i class="fa fa-bandcamp"></i> All User Post</h4>
                  </div>
                    <div class="col-md-4 text-right">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fa fa-th"></i> Demo</a>
                    </div>
                  </div>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover table_customize">
                <thead>
                  <tr>
                    <th> Title</th>
                    <th> Catagory</th>
                    <th>Subcatagory</th>
                    <th> Description</th>
                    <th>Time</th>
                    <th> Manage</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($all as $data)
                  <tr>
                    <td>{{str_limit($data->post_title,15)}}</td>
                    <td>{{$data->post_catagory}}</td>
                    <td>{{str_limit($data->post_subcatagory,15)}}</td>
                    <td>{{str_limit($data->post_description,20)}}</td>
                     <td>{{$data->created_at ->format('M d,Y | g:i:s a')}}</td> <!--Date$time format -->
                    <td class="text-center">
                      <a href="{{url('admin/userpost/view/'.$data->post_id)}}"> <i class="fa fa-eye fa-lg"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
</div>

@endsection
