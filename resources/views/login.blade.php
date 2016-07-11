<!DOCTYPE html>
<html lang="en">
<head><title>Public Library | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
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
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-login rlp">
                    <div class="container">
                        <div class="login-wrapper rlp-wrapper">
                            <div class="login-table rlp-table"><a href="index.html"><img src="{{ asset("/images/logo-color-1.png") }}" alt="" class="login"/></a>

                                <div class="login-title rlp-title">login to your library account!</div>
                                <div class="login-form bg-w-form rlp-form">
                                    {!! Form::open(array('route' => 'loginmember', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true, 'method' => 'post', 'id' => 'disableform')) !!}
                    {!! csrf_field() !!}
                                    @if ($error = $errors->first('password'))
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-12"><label for="email" class="control-label form-label">email <span class="highlight">*</span></label><input id="email" type="email" name="email" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                        <div class="col-md-12"><label for="password" class="control-label form-label">password <span class="highlight">*</span></label><input id="password" name="password" type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                    </div>
                                </div>
                                <div class="login-submit">
                                    <button type="submit" class="btn btn-login btn-green"><span>sign in</span></button>
                                </div>
                                {!! Form::close() !!}
                                <div style="text-align:right"><a href="home">Back</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer></footer>
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
<!-- LOADING--><!-- JAVASCRIPT LIBS-->
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
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE--></body>
</html>