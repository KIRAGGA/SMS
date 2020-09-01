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
            <a class="navbar-brand" href="/"><i class="fa fa-university"></i><span>KIFLAPS</span></a>
            <!-- IMG BASED LOGO  -->
             {{-- <a class="navbar-brand" href="index.html"><img src="{{ URL::asset("assets/storage/images/kiflaps_logo.jpeg")}}" alt="logo"></a> --}}
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li class="active"><a href="/">Home</a></li>            
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
              <li><a href="/contact">Contact</a></li>
              
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
    <!-- Start Slider -->
    <section id="mu-slider">
      <!-- Start single slider item -->
      <div class="mu-slider-single">
        <div class="mu-slider-img">
          <figure>
            <img src="{{URL::asset('/storage/images/capture.png')}}" alt="img">
          </figure>
        </div>
        <div class="mu-slider-content">
          <h4>Welcome To KILAPS Nairobi</h4>
          <span></span>
          <h2>We Will Help You Learn</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
          <a href="#" class="mu-read-more-btn">Read More</a>
        </div>
      </div>
      <!-- Start single slider item -->
      <!-- Start single slider item -->
      <div class="mu-slider-single">
        <div class="mu-slider-img">
          <figure>
            <img src="{{URL::asset('/storage/images/capture.png')}}" alt="img">
          </figure>
        </div>
        <div class="mu-slider-content">
          <h4>Welcome to KIFLAPS Kibera Branch</h4>
          <span></span>
          <h2>We give You The Best Education Ever</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
          <a href="#" class="mu-read-more-btn">Read More</a>
        </div>
      </div>
      <!-- Start single slider item -->
      <!-- Start single slider item -->
      <div class="mu-slider-single">
        <div class="mu-slider-img">
          <figure>
            <img src="{{URL::asset('/storage/images/capture.png')}}" alt="img">
          </figure>
        </div>
        <div class="mu-slider-content">
          <h4>Welcoe to KIFLAPS Mombasa Branch</h4>
          <span></span>
          <h2>Education For Everyone</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
          <a href="#" class="mu-read-more-btn">Read More</a>
        </div>
      </div>
      <!-- Start single slider item -->    
    </section>
    <!-- End Slider -->
    <!-- Start service  -->
    <section id="mu-service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-service-area">
              <!-- Start single service -->
              <div class="mu-service-single">
                <span class="fa fa-book"></span>
                <h3>Learn Online</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
              </div>
              <!-- Start single service -->
              <!-- Start single service -->
              <div class="mu-service-single">
                <span class="fa fa-users"></span>
                <h3>Expert Teachers</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
              </div>
              <!-- Start single service -->
              <!-- Start single service -->
              <div class="mu-service-single">
                <span class="fa fa-table"></span>
                <h3>Best Classrooms</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
              </div>
              <!-- Start single service -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End service  -->
  
    <!-- Start about us -->
    <section id="mu-about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-us-area">           
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-left">
                    <!-- Start Title -->
                    <div class="mu-title">
                      <h2>About Us</h2>              
                    </div>
                    <!-- End Title -->
                    <p>KIFLAPS was founded in the year 2007. With over an experience of 13 years in teaching Foreign Languages and Professional Studies.
                     We have subsequently converted inexperienced student into proficient and well versed individuals ready to fit into the global professional stage. </p>

                     <p>KIFLAPS allows you to study practical and professional courses which are relevant to the 21st Century.
                       We have embraced globalization by teaching foreign Languages. We have also utilised technology to reach out to students across the globe.
                     </p>
                    <ul>
                      <li><b>Our Motto :</b> Knowledge is Light</li>
                      <li><b>Our Vision :</b> To provide high qualty academic and vocational training to students with ambition in acquiring professional skills.</li>
                      
                      <li><b>Mission :</b> Provide our students with Knowledge, skills and competence in foreign kanguages exposing them to a word fukk of opportunities.</li>
                      <li><b>Core Values :</b> Integrity, Respect, Innovation, Open-minded</li>
                    </ul>
                    
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-right">                            
                  <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                    <img src="assets/img/about-us.jpg" alt="img">
                  </a>                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End about us -->
  
    <!-- Start about us counter -->
    <section id="mu-abtus-counter">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-abtus-counter-area">
              <div class="row">
                <!-- Start counter item -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="mu-abtus-counter-single">
                    <span class="fa fa-book"></span>
                    <h4 class="counter">41</h4>
                    <p>Subjects</p>
                  </div>
                </div>
                <!-- End counter item -->
                <!-- Start counter item -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="mu-abtus-counter-single">
                    <span class="fa fa-users"></span>
                    <h4 class="counter">510</h4>
                    <p>Students</p>
                  </div>
                </div>
                <!-- End counter item -->
                <!-- Start counter item -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="mu-abtus-counter-single">
                    <span class="fa fa-flask"></span>
                    <h4 class="counter">4</h4>
                    <p>Modern Lab</p>
                  </div>
                </div>
                <!-- End counter item -->
                <!-- Start counter item -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="mu-abtus-counter-single no-border">
                    <span class="fa fa-user-secret"></span>
                    <h4 class="counter">21</h4>
                    <p>Teachers</p>
                  </div>
                </div>
                <!-- End counter item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End about us counter -->
  
    <!-- Start features section -->
    <section id="mu-features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-features-area">
              <!-- Start Title -->
              <div class="mu-title">
                <h2>Our Features And Online classes</h2>
                <p>We provide a range of services through the e-learning platform which enables our students to attend classes in any geographical location.</p>
              </div>
              <!-- End Title -->
              <!-- Start features content -->
              <div class="mu-features-content">
                <div class="row">
                  <div class="col-lg-4 col-md-4  col-sm-6">
                    <div class="mu-single-feature">
                      <span class="fa fa-book"></span>
                      <h4>Professional Courses</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="mu-single-feature">
                      <span class="fa fa-users"></span>
                      <h4>Expert Teachers</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="mu-single-feature">
                      <span class="fa fa-laptop"></span>
                      <h4>Online Learning</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="mu-single-feature">
                      <span class="fa fa-microphone"></span>
                      <h4>Audio Lessons</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="mu-single-feature">
                      <span class="fa fa-film"></span>
                      <h4>Video Lessons</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="mu-single-feature">
                      <span class="fa fa-certificate"></span>
                      <h4>Professional Certificate</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End features content -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End features section -->
  
    <!-- Start latest course section -->
    <section id="mu-latest-courses">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-latest-courses-area">
              <!-- Start Title -->
              <div class="mu-title">
                <h2>Latest Courses</h2>
                <p>We have a variety of courses ranging from Languages to Professional course. After the study be assured to receive your professional certificate and Diploma.</p>
              </div>
              <!-- End Title -->
              <!-- Start latest course content -->
              <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="mu-latest-course-single">
                    <figure class="mu-latest-course-img">
                      <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                      <figcaption class="mu-latest-course-imgcaption">
                        <a href="#">Japanese</a>
                        <span><i class="fa fa-clock-o"></i>90Days</span>
                      </figcaption>
                    </figure>
                    <div class="mu-latest-course-single-content">
                      <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                      <div class="mu-latest-course-single-contbottom">
                        <a class="mu-course-details" href="#">Details</a>
                        <span class="mu-course-price" href="#">$165.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="mu-latest-course-single">
                    <figure class="mu-latest-course-img">
                      <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                      <figcaption class="mu-latest-course-imgcaption">
                        <a href="#">Engineering </a>
                        <span><i class="fa fa-clock-o"></i>75Days</span>
                      </figcaption>
                    </figure>
                    <div class="mu-latest-course-single-content">
                      <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                      <div class="mu-latest-course-single-contbottom">
                        <a class="mu-course-details" href="#">Details</a>
                        <span class="mu-course-price" href="#">$165.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="mu-latest-course-single">
                    <figure class="mu-latest-course-img">
                      <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                      <figcaption class="mu-latest-course-imgcaption">
                        <a href="#">Academic</a>
                        <span><i class="fa fa-clock-o"></i>45Days</span>
                      </figcaption>
                    </figure>
                    <div class="mu-latest-course-single-content">
                      <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                      <div class="mu-latest-course-single-contbottom">
                        <a class="mu-course-details" href="#">Details</a>
                        <span class="mu-course-price" href="#">$165.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="mu-latest-course-single">
                    <figure class="mu-latest-course-img">
                      <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                      <figcaption class="mu-latest-course-imgcaption">
                        <a href="#">Drawing</a>
                        <span><i class="fa fa-clock-o"></i>90Days</span>
                      </figcaption>
                    </figure>
                    <div class="mu-latest-course-single-content">
                      <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                      <div class="mu-latest-course-single-contbottom">
                        <a class="mu-course-details" href="#">Details</a>
                        <span class="mu-course-price" href="#">$165.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="mu-latest-course-single">
                    <figure class="mu-latest-course-img">
                      <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                      <figcaption class="mu-latest-course-imgcaption">
                        <a href="#">Engineering </a>
                        <span><i class="fa fa-clock-o"></i>75Days</span>
                      </figcaption>
                    </figure>
                    <div class="mu-latest-course-single-content">
                      <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                      <div class="mu-latest-course-single-contbottom">
                        <a class="mu-course-details" href="#">Details</a>
                        <span class="mu-course-price" href="#">$165.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="mu-latest-course-single">
                    <figure class="mu-latest-course-img">
                      <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                      <figcaption class="mu-latest-course-imgcaption">
                        <a href="#">Academic</a>
                        <span><i class="fa fa-clock-o"></i>45Days</span>
                      </figcaption>
                    </figure>
                    <div class="mu-latest-course-single-content">
                      <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                      <div class="mu-latest-course-single-contbottom">
                        <a class="mu-course-details" href="#">Details</a>
                        <span class="mu-course-price" href="#">$165.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End latest course content -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End latest course section -->
  
    <!-- Start our teacher -->
    <section id="mu-our-teacher">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-our-teacher-area">
              <!-- begain title -->
              <div class="mu-title">
                <h2>Our Teachers</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p>
              </div>
              <!-- end title -->
              <!-- begain our teacher content -->
              <div class="mu-our-teacher-content">
                <div class="row">
                  <div class="col-lg-3 col-md-3  col-sm-6">
                    <div class="mu-our-teacher-single">
                      <figure class="mu-our-teacher-img">
                        <img src="assets/img/teachers/teacher-01.png" alt="teacher img">
                        <div class="mu-our-teacher-social">
                          <a href="#"><span class="fa fa-facebook"></span></a>
                          <a href="#"><span class="fa fa-twitter"></span></a>
                          <a href="#"><span class="fa fa-linkedin"></span></a>
                          <a href="#"><span class="fa fa-google-plus"></span></a>
                        </div>
                      </figure>                    
                      <div class="mu-ourteacher-single-content">
                        <h4>Brian Dean</h4>
                        <span>Math Teacher</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="mu-our-teacher-single">
                      <figure class="mu-our-teacher-img">
                        <img src="assets/img/teachers/teacher-02.png" alt="teacher img">
                        <div class="mu-our-teacher-social">
                          <a href="#"><span class="fa fa-facebook"></span></a>
                          <a href="#"><span class="fa fa-twitter"></span></a>
                          <a href="#"><span class="fa fa-linkedin"></span></a>
                          <a href="#"><span class="fa fa-google-plus"></span></a>
                        </div>
                      </figure>                    
                      <div class="mu-ourteacher-single-content">
                        <h4>James Hein</h4>
                        <span>Physics Teacher</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="mu-our-teacher-single">
                      <figure class="mu-our-teacher-img">
                        <img src="assets/img/teachers/teacher-03.png" alt="teacher img">
                        <div class="mu-our-teacher-social">
                          <a href="#"><span class="fa fa-facebook"></span></a>
                          <a href="#"><span class="fa fa-twitter"></span></a>
                          <a href="#"><span class="fa fa-linkedin"></span></a>
                          <a href="#"><span class="fa fa-google-plus"></span></a>
                        </div>
                      </figure>                    
                      <div class="mu-ourteacher-single-content">
                        <h4>Rebeca Michel</h4>
                        <span>English Teacher</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="mu-our-teacher-single">
                      <figure class="mu-our-teacher-img">
                        <img src="assets/img/teachers/teacher-04.png" alt="teacher img">
                        <div class="mu-our-teacher-social">
                          <a href="#"><span class="fa fa-facebook"></span></a>
                          <a href="#"><span class="fa fa-twitter"></span></a>
                          <a href="#"><span class="fa fa-linkedin"></span></a>
                          <a href="#"><span class="fa fa-google-plus"></span></a>
                        </div>
                      </figure>                    
                      <div class="mu-ourteacher-single-content">
                        <h4>John Doe</h4>
                        <span>Biology Teacher</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- End our teacher content -->           
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End our teacher -->
  
    <!-- Start testimonial -->
    <section id="mu-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-testimonial-area">
              <div id="mu-testimonial-slide" class="mu-testimonial-content">
                <!-- start testimonial single item -->
                <div class="mu-testimonial-item">
                  <div class="mu-testimonial-quote">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                    </blockquote>
                  </div>
                  <div class="mu-testimonial-img">
                    <img src="assets/img/testimonial-1.png" alt="img">
                  </div>
                  <div class="mu-testimonial-info">
                    <h4>John Doe</h4>
                    <span>Happy Student</span>
                  </div>
                </div>
                <!-- end testimonial single item -->
                <!-- start testimonial single item -->
                <div class="mu-testimonial-item">
                  <div class="mu-testimonial-quote">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                    </blockquote>
                  </div>
                  <div class="mu-testimonial-img">
                    <img src="assets/img/testimonial-3.png" alt="img">
                  </div>
                  <div class="mu-testimonial-info">
                    <h4>Rebaca Michel</h4>
                    <span>Happy Parent</span>
                  </div>
                </div>
                <!-- end testimonial single item -->
                <!-- start testimonial single item -->
                <div class="mu-testimonial-item">
                  <div class="mu-testimonial-quote">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                    </blockquote>
                  </div>
                  <div class="mu-testimonial-img">
                    <img src="assets/img/testimonial-2.png" alt="img">
                  </div>
                  <div class="mu-testimonial-info">
                    <h4>Stev Smith</h4>
                    <span>Happy Student</span>
                  </div>
                </div>
                <!-- end testimonial single item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End testimonial -->
  
    <!-- Start from blog -->
    <section id="mu-from-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-from-blog-area">
              <!-- start title -->
              <div class="mu-title">
                <h2>From Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>
              </div>
              <!-- end title -->  
              <!-- start from blog content   -->
              <div class="mu-from-blog-content">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img">
                        <a href="#"><img src="assets/img/blog/blog-1.jpg" alt="img"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <a href="#">By Admin</a>
                        <a href="#">02 June 2016</a>
                        <span><i class="fa fa-comments-o"></i>87</span>
                      </div>
                      <div class="mu-blog-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                        <a class="mu-read-more-btn" href="#">Read More</a>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img">
                        <a href="#"><img src="assets/img/blog/blog-2.jpg" alt="img"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <a href="#">By Admin</a>
                        <a href="#">02 June 2016</a>
                        <span><i class="fa fa-comments-o"></i>87</span>
                      </div>
                      <div class="mu-blog-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                        <a class="mu-read-more-btn" href="#">Read More</a>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img">
                        <a href="#"><img src="assets/img/blog/blog-3.jpg" alt="img"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                        </figcaption>                      
                      </figure>
                      <div class="mu-blog-meta">
                        <a href="#">By Admin</a>
                        <a href="#">02 June 2016</a>
                        <span><i class="fa fa-comments-o"></i>87</span>
                      </div>
                      <div class="mu-blog-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                        <a class="mu-read-more-btn" href="#">Read More</a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>     
              <!-- end from blog content   -->   
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End from blog -->
  
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