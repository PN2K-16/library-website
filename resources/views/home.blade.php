@extends('master')

@section('title')

Public Library Home

@stop

@section('home')

<li class="dropdown active">
    
@stop
    
@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content"><!-- SLIDER BANNER-->
                <div class="section slider-banner set-height-top">
                    
                    <div class="slider-item">
                        <div class="slider-2">
                            <div class="slider-caption">
                                <div class="container"><h5 class="text-info-2">Think before you speak. Read before you think.</h5>

                                    <h1 class="text-info-1">You can learn anything</h1>

                                    <p class="text-info-3">For free. For everyone</p>
                                  <!--  <button class="btn btn-green"><span>Start learning now !</span></button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-3">
                            <div class="slider-caption">
                                <div class="container"><h5 class="text-info-2">The more that you read, the more things you will know.</h5>

                                    <h1 class="text-info-1">You can learn anything</h1>

                                    <p class="text-info-3">For free. For everyone</p>
                                <!--    <button class="btn btn-green"><span>Start learning now !</span></button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-1">
                            <div class="slider-caption">
                                <div class="container"><h5 class="text-info-2">A library is not a luxury but one of the necessities of life.</h5>

                                    <h1 class="text-info-1">You can learn anything</h1>

                                    <p class="text-info-3">For free. For everyone</p>
                                    <!--<button class="btn btn-green"><span>Start learning now !</span></button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CHOOSE COURSES-->
                <div class="section section-padding choose-course">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">CHOOSE WHAT YOU WANT</h4>

                            <h2 class="center-title">GET THE WORLD CLASS SERVICES</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-a-1-01-01"></i></div>
                        </div>
                        <div class="choose-course-wrapper row">
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-1">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img fa fa-plus-circle"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="new_arrivals">Wanna know what is new??</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="new_arrivals">New Arrivals</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-2">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img fa fa-user"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="staff">Get an idea about our staff</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="staff">Staff</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-3">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img fa fa-question-circle"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="faq">Most people has the same kind of question</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="faq">FAQ</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-4">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img icon-photocamera_1"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="#" class="scroll">Walk around the library</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="#" class="scroll">Gallery</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-5">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img fa fa-star"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="services">We do our best to serve the members</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="services">Services</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="item-course item-6">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="icons-img fa fa-book"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="resources">Here you can see all the books we have</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="resources">Resources</a><i class="fa fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PROGRESS BARS-->
                <div class="section progress-bars section-padding">
                    <div class="container">
                        <div class="progress-bars-content">
                            <div class="progress-bar-wrapper"><h2 class="title-2">Some important facts about us</h2>

                                <div class="row">
                                    <div class="content">
                                        <div class="col-sm-4">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="50" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Books</p></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="56" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Magazines</p></div>
                                        </div> 
                                        <div class="col-sm-4">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="165" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">members</p></div>
                                        </div>
                                     <!--   <div class="col-sm-3">
                                            <div class="progress-bar-number">
                                                <div data-from="0" data-to="15" data-speed="1000" class="num">0</div>
                                                <p class="name-inner">Countries</p></div>
                                        </div> -->
                                    </div>
                                </div>
                             <!--   <div class="group-button">
                                    <button onclick="window.location.href='categories.html'" class="btn btn-transition-3"><span>Purchase theme</span></button>
                                    <button onclick="window.location.href='about-us.html'" class="btn btn-green-3"><span>start Learn now</span></button>
                                </div> -->
                                <div class="group-btn-slider">
                                    <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOP COURSES-->
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">CHOOSE YOUR BOOK</h4>

                            <h2 class="center-title">The top popular Books for you</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="top-courses-wrapper">
                            <div class="top-courses-slider">
                                   @foreach($popular_first as $popular_book_first)
                                <div class="top-courses-item">
                                    <div class="edugate-layout-2">
                                        <div class="edugate-layout-2-wrapper">
                                            <div class="edugate-content"><a href="courses-detail.html" class="title">{{$popular_book_first->name}}</a>

                                                <div class="info">
                                                    <div class="author item"><a href="#">Author</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_first->date_created}}</a></div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item"><a href="#">Category</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_first->category}}</a></div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item"><a href="#">Arrived Date</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_first->date_created}}</a></div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item"><a href="#">Readers</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_first->lend_count}}</a></div>
                                                </div>
                                              
                                                <a href="single_book?id={{$popular_book_first->id}}" class="btn btn-green"><span>View Details</span></a>
                                            </div>
                                            <div class="edugate-image"><img src="{{ asset("/images/PlaceholderBook.png") }}" alt="" class="img-responsive"/></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                            <div class="top-courses-slider">
                                @foreach($popular_second as $popular_book_second)
                                <div class="top-courses-item">
                                    <div class="edugate-layout-2">
                                        <div class="edugate-layout-2-wrapper">
                                            <div class="edugate-content"><a href="courses-detail.html" class="title">{{$popular_book_second->name}}</a>

                                                <div class="info">
                                                    <div class="author item"><a href="#">Author</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_second->date_created}}</a></div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item"><a href="#">Category</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_second->category}}</a></div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item"><a href="#">Arrived Date</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_second->date_created}}</a></div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item"><a href="#">Readers</a></div>
                                                    <div class="date-time item"><a href="#">{{$popular_book_second->lend_count}}</a></div>
                                                </div>
                                              
                                                <a href="single_book?id={{$popular_book_second->id}}" class="btn btn-green"><span>View Details</span></a>
                                            </div>
                                            <div class="edugate-image"><img src="{{ asset("/images/PlaceholderBook.png") }}" alt="" class="img-responsive"/></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="group-btn-top-courses-slider">
                                <div class="btn-prev">&lsaquo;</div>
                                <div class="btn-next">&rsaquo;</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- WHY CHOOSE US-->
                <div class="section why-choose-us">
                    <div class="why-choose-us-wrapper-top">
                        <div class="container">
                            <div class="why-choose-us-wrapper"><h2 class="title-2">Why Choose Our Library?</h2>

                                <p>We serve the best. By far the most popular response at 77%, the clear majority of our surveyed students head to the library to focus on their studies by themselves. To us, this response shows that, no matter what kinds of resources are offered by the library, this learning space is (and will probably always be) regarded as a great place to get serious about knowledge.</p>
                              <!--  <button onclick="window.location.href='categories.html'" class="btn btn-green-2"><span>start Learn now</span></button> -->
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="1.2s" class="background-girl-1 wow fadeInUp"><img src="{{ asset("/images/girl-1.png") }}" alt="" class="img-responsive"/></div>
                        </div>
                    </div>
                    <div class="why-choose-us-wrapper-bottom background-opacity">
                        <div class="container">
                            <div data-wow-delay="0.4s" data-wow-duration="1s" class="row why-choose-us-wrapper wow zoomIn">
                                <div class="customs-row">
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa fa-book"></i>

                                        <p> Over 12,000 Books available</p></div>
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-building"></i>

                                        <p> Auditorium for occasions</p></div>
                                </div>
                                <div class="customs-row">
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-key"></i>

                                        <p> Easy to study everytime, everywhere</p></div>
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-university"></i>

                                        <p> Co-Operating with many universities</p></div>
                                </div>
                                <div class="customs-row">
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-life-ring"></i>

                                        <p> Free updates & support</p></div>
                                    <div class="col-sm-4 col-xs-6 section-icon"><i class="fa fa-cogs"></i>

                                        <p> Best service for the members</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PICTURE AND GALLERY-->
                <div class="section section-padding picture-gallery" id="gallery">
                    <div class="group-title-index"><h4 class="top-title">see and feel it</h4>

                        <h2 class="center-title">Pictures and gallery</h2>

                        <div class="bottom-title"><i class="bottom-icon icon-a-1-01"></i></div>
                    </div>
                    <div class="picture-gallery-wrapper"><!-- Nav tabs-->
                        <ul role="tablist" class="nav nav-tabs edugate-tabs">
                            <li role="presentation" class="active"><a href="#campus" data-toggle="tab" class="text">Library</a></li>
                            <li role="presentation"><a href="#education" data-toggle="tab" class="text">Auditorium</a></li>
                            <li role="presentation"><a href="#building" data-toggle="tab" class="text">Building</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content gallery-content">
                            <div id="campus" role="tabpanel" class="tab-pane fade in active">
                                <div class="grid">
                                    <div class="grid-item grid-item-height3"><a href="{{ asset("/images/library/pic_1.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/library/pic_1.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="{{ asset("/images/library/pic_2.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/library/pic_2.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height3"><a href="{{ asset("/images/library/pic_3.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/library/pic_3.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="{{ asset("/images/library/pic_4.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/library/pic_4.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="{{ asset("/images/library/pic_5.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/library/pic_5.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="{{ asset("/images/library/pic_6.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/library/pic_6.jpg") }}" alt="" class="img-responsive"/></a></div>
                                </div>
                            </div>
                            <div id="education" role="tabpanel" class="tab-pane fade">
                                <div class="grid">
                                    <div class="grid-item grid-item-height3"><a href="{{ asset("/images/auditorium/pic_1.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/auditorium/pic_1.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="{{ asset("/images/auditorium/pic_2.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/auditorium/pic_2.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height3"><a href="{{ asset("/images/auditorium/pic_3.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/auditorium/pic_3.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="{{ asset("/images/auditorium/pic_4.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/auditorium/pic_4.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="{{ asset("/images/auditorium/pic_5.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/auditorium/pic_5.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="{{ asset("/images/auditorium/pic_6.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/auditorium/pic_6.jpg") }}" alt="" class="img-responsive"/></a></div>
                                </div>
                            </div>
                            <div id="building" role="tabpanel" class="tab-pane fade">
                                <div class="grid">
                                    <div class="grid-item grid-item-height3"><a href="{{ asset("/images/building/pic_1.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/building/pic_1.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="{{ asset("/images/building/pic_2.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/building/pic_2.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height3"><a href="{{ asset("/images/building/pic_3.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/building/pic_3.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="{{ asset("/images/building/pic_4.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/building/pic_4.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="{{ asset("/images/building/pic_5.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/building/pic_5.jpg") }}" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="{{ asset("/images/building/pic_6.jpg") }}" class="content fancybox-button"><img src="{{ asset("/images/building/pic_6.jpg") }}" alt="" class="img-responsive"/></a></div>
                                </div>
                            </div>
                            <div id="teachers" role="tabpanel" class="tab-pane fade">
                                <div class="grid">
                                    <div class="grid-item grid-item-height3"><a href="assets/images/lib-pictures/pictures-3.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-3.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="assets/images/lib-pictures/pictures-2.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-2.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height3"><a href="assets/images/lib-pictures/pictures-1.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-1.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="assets/images/lib-pictures/pictures-5.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-5.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="assets/images/lib-pictures/pictures-6.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-6.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="assets/images/lib-pictures/pictures-4.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-4.jpg" alt="" class="img-responsive"/></a></div>
                                </div>
                            </div>
                            <div id="students" role="tabpanel" class="tab-pane fade">
                                <div class="grid">
                                    <div class="grid-item grid-item-height3"><a href="assets/images/lib-pictures/pictures-1.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-1.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="assets/images/lib-pictures/pictures-2.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-2.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height3"><a href="assets/images/lib-pictures/pictures-3.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-3.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="assets/images/lib-pictures/pictures-5.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-5.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height2"><a href="assets/images/lib-pictures/pictures-6.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-6.jpg" alt="" class="img-responsive"/></a></div>
                                    <div class="grid-item grid-item-height1"><a href="assets/images/lib-pictures/pictures-4.jpg" class="content fancybox-button"><img src="assets/images/lib-pictures/pictures-4.jpg" alt="" class="img-responsive"/></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRICING-->
             <!--   <div class="section section-padding pricing">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">chooses your pricing</h4>

                            <h2 class="center-title">the best pricing we offered</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-a-1-01-01"></i></div>
                        </div>
                        <div class="row">
                            <div class="pricing-wrapper">
                                <div class="col-sm-4">
                                    <div class="pricing-widget">
                                        <div class="pricing-header">
                                            <div class="price-cost">
                                                <div class="inner"><p data-from="0" data-to="0" data-speed="1000" class="inner-number">0</p></div>
                                            </div>
                                        </div>
                                        <div class="pricing-content"><h3 class="pricing-title">trial</h3>

                                            <p class="pricing-subtitle">30 days free trial</p>
                                            <ul class="pricing-list">
                                                <li><p><strong>One day</strong> trial</p></li>
                                                <li><p><strong>Limited</strong> courses</p></li>
                                                <li><p><strong>Free</strong> 3 lessons</p></li>
                                                <li><p><strong>No</strong> supporter</p></li>
                                                <li><p><strong>No</strong> ebook</p></li>
                                                <li><p><strong>No</strong> tutorial</p></li>
                                                <li><p><strong>Limited</strong> registered user</p></li>
                                            </ul>
                                            <div class="pricing-button"><a href="#">choose plan</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pricing-widget main active">
                                        <div class="pricing-header">
                                            <div class="price-cost">
                                                <div class="inner"><p data-from="0" data-to="35" data-speed="1000" class="inner-number">0</p></div>
                                            </div>
                                        </div>
                                        <div class="pricing-content"><h3 class="pricing-title">Standard</h3>

                                            <p class="pricing-subtitle">per month when paid annually</p>
                                            <ul class="pricing-list">
                                                <li><p><strong>One year</strong> standard access</p></li>
                                                <li><p><strong>Limited</strong> courses</p></li>
                                                <li><p><strong>300+</strong> lessons</p></li>
                                                <li><p><strong>Random</strong> supporter</p></li>
                                                <li><p><strong>View only</strong> ebook</p></li>
                                                <li><p><strong>Standard</strong> tutorials</p></li>
                                                <li><p><strong>Unlimited</strong> registered user</p></li>
                                            </ul>
                                            <div class="pricing-button"><a href="#">choose plan</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pricing-widget">
                                        <div class="pricing-header">
                                            <div class="price-cost">
                                                <div class="inner"><p data-from="0" data-to="89" data-speed="1000" class="inner-number">0</p></div>
                                            </div>
                                        </div>
                                        <div class="pricing-content"><h3 class="pricing-title">Premiere</h3>

                                            <p class="pricing-subtitle">per month when paid annually</p>
                                            <ul class="pricing-list">
                                                <li><p><strong>Life time</strong> access</p></li>
                                                <li><p><strong>Unlimited</strong> All courses</p></li>
                                                <li><p><strong>3000+</strong> lessons & growing</p></li>
                                                <li><p><strong>Free</strong> supporter</p></li>
                                                <li><p><strong>Free</strong> Ebook Downloads</p></li>
                                                <li><p><strong>Premium</strong> tutorials</p></li>
                                                <li><p><strong>Unlimited</strong> registered user</p></li>
                                            </ul>
                                            <div class="pricing-button"><a href="#">choose plan</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group-btn-slider">
                            <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                            <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>  -->
                <!-- SLIDER TALK ABOUT US-->
                <div class="section background-opacity slider-talk-about-us">
                    <div class="container">
                        <div id="people-talk" data-ride="carousel" data-interval="5000" class="slider-talk-about-us-wrapper carousel slide">
                            <div role="listbox" class="slider-talk-about-us-content carousel-inner">
                               
                                <div class="peopel-item item active"><p class="peopel-comment">" An original idea. That can not be too hard. The library must be full of them. "</p>

                                    <div class="group-peole-info">
                                        <div class="peopel-avatar"><img src="{{ asset("/images/user_placeholder.png") }}" alt="" class="img-responsive"/></div>
                                        <div class="peopel-name">Admin</div>
                                        <!--<div class="people-job">Microshop Crop.SEO</div>-->
                                    </div>
                                </div>
                               
                                @foreach($comments as $web_comments)
                                <div class="peopel-item item"><p class="peopel-comment">" {{$web_comments->comment}} "</p>

                                    <div class="group-peole-info">
                                        <div class="peopel-avatar"><img src="{{ asset("/images/user_placeholder.png") }}" alt="" class="img-responsive"/></div>
                                        <div class="peopel-name">{{$web_comments->username}}</div>
                                        <!--<div class="people-job">Microshop Crop.SEO</div>-->
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="group-btn-slider"><a href="#people-talk" role="button" data-slide="prev">
                        <div class="btn-prev carousel-control left"><i class="fa fa-angle-left"></i></div>
                    </a><a href="#people-talk" role="button" data-slide="next">
                        <div class="btn-next carousel-control right"><i class="fa fa-angle-right"></i></div>
                    </a></div>
                </div>
                <!--LATEST NEW-->
            <!--    <div class="section section-padding latest-news">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">latest news</h4>

                            <h2 class="center-title">all about edugate updates</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-a-01-01"></i></div>
                        </div>
                        <div class="latest-news-wrapper">
                            <div class="edugate-layout-1">
                                <div class="edugate-image"><img src="assets/images/news/news-1.jpg" alt="" class="img-responsive"/></div>
                                <div class="edugate-content"><a href="news-detail.html" class="title">Effective researching method</a>

                                    <div class="info">
                                        <div class="author item"><a href="#">By Admin</a></div>
                                        <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                    </div>
                                    <div class="info-more">
                                        <div class="view item"><i class="fa fa-user"></i>

                                            <p> 56</p></div>
                                        <div class="comment item"><i class="fa fa-comment"></i>

                                            <p> 239</p></div>
                                    </div>
                                    <div class="description">Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully Dalmatian hello amazing the...</div>
                                    <button onclick="window.location.href='news-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                </div>
                            </div>
                            <div class="edugate-layout-1">
                                <div class="edugate-image"><img src="assets/images/news/news-2.jpg" alt="" class="img-responsive"/></div>
                                <div class="edugate-content"><a href="news-detail.html" class="title">Effective researching method</a>

                                    <div class="info">
                                        <div class="author item"><a href="#">By Admin</a></div>
                                        <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                    </div>
                                    <div class="info-more">
                                        <div class="view item"><i class="fa fa-user"></i>

                                            <p> 56</p></div>
                                        <div class="comment item"><i class="fa fa-comment"></i>

                                            <p> 239</p></div>
                                    </div>
                                    <div class="description">Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully Dalmatian hello amazing the...</div>
                                    <button onclick="window.location.href='news-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                </div>
                            </div>
                            <div class="edugate-layout-1">
                                <div class="edugate-image"><img src="assets/images/news/news-3.jpg" alt="" class="img-responsive"/></div>
                                <div class="edugate-content"><a href="news-detail.html" class="title">Effective researching method</a>

                                    <div class="info">
                                        <div class="author item"><a href="#">By Admin</a></div>
                                        <div class="date-time item"><a href="#">17 sep 2015</a></div>
                                    </div>
                                    <div class="info-more">
                                        <div class="view item"><i class="fa fa-user"></i>

                                            <p> 56</p></div>
                                        <div class="comment item"><i class="fa fa-comment"></i>

                                            <p> 239</p></div>
                                    </div>
                                    <div class="description">Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully less Dalmatian hello amazing the rmore flung as thanks a manta dealt to under emu some the and one baldbe dear sobbingly save and spitefully Dalmatian hello amazing the...</div>
                                    <button onclick="window.location.href='news-detail.html'" class="btn btn-green"><span>learn now</span></button>
                                </div>
                            </div>
                            <button class="btn btn-green btn-latest-new"><span>Browser All Post<i class="fa fa-long-arrow-right"></i></span></button>
                        </div>
                    </div>
                </div> -->
                <!-- BEST STAFF-->
            <!--    <div class="section section-padding background-opacity best-staff">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">touch them if you want</h4>

                            <h2 class="center-title">learn from the best</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-icon-05"></i></div>
                        </div>
                        <div class="best-staff-wrapper">
                            <div class="best-staff-content">
                                <div class="staff-item">
                                    <div class="staff-item-wrapper">
                                        <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-2.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Alex trevor</a>

                                            <div class="staff-job">head teacher</div>
                                            <div class="staff-desctiption">Nam libelo tempore, cum soluta nobis est eligendi optio cumque nilhi impedil quo minus end maximie fade posimus the end.</div>
                                        </div>
                                    </div>
                                    <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                </div>
                                <div class="staff-item">
                                    <div class="staff-item-wrapper">
                                        <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-3.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">lana simth</a>

                                            <div class="staff-job">vice head teacher</div>
                                            <div class="staff-desctiption">Nam libelo tempore, cum soluta nobis est eligendi optio cumque nilhi impedil quo minus end maximie fade posimus the end.</div>
                                        </div>
                                    </div>
                                    <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                </div>
                                <div class="staff-item">
                                    <div class="staff-item-wrapper">
                                        <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-4.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">barry join</a>

                                            <div class="staff-job">advisory professor</div>
                                            <div class="staff-desctiption">Nam libelo tempore, cum soluta nobis est eligendi optio cumque nilhi impedil quo minus end maximie fade posimus the end.</div>
                                        </div>
                                    </div>
                                    <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                </div>
                                <div class="staff-item">
                                    <div class="staff-item-wrapper">
                                        <div class="staff-info"><a href="#" class="staff-avatar"><img src="assets/images/people-avatar-5.jpg" alt="" class="img-responsive"/></a><a href="#" class="staff-name">Ven Tomarme</a>

                                            <div class="staff-job">Design teacher</div>
                                            <div class="staff-desctiption">Nam libelo tempore, cum soluta nobis est eligendi optio cumque nilhi impedil quo minus end maximie fade posimus the end.</div>
                                        </div>
                                    </div>
                                    <div class="staff-socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group-btn-slider">
                        <div class="btn-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="btn-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div> -->
                
                <!-- SLIDER LOGO-->
            <!--    <div class="section slider-logo">
                    <div class="container">
                        <div class="slider-logo-wrapper">
                            <div class="slider-logo-content">
                                <div class="carousel-logos owl-carousel">
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-1.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-2.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-3.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-4.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-5.png" alt="" class="img-responsive"/></a></div>
                                    <div class="logo-iteam item"><a href="#"><img src="assets/images/logo/logo-carousel-6.png" alt="" class="img-responsive"/></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>



<script>

$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$("#gallery").offset().top},'slow');})})

</script>

@endsection

