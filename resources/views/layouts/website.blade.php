<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programmer Forum</title>
    <link href="{{asset('contents/website')}}/images/headlog.jpg" rel="shortcut icon">
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/font-awesome.min.css">
		<link href="{{asset('contents/website')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/custom.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/rating.css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('contents/website')}}/js/sweetalert.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container-fluid">
					<div class="headernav">
							<div class="container">
									<div class="row">
											<div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="{{url('/')}}"><img src="{{asset('contents/website')}}/images/logo.jpg" alt=""  /></a></div>
											<div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
												<a href="{{url('/')}}" style="font-family: 'Dancing Script', cursive; font-size:25px; font-weight:600; text-decoration:none;">Programmer Forum</a>
											</div>
											<div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
													<div class="wrap">
															<form action="{{url('search')}}" method="POST" class="form">
                                @csrf
																	<div class="pull-left txt">
                                    <input type="text" class="form-control" name="search" placeholder="Search Topics">
                                  </div>
																	<div class="pull-right">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                  </div>
																	<div class="clearfix"></div>
															</form>
													</div>
											</div>
											<div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
													<div class="stnt pull-left">
															<form action="" method="post" class="form">
																	<a href="{{url('topic')}}" class="btn btn-primary">Start New Topic</a>
															</form>
													</div>

													<div class="avatar pull-left dropdown" style="padding-left:20px;">
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                </ul>
                            </div>
													</div>
													<div class="clearfix"></div>
											</div>
									</div>
							</div>
					</div>
        </div>
        <section class="content">
				<div class="container">
			 <div class="row">
					 <div class="navbar">
							 <div class="col-md-8 ">
									 <a href="{{url('/')}}"style="text-decoration:none;"><i class="fa fa-fw fa-home"></i> Home</a>
									 <!-- <a href="{{url('liveide')}}"style="text-decoration:none;"><i class="fa fa-slideshare"></i> Live IDE</a> -->
							 </div>
               @guest
							 <div class="col-md-4 content-right">
									 <!-- <a href="{{url('new/user/login')}}" style="text-decoration:none;"><i class="align-right"></i>Login</a>
									 <a href="{{url('new/user/registration')}}" style="text-decoration:none;"><i class="align-right"></i> Registration</a> -->
							 </div>
               @else


               @endguest
               <h4 style="float: left;font-size: 20px;line-height: 29px;border-right: 1px solid gray;padding-right: 8px;">{{Auth::user()->name}}</h4>
               <a href="{{route('logout')}}"onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </div>
			 </div>
	 </div>


						@yield('content')
						<!-- -->
						<div class="col-lg-4 col-md-4">
											 <div class="sidebarblock ">
													 <h3>Categories</h3>
													 <div class="divline"></div>
													 <div class="blocktxt">

															<ul class="cats">
																	 <li><a href="{{url('subcategory/PHP')}}">PHP <span class="badge pull-right"></span></a></li>
																	 <li><a href="{{url('subcategory/JAVA')}}">JAVA <span class="badge pull-right"></span></a></li>
																	 <li><a href="{{url('subcategory/C#')}}">C# <span class="badge pull-right"></span></a></li>
																	 <li><a href="{{url('subcategory/PYTHON')}}">PYTHON <span class="badge pull-right"></span></a></li>
																	 <li><a href="{{url('subcategory/OTHER')}}">Other<span class="badge pull-right"></span></a></li>
															 </ul>
													 </div>
											 </div>

											 <!-- -->
											 <div class="sidebarblock">
													 <h3>Poll of the Week</h3>
													 <div class="divline"></div>
													 <div class="blocktxt">
															 <p>Intersting Topic!</p>
															 <form action="#" method="post" class="form">
																	 <table class="poll">
																			 <tr>
																					 <td>
																							 <div class="progress">
																									 <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
																											 PHP
																									 </div>
																							 </div>
																					 </td>
																					 <!-- <td class="chbox">
																							 <input id="opt1" type="radio" name="opt" value="1">
																							 <label for="opt1"></label>
																					 </td> -->
																			 </tr>
																			 <tr>
																					 <td>
																							 <div class="progress">
																									 <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
																											 JAVA
																									 </div>
																							 </div>
																					 </td>
																					 <!-- <td class="chbox">
																							 <input id="opt2" type="radio" name="opt" value="2" checked>
																							 <label for="opt2"></label>
																					 </td> -->
																			 </tr>
																			 <tr>
																					 <td>
																							 <div class="progress">
																									 <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
																											 PYTHON
																									 </div>
																							 </div>
																					 </td>
																					 <!-- <td class="chbox">
																							 <input id="opt3" type="radio" name="opt" value="3">
																							 <label for="opt3"></label>
																					 </td> -->
																			 </tr>
																	 </table>
															 </form>
													 </div>
											 </div>
											 </div>
									 </div>
							 </div>
					 </div>


					 <div class="container">
							 <div class="row">
									 <div class="col-lg-8 col-xs-12">
											 <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
											 <div class="pull-left">
													 <ul class="paginationforum">
															 <li class="hidden-xs"><a href="#">1</a></li>
															 <li class="hidden-xs"><a href="#">2</a></li>
															 <li class="hidden-xs"><a href="#">3</a></li>


													 </ul>
											 </div>
											 <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
											 <div class="clearfix"></div>
									 </div>
							 </div>
					 </div>


			 </section>

			 <footer>
					 <div class="container">
							 <div class="row">
									 <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="{{asset('contents/website')}}/images/logo.jpg" alt="" /></a></div>
									 <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2019, Programmer forum</div>
									 <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
											 <ul class="socialicons">
													 <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
													 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
													 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													 <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
													 <li><a href="#"><i class="fa fa-cloud"></i></a></li>
													 <li><a href="#"><i class="fa fa-rss"></i></a></li>
											 </ul>
									 </div>
							 </div>
					 </div>
			 </footer>
	 </div>

	 <script type="text/javascript" src="{{asset('contents/website')}}/../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
	 <script type="text/javascript" src="{{asset('contents/website')}}/rs-plugin/jquery.themepunch.plugins.min.js"></script>
	 <script type="text/javascript" src="{{asset('contents/website')}}/rs-plugin/jquery.themepunch.revolution.min.js"></script>
	 <script type="text/javascript" src="{{asset('contents/website')}}/bootstrap.min.js"></script>

</body>

</html>
