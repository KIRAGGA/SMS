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
           <h2>Blog Single</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Blog Single</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
                          <a href="#"><img alt="img" src="assets/img/blog/blog-3.jpg"></a>
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
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus autem molestias nostrum eius optio et rem, cum voluptatibus aperiam soluta reiciendis quae nisi, debitis totam harum nulla! Voluptatem commodi quis, atque labore, sapiente tempora temporibus, repellendus laboriosam sunt aut dolores laborum libero? Laudantium non, enim, repellat recusandae quisquam aperiam hic amet corporis ipsam. Similique velit ipsa, quasi assumenda consequuntur earum.</p>
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas numquam quis obcaecati, a sed ad aut totam fugiat, cumque quasi!</p>                            
                          </blockquote>
                          <h1>Lorem ipsum dolor sit amet.</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam distinctio voluptatibus sequi sint, in. Soluta alias sunt, voluptates necessitatibus neque, perspiciatis, quos doloribus quae non tempore ut qui facere nulla.</p>
                          <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus dolor totam architecto voluptatum, unde non ipsum officia adipisci, eos error, expedita corporis laudantium esse. Mollitia minus, molestias doloremque! Earum, fuga!</p>
                          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus omnis laudantium magni ut voluptatum, asperiores consequatur ducimus tempore enim possimus aliquid eius aliquam nam quasi itaque officiis debitis ad minima.</p>
                          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum officia iure voluptas deleniti tempora eum ipsa explicabo tenetur laborum doloribus, perferendis quam enim molestiae. Officia numquam harum quam blanditiis sapiente!</p>
                          <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li>Obcaecati quas earum minima perspiciatis corrupti quasi cum.</li>
                            <li>Vero mollitia voluptas libero praesentium ut dolor, labore.</li>
                            <li>Eius, odit, incidunt. Voluptates iusto, a sapiente reiciendis?</li>
                            <li>Quos, tenetur voluptas, dolore sapiente nisi repellat odio.</li>
                          </ul>
                          
                        </div>
                        <!-- start blog post tags -->
                        <div class="mu-blog-tags">
                          <ul class="mu-news-single-tagnav">
                            <li>TAGS :</li>
                            <li><a href="#">Science,</a></li>
                            <li><a href="#">English,</a></li>
                            <li><a href="#">Sports,</a></li>
                            <li><a href="#">Health</a></li>
                          </ul>
                        </div>
                        <!-- End blog post tags -->
                        <!-- start blog social share -->
                        <div class="mu-blog-social">
                          <ul class="mu-news-social-nav">
                            <li>SOCIAL SHARE :</li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                          </ul>
                        </div>
                        <!-- End blog social share -->
                      </article>
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start blog navigation -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-single-navigation">
                      <a class="mu-blog-prev" href="#"><span class="fa fa-angle-left"></span>Prev</a>
                      <a class="mu-blog-next" href="#">Next<span class="fa fa-angle-right"></span></a>
                    </div>
                  </div>
                </div>
                <!-- end blog navigation -->
                <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                      <h3>Related News</h3>
                      <div class="mu-related-item-area">
                        <div id="mu-related-item-slide">
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-1.jpg"></a>
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
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-2.jpg"></a>
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
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                           <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-3.jpg"></a>
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
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-1.jpg"></a>
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
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end start related course item -->
                <!-- start blog comment -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-comments-area">
                      <h3>5 Comments</h3>
                      <div class="comments">
                        <ul class="commentlist">
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">David Muller</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">John Doe</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                          <ul class="children">
                            <li class="author-comments">
                              <div class="media">
                                <div class="media-left">    
                                  <img alt="img" src="assets/img/testimonial-3.png" class="media-object news-img">
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">Admin</h4>
                                 <span class="comments-date"> Posted on 12th June, 2016</span>
                                 <span class="author-tag">Author</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                              </div>
                            </li>
                            <ul class="children">
                              <li>
                                <div class="media">
                                  <div class="media-left">    
                                    <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                                  </div>
                                  <div class="media-body">
                                   <h4 class="author-name">David Muller</h4>
                                   <span class="comments-date"> Posted on 12th June, 2016</span>
                                   <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                   <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </ul>
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">Jhon Doe</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <!-- comments pagination -->
                        <nav>
                          <ul class="pagination comments-pagination">
                            <li>
                              <a aria-label="Previous" href="#">
                                <span class="fa fa-long-arrow-left"></span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a aria-label="Next" href="#">
                                <span class="fa fa-long-arrow-right"></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end blog comment -->
                <!-- start respond form -->
                <div class="row">
                  <div class="col-md-12">
                    <div id="respond">
                      <h3 class="reply-title">Leave a Comment</h3>
                      <form id="commentform">
                        <p class="comment-notes">
                          Your email address will not be published. Required fields are marked <span class="required">*</span>
                        </p>
                        <p class="comment-form-author">
                          <label for="author">Name <span class="required">*</span></label>
                          <input type="text" required="required" size="30" value="" name="author">
                        </p>
                        <p class="comment-form-email">
                          <label for="email">Email <span class="required">*</span></label>
                          <input type="email" required="required" aria-required="true" value="" name="email">
                        </p>
                        <p class="comment-form-url">
                          <label for="url">Website</label>
                          <input type="url" value="" name="url">
                        </p>
                        <p class="comment-form-comment">
                          <label for="comment">Comment</label>
                          <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                        </p>
                        <p class="form-allowed-tags">
                          You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                        </p>
                        <p class="form-submit">
                          <input type="submit" value="Post Comment" class="mu-post-btn" name="submit">
                        </p>        
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end respond form -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Web Design</a></li>
                      <li><a href="">Web Development</a></li>
                      <li><a href="">Math</a></li>
                      <li><a href="">Physics</a></li>
                      <li><a href="">Camestry</a></li>
                      <li><a href="">English</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular News</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Medical Science</a></h4>                      
                          <span class="popular-course-price">$200.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Web Design</a></h4>                      
                          <span class="popular-course-price">$250.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Health & Sports</a></h4>                      
                          <span class="popular-course-price">$90.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Archives</h3>
                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                      <li><a href="#">May <span>(25)</span></a></li>
                      <li><a href="">June <span>(35)</span></a></li>
                      <li><a href="">July <span>(20)</span></a></li>
                      <li><a href="">August <span>(125)</span></a></li>
                      <li><a href="">September <span>(45)</span></a></li>
                      <li><a href="">October <span>(85)</span></a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Tags Cloud</h3>
                    <div class="tag-cloud">
                      <a href="#">Health</a>
                      <a href="#">Science</a>
                      <a href="#">Sports</a>
                      <a href="#">Mathematics</a>
                      <a href="#">Web Design</a>
                      <a href="#">Admission</a>
                      <a href="#">History</a>
                      <a href="#">Environment</a>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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