@extends('layouts.website')
@section('content')

<div class="container">
  @if(Session::has('success'))
  <script>
      swal({title: "Success!",text: "Your Post Update Successfully",timer:3000, icon: "success",});
  </script>
 @endif

 @if(Session::has('error'))
 <script>
     swal({ title: "Unsuccess!",text: "Sorry,Your Post Update is Unsuccessful .",timer:3000, icon: "warning",});
 </script>
@endif
    <div class="col-md-12 text-center pb20">
        <h1>Update Topic</h1>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8">
                <div class="post">
                  @if(Session::has('success'))
                  <script>
                      swal({title: "Success!",text: "Your Post Update Successfully",timer:3000, icon: "success",});
                  </script>
                 @endif

                 @if(Session::has('error'))
                 <script>
                     swal({ title: "Unsuccess!",text: "Sorry,Your Post Update is Unsuccessful .",timer:3000, icon: "warning",});
                 </script>
                @endif
                    <form action="{{url('topic/update')}}" class="form newtopic" method="post">
                      @csrf
                        <div class="topwrap {{$errors->has('name')? 'has-error':''}}">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="{{asset('contents/website')}}/images/avatar4.jpg" alt="" />
                                    <div class="status red">&nbsp;</div>
                                </div>
                            </div>
                            <div class="posttext pull-left{{ $errors->has('topic_title') ? ' is-invalid' : '' }}">
                                <div>
                                    <input type="hidden" name="id" value="{{$data->post_id}}"  />
                                    <input type="text" placeholder="Enter Topic Title" class="form-control" value="{{$data->post_title}}" name="topic_title" />
                                    @if ($errors->has('post_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('post_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row" value="{{$data->post_catagory}}">
                                  <div class="col-lg-6 col-md-6">
                                      <select name="category" id="category"  class="form-control" >
                                          <option value="{{$data->post_catagory}}">{{$data->post_catagory}}</option>
                                          <option value="Programming">Programming</option>
                                          <option value="Non Programming">Non Programming</option>
                                      </select>
                                      @if ($errors->has('post_catagory'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('post_catagory') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                                    <div class="col-lg-6 col-md-6{{ $errors->has('subcategory') ? ' is-invalid' : '' }}">
                                        <select name="subcategory" id="subcategory" value=""  class="form-control" >
                                            <option value="{{$data->post_subcatagory}}" selected>{{$data->post_subcatagory}}</option>
                                            <option value="PHP">PHP</option>
                                            <option value="JAVA">JAVA</option>
                                            <option value="C#">C#</option>
                                            <option value="C">C</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @if ($errors->has('subcategory'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('subcategory') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="{{ $errors->has('description') ? ' is-invalid' : '' }}">
                                    <textarea name="description" id="desc" placeholder=" Topic Description"  class="form-control" >{{$data->post_description}}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="postinfobot">
                            <div class="pull-right postreply">
                                <div class="pull-left">
                                  <input type="submit" class="btn btn-primary" value="Update">

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
        </div>
          @endsection
    </div>

</div>
