@extends('master')

@section('title')

Public Library Resources

@stop

@section('resources')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
    <div class="main-content"><!-- CONTENT-->
        <div class="content">
             <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">all resources</h2>
                            <ol class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li class="active"><a href="#">Resources</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                 <div class="section">
                    <div class="search-input">
                        <div class="container">
                            <div class="search-input-wrapper">
                                {!! Form::open(array('route' => 'searchbooks', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true, 'method' => 'post', 'id' => 'disableform')) !!}
                    {!! csrf_field() !!}
                                <select class="form-select style-1 selectbox" id="category" name="category" >
                                    <option value="all">all categories</option>
                                   @foreach($categories as $categorys)
                                    
                                    <option value="{{$categorys->cat_name}}">{{$categorys->cat_name}}</option>
                                    
                                    @endforeach
                                </select><select class="form-select style-2 selectbox" id="type" name="type" >
                                    <option value="author" >Author</option>
                                    <option  value="name" selected>Name</option>
                                </select><input type="text" id="key_word" name="key_word" placeholder="Enter the key word" class="form-input"/>
                                    <button type="submit" class="form-submit btn btn-blue"><span>search now<i class="fa fa-search"></i></span></button>
                                    <div class="clearfix"></div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            
             @if(empty($books))
            
            <br>
            <br>
            <div class="alert alert-danger" style="text-align:center">
                <strong>No resources found. Please try again.</strong>
            </div>
            <br>
             @else
            
            <div class="section section-padding list-categories">
                    <div class="container">
                        <div class="list-categories-wrapper">
                            <div class="list-categories-content row">
                                <div class="customs-row">
                                     @foreach($books as $book_details)
                                    <div class="col-md-4 col-sm-6">
                                       
                                        
                                        <div class="edugate-layout-3">
                                            <div class="edugate-layout-3-wrapper"><a href="#" class="edugate-image"><img src="{{env('IMG_PATH','') }}{{$book_details->id}}.jpg" alt="" class="img-responsive"/></a>

                                                <div class="edugate-content"><a href="#" class="title">{{$book_details->name}}</a>

                                                    <div class="description"><b>Author : </b> {{$book_details->author}}<br><b>Arrived Date : </b> {{$book_details->date_created}}<br><b>ISBN : </b> {{$book_details->isbn}}</div>
                                                  
                                                    
                                                
                                                    <a href="single_book?id={{$book_details->id}}"><button class="btn btn-green"><span>More Details</span></button></a>
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
            
            @endif
            
        </div>
    </div>
</div>

@endsection