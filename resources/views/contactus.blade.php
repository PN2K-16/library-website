@extends('master')

@section('title')

Public Library Contact Us

@stop

@section('contactus')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
    <div class="main-content"><!-- CONTENT-->
        <div class="content">
             <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Contact Us</h2>
                            <ol class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li class="active"><a href="#">Contact Us</a></li>
                            </ol>
                        </div>
                    </div>
             </div>
            
            <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="row contact-method">
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-map-marker"></i>

                                        <p class="sub">COME TO</p>

                                        <div class="detail"><p>AB35, Ratnapura</p>

                                            <p> Sri Lanka</p></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-phone"></i>

                                        <p class="sub">CALL TO</p>

                                        <div class="detail"><p>Local: +94 045-2225900</p>

                                            <p>Mobile: None</p></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-envelope"></i>

                                        <p class="sub">CONNECT TO</p>

                                        <div class="detail"><p>None</p>

                                            <p>None</p></div>
                                    </div>
                                </div>
                            </div>
                            <form class="bg-w-form contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">NAME <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">EMAIL <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="")--></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-question form-group"><label class="control-label form-label">HOW CAN WE HELP? <span class="highlight">*</span></label><textarea class="form-control form-input"></textarea></div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green"><span>SUBMIT CONTACT</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div id="map" class="section contact-map"></div>
        </div>
    </div>
</div>

@endsection