<!DOCTYPE html>
<html lang="en">
<head><title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/font-awesome.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/Glyphter.css") }}">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/animate.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/bootstrap.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/owl.carousel.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/jquery.selectbox.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/jquery.fancybox.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/jquery.fancybox-buttons.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("/style/mediaelementplayer.min.css") }}">
    <!-- STYLE CSS    -->
    <link type="text/css" rel='stylesheet' href="{{ asset("/style/color-4.css") }}">
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="{{ asset("/scripts/jquery-2.1.4.min.js") }}"></script>
    <script src="{{ asset("/scripts/js.cookie.js") }}"></script>
  
</head>
<body><!-- HEADER-->
<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span>smanik83@gmail.com</span></a></div>
                <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+94 045-2225900</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></div>
                <div class="group-sign-in">
                    @if(Auth::check())
                
                    <a href="javascript:void(0)" class="login">Hi, {{Auth::user()->username}}</a>                                                                                     
                    <a href="/logout" class="register">Logout</a>                         
                   
                     @else
                    <a href="javascript:void(0)" class="login">Hi, Guest</a>                                         
                                                        
                    <a href="login" class="login">login</a>
                    
                    <a href="register" class="register">register</a>
                    @endif
                    </div>
            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-heade">
                    <div class="logo pull-left"><a href="home" class="header-logo"><img src="{{ asset("/images/logo-color-1.png") }}" alt=""/></a></div>
                    <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <nav class="navigation collapse navbar-collapse pull-right">
                    <ul class="nav-links nav navbar-nav">
                        @yield('home','<li>')<a href="home" href="javascript:void(0)" class="main-menu">Home<!--<span class="fa fa-angle-down icons-dropdown"></span>--></a>
                          <!--  <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="index.html" class="link-page">Home page 01</a></li>
                                <li><a href="homepage-02.html" class="link-page">Home page 02</a></li>
                                <li><a href="homepage-03.html" class="link-page">Home page 03</a></li>
                            </ul>-->
                        </li>
                        @yield('resources','<li>')<a href="resources" href="javascript:void(0)" class="main-menu">Resources<!--<span class="fa fa-angle-down icons-dropdown"></span>--></a>
                        <!--    <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="courses.html" class="link-page">Books</a></li>
                                <li><a href="courses-detail.html" class="link-page">Magazines</a></li>
                                <li><a href="events.html" class="link-page">NewsPapers</a></li>
                                <li><a href="event-detail.html" class="link-page">Encyclopedia</a></li>
                            </ul> -->
                        </li>
                        @yield('services','<li>')<a href="services" href="javascript:void(0)" class="main-menu">Services<!--<span class="fa fa-angle-down icons-dropdown"></span>--></a>
                         <!--   <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="gallery-3column.html" class="link-page">Library</a></li>
                                <li><a href="gallery-4column.html" class="link-page">Auditorium</a></li>
                            </ul> -->
                        </li>
                     <!--   <li class="dropdown"><a href="javascript:void(0)" class="main-menu">pages<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="categories.html" class="link-page">categories</a></li>
                                <li><a href="profile-teacher.html" class="link-page">profile teacher</a></li>
                                <li><a href="about-us.html" class="link-page">about us</a></li>
                                <li><a href="login.html" class="link-page">login</a></li>
                                <li><a href="register.html" class="link-page">register</a></li>
                                <li><a href="404.html" class="link-page">404 page</a></li>
                                <li><a href="faq.html" class="link-page">FAQ page</a></li>
                            </ul>
                        </li> -->
                        @yield('aboutus','<li>')<a href="aboutus" href="javascript:void(0)" class="main-menu">About Us<!--<span class="fa fa-angle-down icons-dropdown"></span>--></a>
                          <!--  <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="news.html" class="link-page">news list</a></li>
                                <li><a href="news-grid.html" class="link-page">news grid</a></li>
                                <li><a href="news-grid-nonsidebar.html" class="link-page">news grid nonsidebar</a></li>
                                <li><a href="news-masonry.html" class="link-page">news masonry</a></li>
                                <li><a href="news-detail.html" class="link-page">news detail</a></li>
                            </ul> -->
                        </li>
                        @yield('contactus','<li>')<a href="contactus" class="main-menu">Contact</a></li>
                        @if(Auth::check())
                        <li class="button-search"><p class="main-menu"><i class=" fa fa-comment"></i></p></li>
                        <div class="nav-search hide">
                            {!! Form::open(array('route' => 'postcomment', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true, 'method' => 'post', 'id' => 'disableform')) !!}
                    {!! csrf_field() !!}
                                <textarea type="text" id="comment" name="comment" placeholder="Post a comment" ></textarea>
                                <input type="submit" style="background-color:#2aacff;color:#242c42; border-radius: 5px;" value="Done"/>
                              {!! Form::close() !!}
                        </div>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    @yield('content')
    
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-wrapper">
                <div class="footer-top-left"><p class="footer-top-focus">BECOME A REGULAR MEMBER</p>

                    <p class="footer-top-text">Join thousand of members and gain knowledge hassle free!</p></div>
                <div class="footer-top-right">
                    <button onclick="window.location.href='contact.html'" class="btn btn-blue btn-bold"><span>GET STARTED NOW</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="container">
            <div class="footer-main-wrapper">
                <div class="row">
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="edugate-widget widget">
                                <div class="title-widget">Provincial Library</div>
                                <div class="content-widget"><p>Libraries’ special collections grow out of specific community needs.</p>

                                    <div class="info-list">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><a href="#">smanik83@gmail.com</a></li>
                                            <li><i class="fa fa-phone"></i><a href="#">P: +94 045-2225900</a></li>
                                            <li><i class="fa fa-map-marker"></i><a href="#"><p>AB35, Ratnapura</p>

                                                <p></p></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="useful-link-widget widget">
                                <div class="title-widget">USEFUL LINKS</div>
                                <div class="content-widget">
                                    <div class="useful-link-list">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a href="resources">Books</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="staff">Staff</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="aboutus">About</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="services">services</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="javascript:void(0)">Gallery</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="contactus">Site Map</a></li>
                                                </ul>
                                            </div>
                                          <!--  <div class="col-md-6 col-sm-6 col-xs-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Company</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Latest Courses</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Partners</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Blog Post</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Help Topic</a></li>
                                                    <li><i class="fa fa-angle-right"></i><a href="#">Policies</a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="gallery-widget widget">
                                <div class="title-widget">GALLERY</div>
                                <div class="content-widget">
                                    <div class="gallery-list"><a href="javascript:void(0)" class="thumb">
                                        <img src="{{ asset("/images/auditorium/pic_5.jpg") }}" alt="" class="img-responsive"/></a><a href="javascript:void(0)" class="thumb">
                                        <img src="{{ asset("/images/library/pic_6.jpg") }}" alt="" class="img-responsive"/></a><a href="javascript:void(0)" class="thumb">
                                        <img src="{{ asset("/images/building/pic_6.jpg") }}" alt="" class="img-responsive"/></a><a href="javascript:void(0)" class="thumb">
                                        <img src="{{ asset("/images/library/pic_4.jpg") }}" alt="" class="img-responsive"/></a><a href="javascript:void(0)" class="thumb">
                                        <img src="{{ asset("/images/auditorium/pic_4.jpg") }}" alt="" class="img-responsive"/></a><a href="javascript:void(0)" class="thumb">
                                        
                                        <img src="{{ asset("/images/building/pic_2.jpg") }}" alt="" class="img-responsive"/></a><a href="javascript:void(0)" class="thumb">
                                        <img src="{{ asset("/images/building/pic_5.jpg") }}" alt="" class="img-responsive"/></a><a href="javascript:void(0)" class="thumb">
                                        <img src="{{ asset("/images/auditorium/pic_3.jpg") }}" alt="" class="img-responsive"/></a>
                                       </div>
                                    <div class="clearfix"></div>
                                   <!-- <a href="#" class="view-more">View more&nbsp;<i class="fa fa-angle-double-right mls"></i></a>--></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 sd380">
                            <div class="mailing-widget widget">
                                <div class="title-widget">MAILING</div>
                                <div class="content-wiget"><p>Sign up for our mailing list to get latest updates and offers.</p>

                                    <form action="index.html">
                                        <div class="input-group"><input type="text" placeholder="Email address" class="form-control form-email-widget"/><span class="input-group-btn"><input type="submit" value="✓" class="btn btn-email"/></span></div>
                                    </form>
                                    <p>We respect your privacy</p>

                                    <div class="socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hyperlink">
                <div class="pull-left hyper-left">
                    <ul class="list-inline">
                        <li><a href="home">HOME</a></li>
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="aboutus">ABOUT</a></li>
                        <li><a href="contactus">CONTACT</a></li>
                    </ul>
                </div>
                <div class="pull-right hyper-right"><a href="http://reactive-solutions.xyz/" target="_blank">@ Reactive-Solutions</a></div>
            </div>
        </div>
    </div>
