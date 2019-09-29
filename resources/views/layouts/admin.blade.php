<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('contents/admin')}}/assets/images/favicon.png">
    <link href="{{asset('contents/admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/admin_press.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="{{asset('contents/admin')}}/js/sweetalert.min.js"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>

                            <img src="{{asset('contents/admin')}}/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="{{asset('contents/admin')}}/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
            <span>

                         <img src="{{asset('contents/admin')}}/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <img src="{{asset('contents/admin')}}/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>

                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated slideInUp">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>{{Auth::user()->name}}</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated slideInUp" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 1 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('contents/admin')}}/assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('contents/admin')}}/assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{asset('contents/admin')}}/assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>{{Auth::user()->name}}</h4>
                                                <p class="text-muted">{{Auth::user()->email}}</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{route('logout')}}"onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="profile-img"> <img src="{{asset('contents/admin')}}/assets/images/users/profile.png" alt="user" />
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                      <h5>{{Auth::user()->name}}</h5>

                        <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                        <a href="{{route('logout')}}" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                        <div class="dropdown-menu animated flipInY">
                        <a href=" #" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}"onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class="waves-effect waves-dark" href="{{url('admin')}}"><i class="mdi mdi-gauge"></i><span class="hide-menu"> Dashboard </span></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="fa fa-user-md"></i><span class="hide-menu"> Admin </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('admin/user/add')}}">Admin Registration </a></li>
                                <li><a href="{{url('admin/user')}}">All Admin</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="index.html#" aria-expanded="false"><i class=" fa fa-user-o"></i><span class="hide-menu">  Users </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="fa fa-users" href="{{url('admin/alluser')}}"> All User</a></li>
                                <li> <a class="waves-effect waves-dark" href="{{url('admin/userpost')}}" aria-expanded="false"><i class="fa fa-comments"></i><span class="hide-menu"> User Post</span></a></li>
                                <li> <a class="waves-effect waves-dark" href="{{url('admin/user/unapprovedpost')}}" aria-expanded="false"><i class="fa fa-paper-plane"></i><span class="hide-menu"> Pending Post</span></a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('allpost')}}"  target="_blank" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Live Site</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" aria-expanded="false"><i class=" fa fa-sign-out"></i><span class="hide-menu">Logout </span></a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h3 class="text-themecolor">Dashboard</h3>
              </div>
              <div class="col-md-7 align-self-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
              </div>
          </div>
          @yield('content')

            <footer class="footer text-center"> © 2019 Admin Press, Develop by <span>{{Auth::user()->name}}</span></footer>
        </div>
    </div>

    <script src="{{asset('contents/admin')}}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/jquery.slimscroll.js"></script>
    <script src="{{asset('contents/admin')}}/js/waves.js"></script>
    <script src="{{asset('contents/admin')}}/js/sidebarmenu.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/custom.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/dashboard1.js"></script>
        <script src="{{asset('contents/admin')}}/js/custom.js"></script>


</body>

</html>
