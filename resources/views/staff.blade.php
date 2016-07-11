@extends('master')

@section('title')

Public Library Staff

@stop

@section('home')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
    <div class="main-content"><!-- CONTENT-->
        <div class="content">
            <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">About Staff</h2>
                            <ol class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li class="active"><a href="#">Staff</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            
            <div class="section section-padding list-categories">
                    <div class="container">
                        <div class="list-categories-wrapper">
                            <div class="list-categories-content row">
                                <div class="customs-row">
                                    @foreach($staff as $staff_details)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="edugate-layout-3">
                                            <div class="edugate-layout-3-wrapper"><a href="#" class="edugate-image"><img src="{{ asset("/images/user_placeholder.png") }}" alt="" class="img-responsive"/></a>

                                                <div class="edugate-content"><a href="#" class="title">{{$staff_details->name}}</a>

                                                    <div class="description">{{$staff_details->email}}</div>
                                                    <div class="description">{{$staff_details->position}}</div>
                                                    
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                    
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection