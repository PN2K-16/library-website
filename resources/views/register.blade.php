<!DOCTYPE html>
<html lang="en">
<head><title>Public Library | Register</title>
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
<body onload="check_error()"><!-- HEADER-->
<header><!-- not include--></header>
<!-- WRAPPER-->
    
@if (Session::has('message'))
    <div class="alert alert-success" style="text-align:center" hidden="true"><p id="errorr">error</p><input type="text"  id="error_id" value="{{ Session::get('message') }}"></div>
@endif
    
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                
                <div class="page-register rlp" hidden="true" id="activate_member">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table"><a href="home"><img src="{{ asset("/images/logo-color-1.png") }}" alt="" class="login"/></a>
                                <div class="register-title rlp-title">create your account and join with us!</div>
                                {!! Form::open(array('route' => 'onlineactivate', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true, 'method' => 'post', 'id' => 'disableform')) !!}
                    {!! csrf_field() !!}
                                <div class="register-form bg-w-form rlp-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="username" class="control-label form-label">USERNAME</label>
                                            <input id="username" type="text" name="username" placeholder="" class="form-control form-input" value="{{ Input::old('username') }}" readonly/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="memid" class="control-label form-label">Membership ID</label>
                                            <input id="memid" type="text" placeholder="" name="memid" class="form-control form-input" value="{{ Input::old('memid') }}" readonly />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Password" class="control-label form-label">password <span class="highlight">*</span></label>
                                            <div class="@if ($errors->has('Password')) has-error @endif" >
                                            <input id="Password" name="Password" type="password" placeholder="Passowrd" class="form-control form-input"/>
                                            @if ($errors->has('Password')) <p class="help-block">{{ $errors->first('Password') }}</p> @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="re-enter_password" class="control-label form-label">confirm password <span class="highlight">*</span></label>
                                            <div class="@if ($errors->has('re-enter_password')) has-error @endif" >
                                            <input id="re-enter_password" name="re-enter_password" type="password" placeholder="Re-enter Password" class="form-control form-input"/>
                                             @if ($errors->has('re-enter_password')) <p class="help-block">{{ $errors->first('re-enter_password') }}</p> @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="register-submit">
                                    <button type="submit" class="btn btn-register btn-green"><span>create account</span></button>
                                </div>
                                 {!! Form::close() !!}
                                 <div style="text-align:right"><a href="register">Back</a></div>
                            </div>
                        </div>
                    </div>
                </div>
         
                
                <div class="page-register rlo" id="register_form">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table">
                                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="" data-toggle="modal" data-target="#getid">ARE YOU A MEMBER ALREADY?</a></div><br>
                                <a href="home"><img src="{{ asset("/images/logo-color-1.png") }}" alt="" class="login"/></a>

                                <div class="register-title rlp-title">create your account and join with us!</div>
                                {!! Form::open(array('route' => 'onlineregister', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true, 'method' => 'post', 'id' => 'disableform')) !!}
                    {!! csrf_field() !!}
                                <div class="register-form bg-w-form rlp-form">
                                    <div class="row">
                                        <legend>MAIN INFO</legend>
                                        
                                        <div class="col-md-6">
                                            <label for="First_Name" class="control-label form-label">FIRST NAME <span class="highlight">*</span></label>
                                            <div class="@if ($errors->has('First_Name')) has-error @endif" >
                                                <input id="First_Name" type="text" name="First_Name" placeholder="First Name" class="form-control form-input" value="{{ Input::old('First_Name') }}"/>
                                                 @if ($errors->has('First_Name')) <p class="help-block">{{ $errors->first('First_Name') }}</p> @endif
                                            </div>
                                        </div>
                                            
                                         <div class="col-md-6">
                                             <label for="Last_Name" class="control-label form-label">LAST NAME <span class="highlight">*</span></label>
                                             <div class="@if ($errors->has('Last_Name')) has-error @endif" >
                                             <input id="Last_Name" type="text" name="Last_Name" placeholder="Last Name" class="form-control form-input" value="{{ Input::old('Last_Name') }}"/>
                                             @if ($errors->has('Last_Name')) <p class="help-block">{{ $errors->first('Last_Name') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="type" class="control-label form-label">TYPE<span class="highlight">*</span></label>
                                            <select id="type" name="type" class="form-control form-input">
                                            <option value="Provincial Library">Provincial Library</option>
                                            <option value="Book Reader Club Member">Book Reader Club Member</option>
                                            <option value="Regular User">Regular User</option>
                                            <option value="University">University</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="nic" class="control-label form-label">NIC<span class="highlight">*</span></label>
                                            <div class="@if ($errors->has('nic')) has-error @endif" >
                                            <input id="nic" type="text" name="nic" placeholder="NIC" class="form-control form-input" value="{{ Input::old('nic') }}"/>
                                            @if ($errors->has('nic')) <p class="help-block">{{ $errors->first('nic') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="password" class="control-label form-label">PASSWORD<span class="highlight">*</span></label>
                                            <div class="@if ($errors->has('password')) has-error @endif" >
                                            <input id="password" name="password" type="password" placeholder="Password" class="form-control form-input"/>
                                             @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="repassword" class="control-label form-label">CONFIRM PASSWORD<span class="highlight">*</span></label>
                                             <div class="@if ($errors->has('repassword')) has-error @endif" >
                                            <input id="repassword" name="repassword" type="password" placeholder="Re-enter Password" class="form-control form-input"/>
                                             @if ($errors->has('repassword')) <p class="help-block">{{ $errors->first('repassword') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <legend>CONTACT INFO</legend>
                                        <div class="col-md-6">
                                            <label for="Address_Line_1" class="control-label form-label">ADDRESS LINE 1 <span class="highlight">*</span></label>
                                            <div class="@if ($errors->has('Address_Line_1')) has-error @endif" >
                                            <input id="Address_Line_1" name="Address_Line_1" type="text" placeholder="Number and Street" class="form-control form-input" value="{{ Input::old('Address_Line_1') }}"/>
                                            @if ($errors->has('Address_Line_1')) <p class="help-block">{{ $errors->first('Address_Line_1') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="Land_Number" class="control-label form-label">LAND NUMBER </label>
                                             <div class="@if ($errors->has('Land_Number')) has-error @endif" >
                                            <input id="Land_Number" type="text" name="Land_Number" placeholder="Land Number" class="form-control form-input" value="{{ Input::old('Land_Number') }}"/>
                                            @if ($errors->has('Land_Number')) <p class="help-block">{{ $errors->first('Land_Number') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="Address_Line_2" class="control-label form-label">ADDRESS LINE 2 <span class="highlight">*</span></label>
                                             <div class="@if ($errors->has('Address_Line_2')) has-error @endif" >
                                            <input id="Address_Line_2" name="Address_Line_2" type="text" placeholder="Town and City" class="form-control form-input" value="{{ Input::old('Address_Line_2') }}"/>
                                             @if ($errors->has('Address_Line_2')) <p class="help-block">{{ $errors->first('Address_Line_2') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="Mobile_Number" class="control-label form-label">MOBILE NUMBER <span class="highlight">*</span></label>
                                            <div class="@if ($errors->has('Mobile_Number')) has-error @endif" >
                                            <input id="Mobile_Number" type="text" name="Mobile_Number" placeholder="Mobile Number" class="form-control form-input" value="{{ Input::old('Mobile_Number') }}"/>
                                             @if ($errors->has('Mobile_Number')) <p class="help-block">{{ $errors->first('Mobile_Number') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="Address_Line_3" class="control-label form-label">ADDRESS LINE 3 <span class="highlight">*</span></label>
                                             <div class="@if ($errors->has('Address_Line_3')) has-error @endif" >
                                            <input id="Address_Line_3" type="text" name="Address_Line_3" placeholder="District" class="form-control form-input" value="{{ Input::old('Address_Line_3') }}"/>
                                             @if ($errors->has('Address_Line_3')) <p class="help-block">{{ $errors->first('Address_Line_3') }}</p> @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="email" class="control-label form-label">E-MAIL <span class="highlight">*</span></label>
                                             <div class="@if ($errors->has('email')) has-error @endif" >
                                            <input id="email" type="email" name="email" placeholder="E-mail" class="form-control form-input" value="{{ Input::old('email') }}"/>
                                             @if ($errors->has('email')) <h5 class="help-block">{{ $errors->first('email') }}</h5> @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="register-submit">
                                    <button type="submit" class="btn btn-register btn-green"><span>create account</span></button>
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
    
<div class="modal fade" id="getid">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">ALREADY A MEMBER?</h4>
            </div>
            <div class="modal-body" id="bookDelSuccess">

                 {!! Form::open(array('route' => 'validatemembership', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true, 'method' => 'post', 'id' => 'disableform')) !!}
            {!! csrf_field() !!}
                <div class=" form form-horizontal">
                    <fieldset>
                      <div class="form-group">
                        <label for="membership_id" class="col-lg-5 control-label">Enter your membership ID</label>
                         <div class="col-lg-6">
                            <input class="form-control" id="membership_id" name="membership_id" placeholder="Membership ID"  >
                         </div>
                      </div>
                                    
                      <div class="alert alert-danger" id="error_one" hidden="true">
                            <p id="error_1"></p>
                      </div>
       
                   
                       <input type="text" id="lendbookid"  hidden="true">
                   
                    </fieldset>
                </div>

            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#A4A4A4">Cancel</button>
                 <button type="button" class="btn btn-primary" onclick="check()" style="background-color:#2E64FE">Done</button>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
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
<script>

window.onload = function(){
 
    var err_id = document.getElementById("error_id").value;
    
    if(err_id !== "" || err_id !== "null")
    {
        $('#register_form').hide();
        $('#activate_member').show();
    }
    
}


function check(){
    
    var id = document.getElementById("membership_id").value;

    if(id == "" || id == "null")
    {
        $('#error_1').text("");
        document.getElementById("error_one").removeAttribute("hidden",false);
        $('#error_1').text("Membership ID is required");
    }
    else
    {
     var data = "id="+id;

  $.ajax({
    type: "get",
    url: "/validatemembership",
    data: data,
        
    success : function(data){
     
         if(data == "Invalid Membership ID")
         {
             $('#error_1').empty();
             document.getElementById("error_one").removeAttribute("hidden",false);
             $('#error_1').text("Invalid Membership ID");
         }
         else if(data == "You have already activated your web account. If you have any trouble please contact one of our staff members")
         {
             $('#error_1').empty();
             document.getElementById("error_one").removeAttribute("hidden",false);
             $('#error_1').text("You have already activated your web account. If you have any trouble please contact one of our staff members");
         }
        else
         {
            
            $('#error_1').empty();
            $('#error_one').hide();
            $('#getid').modal('hide');
            $('#register_form').hide();
            $('#activate_member').show();
              for(var i = 0; i < data.length; i++)
              {
                  $('#username').val(data[i].name+data[i].Last_Name);
                  $('#memid').val(data[i].id);
              }
           }
        },
      });
     }    
 }
    
</script>
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
