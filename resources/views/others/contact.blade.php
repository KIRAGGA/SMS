<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
        <!-- Favicon -->
        <link rel="stylesheet" href="{{ URL::asset('assets/img/favicon.ico') }}" type="image/x-icon" >

        <!-- Font awesome -->
        <link href={{ URL::asset("assets/css/font-awesome.css")}} rel="stylesheet">

        <!-- Bootstrap -->
        <link href={{ URL::asset("assets/css/bootstrap.css")}} rel="stylesheet">
        
        <!-- Slick slider -->
        <link href={{ URL::asset("assets/css/slick.css")}} rel="stylesheet" type="text/css">

        <!-- Fancybox slider -->
        <link href={{ URL::asset("assets/css/jquery.fancybox.css")}} rel="stylesheet" media="screen">

        <!-- Theme color -->
        <link id="switcher" href={{ URL::asset("assets/css/theme-color/default-theme.css")}} rel="stylesheet">
        
        <!-- Main style sheet -->
        <link href={{ URL::asset("assets/css/style.css")}} rel="stylesheet">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
            <!--START SCROLL TOP BUTTON -->
     <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>      
      </a>
    <!-- END SCROLL TOP BUTTON -->
  
    <!-- Start header  -->
    <header id="mu-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-header-area">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="mu-header-top-left">
                    <div class="mu-top-email">
                      <a><i class="fa fa-envelope"></i>
                      <span target="_blank">kiflapstudies@gmail.com</span></a>
                    </div>
                    <div class="mu-top-phone">
                      <i class="fa fa-phone"></i>
                      <span>(+254) 710 462 0352</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="mu-header-top-right">
                    <nav>
                      <ul class="mu-top-social-nav">
                        <li><a href="#"><span class="fa fa-facebook" target="_blank"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter" target="_blank"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram" target="_blank"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"target="_blank"></span></a></li>
                        <li><a href="#"><span class="fa fa-youtube" target="_blank"></span></a></li>
                        <li>
                          @if (Route::has('login'))
                              <div class="top-right links">
                                  @auth
                                      <a href="{{ url('/home') }}" class="btn btn-success">Dashboard</a>
                                  @else
                                          <a href="{{ route('login') }}" class="btn btn-success">Login</a>
              
                                      @if (Route::has('register'))
                                          <a href="{{ route('register') }}" class="btn btn-default">Register</a>
                                      @endif
                                  @endauth
                              </div>
                          @endif
                            </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="/"><i class="fa fa-university"></i><span>Varsity</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="/">Home</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/course">Course Archive</a></li>                
                <li><a href="/course-detail">Course Detail</a></li>                
              </ul>
            </li>           
            <li><a href="/gallery">Gallery</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/blog-archive">Blog Archive</a></li>                
                <li><a href="/blog-single">Blog Single</a></li>                
              </ul>
            </li>            
            <li class="active"><a href="/contact">Contact</a></li>
            
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                   
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
             <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Contact</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Contact</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            
            <h2>Get in Touch With Us</h2>
            <p>Fill in the enquiry form and we will get straight back to you.</p>
          </div>
          
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form class="contactform">                  
                    <p class="comment-form-author">
                      <label for="author">Name <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="author">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Subject</label>
                      <input type="text" name="subject">  
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Message</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                    </p>                
                    <p class="form-submit">
                      <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
                </div>
              </div>
              <div class="col-md-6">
               
                <div class="mapouter"><div class="gmap_canvas"><iframe width="645" height="410" id="gmap_canvas" src="https://maps.google.com/maps?q=kenya%20institute%20of%20foreign%20languages%20and%20professional%20studies&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/">nordvpn 2 year deal</a></div><style>.mapouter{position:relative;text-align:right;height:410px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:410px;width:645px;}</style></div>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

 <!-- Start footer -->
 <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>P.O. Box 1776-00100, GPO Narobi-Kenya</p>
                  <p>Phone: (+254) 710 462 0352 </p>
                  <p>Website: www.kiflaps.ac.ke</p>
                  <p>Email: kiflapstudies@gmail.com</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="#" rel="nofollow">Reagan</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->





        
  <!-- jQuery library -->
  <script src={{ URL::asset("assets/js/jquery.min.js")}}></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src={{ URL::asset("assets/js/bootstrap.js")}}></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src={{ URL::asset("assets/js/slick.js")}}></script>
  <!-- Counter -->
  <script type="text/javascript" src={{ URL::asset("assets/js/waypoints.js")}}></script>
  <script type="text/javascript" src={{ URL::asset("assets/js/jquery.counterup.js")}}></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src={{ URL::asset("assets/js/jquery.mixitup.js")}}></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src={{ URL::asset("assets/js/jquery.fancybox.pack.js")}}></script>
  
  
  <!-- Custom js -->
  <script src={{ URL::asset("assets/js/custom.js")}}></script> 

  </body>
</html>