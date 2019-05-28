<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>{{config('app.name')}}</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
<link href="{{ asset("css/jquery-ui.min.css") }}" rel="stylesheet" type="text/css">
<link href="{{ asset("css/animate.css") }}" rel="stylesheet" type="text/css">
<link href="{{ asset("css/css-plugin-collections.css") }}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset("css/menuzord-skins/menuzord-rounded-boxed.css") }}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset("css/style-main.css") }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset("css/preloader.css") }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset("css/custom-bootstrap-margin-padding.css") }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset("css/responsive.css") }}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css") }}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset("js/revolution-slider/css/settings.css") }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset("js/revolution-slider/css/layers.css") }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset("js/revolution-slider/css/navigation.css") }}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset("js/jquery-2.2.4.min.js") }}"></script>
<script src="{{ asset("js/jquery-ui.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset("js/jquery-plugin-collection.js") }}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset("js/revolution-slider/js/jquery.themepunch.tools.min.js") }}"></script>
<script src="{{ asset("js/revolution-slider/js/jquery.themepunch.revolution.min.js") }}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> 
  
  <!-- Header -->
  <header id="header" class="header">
    
    {{-- </div> --}}
    
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu onepage-nav">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#courses">Courses</a></li>
            </ul>
            
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('images/bg2.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Best Education
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Your Better Future 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="#">Apply Now</a> 
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [650, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->

      </div>
    </section>

    <!-- Section: About  -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="owl-carousel-1col" data-nav="true">
                <div class="item">
                  <img src="http://placehold.it/555x280" alt="">
                </div>
                <div class="item">
                  <img src="http://placehold.it/555x280" alt="">
                </div>
                <div class="item">
                  <img src="http://placehold.it/555x280" alt="">
                </div>
              </div>
              <h3 class="text-theme-colored">Studypress Education Templates</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates. Iure quam laboriosam ullam omnis nulla deleniti, repellendus sequi reiciendis quas voluptatibus consectetur alias aspernatur deserunt veritatis.</p>
              <a class="text-theme-colored font-13" href="page-about1.html">Read More →</a>
            </div>
            <div class="col-md-6">
              <h2 class="line-bottom line-height-1 mt-0 mb-10 mt-sm-30">Our <span class="text-theme-color-2">Features</span></h2>
              <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quia, eaque tempora eligendi facere excepturi facilis earum inventore harum dolores. Maxime, aspernatur. Voluptatum, sit.</p>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="pe-7s-light text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Experience Yourself</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="pe-7s-phone text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Online Learning</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-sm-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="pe-7s-users text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Experience Teachers</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="pe-7s-note2 text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5">Certification Courses</h4>
                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
                   <a href="#" class="text-theme-colored font-13">Read More →</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Divider -->
    <section>
      <div class="container pb-40">
        <div class="pt-20 pb-20 bg-theme-color-2" data-margin-top="-115px">
          <div class="row">
            <div class="col-md-9">
              <h3 class="mt-5 ml-50 ml-sm-0 text-white sm-text-center font-weight-600">Edupress The Best Education & University HTML Template Ever!</h3>
            </div>
            <div class="col-md-3 sm-text-center"> 
              <a class="btn btn-flat btn-theme-colored btn-lg mt-5 ml-30 ml-sm-0" href="#">Purchase Now<i class="fa fa-angle-double-right font-16 ml-10"></i></a>  
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!-- Section: Why Choose Us -->
    <section id="event">
      <div class="container">
        <div class="section-content">
         <div class="row">
            <div class="col-md-5"> 
             <img src="http://placehold.it/455x388" class="img-fullwidth" alt="">
            </div>
            <div class="col-md-7 pb-sm-20">
              <h3 class="title line-bottom mb-20 font-28 mt-0 line-height-1">Why <span class="text-theme-color-2 font-weight-400">Choose Us</span> ?</h3>
              <p class="mb-20">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largests professional property management companies the region.The largest professional property management companies is a recognized leader in landlord tenant representation throughout Texas</p>
              <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="icon-box text-center pl-0 pr-0 mb-0">
                  <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-md">
                    <i class="pe-7s-phone text-white"></i>
                  </a>
                  <h5 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Responsive</strong></h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="icon-box text-center pl-0 pr-0 mb-0">
                  <a href="#" class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-md">
                    <i class="pe-7s-pen text-white"></i>
                  </a>
                  <h5 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>validation</strong></h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="icon-box text-center pl-0 pr-0 mb-0">
                  <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-md">
                    <i class="pe-7s-light text-white"></i>
                  </a>
                  <h5 class="icon-box-title mt-15 mb-0 letter-space-4 text-uppercase"><strong>CERTIFICATION</strong></h5>
                </div>
              </div>
             </div>
           </div>
         </div>
       </div>
    </section>
    <!-- Section: blog -->
    <section id="blog">
      <div class="container pt-40">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase text-theme-colored title line-bottom">Latest <span class="text-theme-color-2 font-weight-400">News</span></h3>
              <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                <div class="item">
                  <article class="post clearfix bg-lighter">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-color-2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15 pt-10 pb-10">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti<a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a></p>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix bg-lighter">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-color-2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15 pt-10 pb-10">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="#">Post title here</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                      
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti<a class="text-theme-color-2 font-12 ml-5" href="#"> View Details</a></p>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix bg-lighter">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="http://placehold.it/570x390" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-color-2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15 pt-10 pb-10">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti<a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a></p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Contact -->
    <section id="contact" class="bg-lighter">
      <div class="container pb-60">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0">Contact <span class="text-theme-color-2 font-weight-400">Us</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <!-- Google Map HTML Codes -->
              <div 
                data-address="121 King Street, Melbourne Victoria 3000 Australia"
                data-popupstring-id="#popupstring1"
                class="map-canvas autoload-map"
                data-mapstyle="style8"
                data-height="420"
                data-latlng="-37.817314,144.955431"
                data-title="sample title"
                data-zoom="12"
                data-marker="images/map-marker.png">
              </div>
              <div class="map-popupstring hidden" id="popupstring1">
                <div class="text-center">
                  <h3>Health Zone Office</h3>
                  <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                </div>
              </div>
              <!-- Google Map Javascript Codes -->
              {{-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> --}}
              {{-- <script src="js/google-map-init.js"></script> --}}
            </div>
            <div class="col-md-7">
              <h4 class="line-bottom mt-0 mb-30 mt-sm-20">SEND US A MESSAGE</h4>            
              <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                </div>
                    <div class="form-group">
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
                    <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                  <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                </div>
              </form>
              <!-- Contact Form Validation-->
              <script type="text/javascript">
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-color-2">
      <div class="container pt-10 pb-20">
        <div class="row">
          <div class="call-to-action">
            <div class="col-md-6">
              <h3 class="mt-5 mb-5 text-white vertical-align-middle"><i class="pe-7s-mail mr-10 font-48 vertical-align-middle"></i> SUBSCRIBE TO OUR NEWSLETTER</h3>
            </div>
            <div class="col-md-6">
              <!-- Mailchimp Subscription Form Starts Here -->
              <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                <div class="input-group">
                  <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-call">
                  <span class="input-group-btn">
                    <button data-height="45px" class="btn bg-theme-colored text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
  <!-- end main-content -->
  </div>

  <!-- Footer -->
  {{-- <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="http://placehold.it/1920x1280">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/logo-white-footer.png">
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list angle-double-right list-border">
              <li><a href="page-about-style1.html">About Us</a></li>
              <li><a href="page-course-list.html">Our Courses</a></li>
              <li><a href="page-pricing-style1.html">Pricing Table</a></li>
              <li><a href="page-gallery-3col.html">Gallery</a></li>
              <li><a href="shop-category.html">Shop</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Twitter Feed</h4>
            <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div> --}}
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2016 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset("js/custom.js") }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.actions.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.carousel.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.migration.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.navigation.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.parallax.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/revolution-slider/js/extensions/revolution.extension.video.min.js") }}"></script>

</body>
</html>