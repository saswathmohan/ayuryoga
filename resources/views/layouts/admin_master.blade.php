<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

   <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('/css/custom.min.css')}}"> 
     <link rel="stylesheet" href="{{URL::asset('/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/css/customedit.css')}}">
 <title>@yield('title')</title>
  </head>

 <body class="nav-md">




<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><span>Ayuryoga Gurukulam</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">

                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        
                        <ul class="nav side-menu">
                            <li><a href="{{ route('dashboard')}}"><i class="fa fa-line-chart"></i>Dashboard</a>  </li>

                           

                            <li><a href="{{ route('course')}}"><i class="fa fa-balance-scale"></i>Courses</a></li>

                            
                            

                         

                            <li><a><i class="fa fa-file-text-o "></i>Bookings<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="">Course</a></li>
                                     <li><a href="">Treatment</a></li>
                                   
                                </ul>
                            </li>
                            <li><a href=""><i class="fa fa-file-image-o" ></i>Gallery</a>
                            <li><a href=""><i class="fa fa-question " ></i>Enquiries</a>
                             <li><a href=""><i class="fa fa-cogs" ></i>Setup</a>
                            
                       
                               
                         
                           
                        </ul>
                    </div>


                </div>
               
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-user"></i> 
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                {{--<li><a href="javascript:;"> Profile</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:;">--}}
                                        {{--<span class="badge bg-red pull-right">50%</span>--}}
                                        {{--<span>Settings</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="javascript:;">Help</a></li>--}}
                                <li><a href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                       
                    </ul>
                </nav>
            </div>
        </div>


<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/custom.min.js')}}"></script>
<script src="{{URL::asset('js/jquery-customselect-1.9.1.min.js')}}"></script>

        <div class="container-fluid main-content">
            @yield('content')
        </div>

               <footer>
          <div class="pull-right">
            <a href="">Ayuryoga Gurukulam</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>