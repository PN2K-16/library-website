@extends('master')

@section('title')

Public Library About Us

@stop

@section('aboutus')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
    <div class="main-content"><!-- CONTENT-->
        <div class="content">
            <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">about us</h2>
                            <ol class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li class="active"><a href="#">About Us</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            
            <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                                <div class="col-md-5"><img src="{{ asset("/images/people-avatar-8.png") }}" alt="" class="intro-image fadeInLeft animated wow"/></div>
                                <div class="col-md-7">
                                    <div class="intro-title">About us</div>
                                    <div class="intro-content"><p>The Provincial library system consists of the Central Library and faculty libraries. The Library, Faculty of Medicine is at Kynsey Road and the Library, Faculty of Science is at Thurstan Road.
The Central Library is situated in a sabaragamuwa municipal council building. The library contains books and periodicals in Humanities, Education, Law, Management, and Social Sciences.
The library consists of Permanent Reference section, Reference section, Reading room, Lending section, Periodicals section and the Computer room. The reading capacity is 150. There are over 14,000 books in this library.</p>
                                        <p>The Library is maintained and manged by the sabaragamuwa municipal council with the support of the government of Sri Lanka. This Library co-operate with many other libraries plus top most universities in Sri Lanka.</p>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="section section-padding edu-ab">
                    <div class="container">
                        <div class="edu-ab">
                            <div class="group-title-index edu-ab-title"><h2 class="center-title">WITH <b>LIBRARY WEBSITE</b> YOU CAN</h2><h4 class="top-title">Epsum factorial non deposit quid pro quo hic escorol</h4></div>
                            <div class="edu-ab-content">
                                <ul class="list-unstyled list-inline">
                                    <li>
                                        <div class="circle-icon"><i class="fa fa-wifi fa-2x"></i></div>
                                        <span>Knowledge online 100%</span></li>
                                    <li>
                                        <div class="circle-icon fa-2x"><i class="fa fa-search"></i></div>
                                        <span>Learn everything you want</span></li>
                                    <li>
                                        <div class="circle-icon fa-2x"><i class="fa fa-thumbs-up"></i></div>
                                        <span>Details about Books</span></li>
                                    <li>
                                        <div class="circle-icon fa-2x"><i class="fa fa-user"></i></div>
                                        <span>Staff Communication</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="section section-padding edu-feature">
                    <div class="container">
                        <div class="edu-feature-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="group-title-index edu-feature-text"><h2 class="center-title">LOREM IPSUM</h2>

                                                <p class="top-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci.</p></div>
                                        </div>
                                        <div class="col-md-8">
                                            <ul id="accordion" role="tablist" class="panel-group list-unstyled edu-feature-list">
                                                <li class="panel">
                                                    <div role="tab" id="item-1" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#lesson" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Mission</a></div>
                                                    <div id="lesson" role="tabpanel" aria-labelledby="item-1" class="collapse">
                                                        <div class="panel-body col-item-2">The Provincial Library advances scholarship and teaching by committing itself to the creation, application, preservation and dissemination of knowledge.</div>
                                                    </div>
                                                </li>
                                                <li class="panel">
                                                    <div role="tab" id="item-2" class="col-item-1"><i class="fa fa-check-circle"></i><a href="#display" data-toggle="collapse" data-parent="#accordion" role="button" aria-expanded="true" aria-controls="lesson"><span>Vision</div>
                                                    <div id="display" role="tabpanel" aria-labelledby="item-2" class="collapse">
                                                        <div class="panel-body col-item-2">To support the Libraries vision in building synergies between knowledge, education and research, by striving to create an environment conducive to learning, teaching and intellectual advancement.</div>
                                                    </div>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"><img src="{{ asset("/images/picture-8.png") }}" alt="" class="computer-image"/></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection