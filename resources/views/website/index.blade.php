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
                    <h1>All Question</h1>
                    @if(Session::has('successfull'))
                    <script>
                        swal({title: "Success!",text: "Your Post Delete Successfully",timer:3000, icon: "success",});
                    </script>
                   @endif
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <!-- POST -->
                        @foreach($all as $data)

                        <div class="post">
                            <div class="wrap-ut pull-left">
                                <div class="userinfo pull-left">
                                    <div class="avatar">
                                        <img src="{{asset('contents/website')}}/images/avatar2.jpg" alt="" />
                                        <div class="status green">&nbsp;</div>
                                        <h6 style="font-size:14px; font-weight:500;">{{$data->post_creator}}</h6>
                                    </div>
                                </div>
                                <div class="posttext pull-left">
                                    <h2>{{$data->post_title}}</h2>
                                    <p style="float:left; margin-right:10px; font-weight:700">{{$data->post_catagory}}</p>
                                    <p style="font-weight:700">{{$data->post_subcatagory}}</p>
                                    <p style="border:2px solid #ffffff;">{{$data->post_description}}</p>
                                    <a href="{{url('comments/'.$data->post_id)}}"><button class="btn  btn-primary text-left" >Comments</button></a>
                                    <a href="{{url('edit/'.$data->post_id)}}"><button class="edit btn btn-primary">Edit</button></a>
                                    <a href="{{url('edit/soft_delete/'.$data->post_id)}}"><button class="edit btn btn-primary">Delete</button></a>
                                </div>

                            </div>
                            <div class="postinfo pull-left">
                              <h4>Post Time</h4>
                                <div class="time"><i class="fa fa-clock-o">{{$data->created_at->format('d M | h:i') }}</i> </div>
                                    <!-- <fieldset class="rating">
                                      <p style="margin-top:20px; margin-left:10px;">Post Rating</p>
                                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                    </fieldset> -->
                                      <div class="clearfix"></div>
                            </div>



                            <div class="clearfix"></div>
                        </div>
                        @endforeach
                    </div>
                <script type="text/javascript">
                    $('#rating-form').on('change','[name="rating"]',function(){
                  	$('#selected-rating').text($('[name="rating"]:checked').val());
                      });
                </script>

@endsection
