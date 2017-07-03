<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>@yield('title')</title>

  <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}"> 
     <link rel="stylesheet" href="{{URL::asset('/css/font-awesome.min.css')}}">
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>

  </head>
  <body >
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top custom_navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <div class="brand">
            <a class="navbar-brand" href="#"><img src="{{URL::asset('images/logo.png')}}" alt=""></a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="row">
            <div class="col-md-offset-2 col-md-8">
              <ul class="nav navbar-nav nav_custom">
                <li class="{{ Request::is('/') ? 'active' :''}}"><a href="{{ route('home')}}">home <span class="sr-only">(current)</span></a></li>

                <li class="{{ Request::is('courses') ? 'active' :''}}"><a href="{{ route('courses')}}">courses</a></li>
                <li class="{{ Request::is('about') ? 'active' :''}}"><a href="{{ route('about')}}">ayuryoga gurukulam</a></li>
                <li  class="{{ Request::is('booknow') ? 'active' :''}}"><a href="{{ route('booknow')}}">book now <span class="sr-only">(current)</span></a></li>
                
                <li class="{{ Request::is('treatments') ? 'active' :''}}"><a href="{{ route('treatments')}}">treatments<span class="sr-only">(current)</span></a></li>
                <li><a href="#">gallery<span class="sr-only">(current)</span></a></li>

                <li class="{{ Request::is('contact') ? 'active' :''}}"><a href="{{ route('contact')}}">contact us <span class="sr-only">(current)</span></a></li>

              </ul>
            </div>
          </div>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

<div class="container-fluid main-content">
            @yield('content')
        </div>



         <footer class="sec_footer">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-3">
                                      <div class="footer_content">
                                        <h5>Ayur Yoga Gurukulam</h5>
                                        <ul>
                                          <li><a href="#">Home</a></li>
                                          <li><a href="#">About Us</a></li>
                                          <li><a href="#">Yoga Courses </a></li>
                                          <li><a href="#">Contact</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="footer_content">
                                        <h5>Help</h5>
                                        <ul>
                                          <li><a href="#">FAQ</a></li>
                                          <li><a href="#">Terms and Conditions</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="footer_payment">
                                        <h5>Payments Powered by</h5>
                                        <img src="images/pp_svg.svg" alt="">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="footer_social_content">
                                        <h5>Connect With us</h5>
                                        <ul>
                                          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </footer>
                              <section class="footer_sub">
                                <div class="container">
                                  <div class="footer_sub_content"><p>Copyright © <a href="#">Ayur Yoga Gurukulam</a> 2017 All rights reserved</p></div>
                                </div>
                              </section>


                        

        </body>
        </html>