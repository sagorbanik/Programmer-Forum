@section('content')
<div class="row">
  @extends('layouts.admin')
    <div class="col-lg-12">
        <div class="card card-outline-info">
          <form method="post" action="{{url('admin/user/registration')}}">
              @csrf
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="m-b-0 text-white"><i class="fa fa-bandcamp"></i> User Registration</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/user')}}" class="btn btn-sm btn-dark"><i class="fa fa-th"></i> All User</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                @if(Session::has('success'))
                <script>
                    swal({ title: "Success!", text: "User Registration Success.", timer:5000, icon: "success",});
                </script>
                @endif

                @if(Session::has('error'))
                <script>
                    swal({ title: "Opps!", b   text: "Message send failed.", timer:5000, icon: "warning",});
                </script>
                @endif
                  <div class="form-group row{{$errors->has('name')? ' has-error':''}}">
                    <label class="col-sm-3 col-form-label custom_form_label">Name:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="{{old('name')}}">
                      @if ($errors->has('name'))
    											<span class="invalid-feedback mb-0" role="alert">
    													<strong>{{ $errors->first('name') }}</strong>
    											</span>
    									@endif
                    </div>
                  </div>
                  <div class="form-group row ">
                    <label class="col-sm-3 col-form-label custom_form_label">Phone:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                    </div>
                  </div>
                  <div class="form-group row{{$errors->has('email')? ' has-error':''}}">
                    <label class="col-sm-3 col-form-label custom_form_label">Email:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="email" value="{{old('email')}}">
                      @if ($errors->has('email'))
    											<span class="invalid-feedback mb-0" role="alert">
    													<strong>{{ $errors->first('email') }}</strong>
    											</span>
    									@endif
                    </div>
                  </div>
                  <div class="form-group row{{$errors->has('password')? ' has-error':''}}">
                    <label class="col-sm-3 col-form-label custom_form_label">Password:</label>
                    <div class="col-sm-7">
                      <input type="password" class="form-control" name="password" value="{{old('password')}}">
                      @if ($errors->has('password'))
    											<span class="invalid-feedback mb-0" role="alert">
    													<strong>{{ $errors->first('password') }}</strong>
    											</span>
    									@endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label custom_form_label">Confirm Password:</label>
                    <div class="col-sm-7">
                      <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label custom_form_label">Select User Role:</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="role">
                            <option value="">Select Role</option>
                            @foreach($allRole as $urole)
                            <option value="{{$urole->id}}">{{$urole->role_name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                  <button type="submit" class="btn btn-sm btn-info">REGISTRATION</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
