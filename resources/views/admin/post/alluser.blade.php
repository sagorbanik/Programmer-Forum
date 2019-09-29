@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <div class="row">
                  <div class="col-md-8">
                    <h4 class="m-b-0 text-white"> <i class="fa fa-bandcamp"></i> All User Information</h4>
                  </div>
                    <div class="col-md-4 text-right">

                    </div>
                  </div>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover table_customize">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Time</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allUser as $data)
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                     <td>{{$data->created_at ->format('M d,Y | g:i:s a')}}</td> <!--Date$time format -->
                    <td>
                      <a href="{{url('admin/alluser/view/'.$data->slug)}}"> <i class="fa fa-plus-square fa-lg"></i></a>
                      <a href="#"> <i class="fa fa-pencil-square fa-lg"></i></a>
                      <a href="#"> <i class="fa fa-trash fa-lg"></i></a>
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
