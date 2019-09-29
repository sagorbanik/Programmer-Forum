@extends('layouts.website')
@section('content')

<div class="container">
    <div class="col-md-12 text-center pb20">
        <h1>Post Topic</h1>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8">
                <div class="post">
                  @if(Session::has('success'))
                  <script>
                      swal({title: "Pending!",text: "Your post has been Pending.",timer:3000,});
                  </script>
                 @endif

                 @if(Session::has('error'))
                 <script>
                     swal({ title: "Unsuccess!",text: "Sorry,Your Post is Unsuccessfully .",timer:3000, icon: "warning",});
                 </script>
                @endif

                    <form action="{{url('topic/submit')}}" class="form newtopic" method="post">
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
                                    <input type="text" placeholder="Enter Topic Title" class="form-control" value="{{old('topic_title')}}" name="topic_title" />
                                    @if ($errors->has('topic_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('topic_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 col-md-6">
                                      <select name="category" id="category"  class="form-control" >
                                          <option value="" disabled selected>Select Category</option>
                                          <option value="Programming">Programming</option>
                                          <option id="nonp" value="Non Programming">Non Programming</option>
                                      </select>
                                      @if ($errors->has('category'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('category') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                                    <div class="col-lg-6 col-md-6{{ $errors->has('subcategory') ? ' is-invalid' : '' }}">
                                        <select name="subcategory" id="subcategory" value="{{old('subcategory')}}"  class="form-control" >
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="PHP">PHP</option>
                                            <option value="JAVA">JAVA</option>
                                            <option value="C#">C#</option>
                                            <option value="C">C</option>
                                            <option value="OTHER">Other</option>
                                        </select>
                                        @if ($errors->has('subcategory'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('subcategory') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="{{ $errors->has('description') ? ' is-invalid' : '' }}">
                                    <textarea name="description" id="desc" placeholder="Description" value="{{old('description')}}"  class="form-control" ></textarea>
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
                                  <input type="submit" class="btn btn-primary">
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
