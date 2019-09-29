<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >Forum :: Home Page</title>
    <link href="{{asset('contents/website')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('contents/website')}}/images/headlog.jpg" rel="stylesheet">
    <link href="{{asset('contents/website')}}/css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.0.3/{{asset('contents/website')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="rs-plugin/{{asset('contents/website')}}/css/settings.css" media="screen" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
</head>

<body>

    <div class="container-fluid">
        <div class="headernav">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="{{url('/')}}"><img src="{{asset('contents/website')}}/images/logo.jpg" alt=""  /></a></div>
                    <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                      <a href="{{url('/')}}">Programmer Forum</a>
                    </div>

                    <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                        <div class="stnt pull-left">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-4 search hidden-xs hidden-sm col-md-3 ">
                        <div class="wrap ">
                            <form action="#" method="post" class="form">
                                <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="navbar">
                      <div class="navbar">
                         <div class="col-md-8 ">
                             <a class="{{url('/')}}" href="#"style="text-decoration:none;"><i class="fa fa-fw fa-home"></i> Home</a>
                             <a href="{{url('liveide')}}"style="text-decoration:none;"><i class="fa fa-slideshare"></i> Live IDE</a>
                         </div>
                         <div class="col-md-4 content-right">
                             <a href="{{url('login')}}" style="text-decoration:none;"><i class="align-right"></i>Login</a>
                             <a href="{{url('registration')}}" style="text-decoration:none;"><i class="align-right"></i> Registration</a>
                         </div>
                     </div>
                        <div class="col-md-4 content-right">

                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="col-md-12 text-center pb20">
                    <h1>Live IDE</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="post">
                            <form action="#" class="form newtopic" method="post">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="{{asset('contents/website')}}/images/avatar4.jpg" alt="" />
                                            <div class="status red">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <div>
                                            <textarea name="desc" id="desc" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfobot">
                                    <div class="pull-right postreply">
                                        <div class="content-center"><button type="submit" class="btn btn-primary btn-lg">Check</button></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div><!-- POST -->
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

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/{{asset('contents/website')}}/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/{{asset('contents/website')}}/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{asset('contents/website')}}/js/bootstrap.min.js"></script>

</body>

</html>