</footer>
<!-- THEME SETTING-->
<div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>
    <a href="javascript:;" class="btn-theme-setting"><i class="fa fa-tint"></i></a>

    <div class="content-theme-setting"><h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
    </div>
</div>
<!-- LOADING-->
<div class="body-2 loading">
    <div class="dots-loader"></div>
</div>
<!-- JAVASCRIPT LIBS-->

    
  
<script src="{{ asset("/scripts/bootstrap.min.js") }}"></script>
<script src="{{ asset("/scripts/jquery-smoothscroll.js") }}"></script>
<script src="{{ asset("/scripts/owl.carousel.min.js") }}"></script>
<script src="{{ asset("/scripts/jquery.appear.js") }}"></script>
<script src="{{ asset("/scripts/jquery.countTo.js") }}"></script>
<script src="{{ asset("/scripts/wow.min.js") }}"></script>
<script src="{{ asset("/scripts/jquery.selectbox-0.2.min.js") }}"></script>
<script src="{{ asset("/scripts/jquery.fancybox.js") }}"></script>
<script src="{{ asset("/scripts/jquery.fancybox-buttons.js") }}"></script>
<!-- MAIN JS-->
<script src="{{ asset("/scripts/main.js") }}"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="{{ asset("/scripts/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("/scripts/fit-columns.js") }}"></script>
<script src="{{ asset("/scripts/homepage.js") }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
<script src="{{ asset("/scripts/contact.js") }}"></script>
</body>
</html>