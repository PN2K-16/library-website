@extends('master')

@section('title')

Public Library New Arrivals

@stop

@section('home')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
    <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="top-courses-wrapper">
                            <div class="top-courses-slider">
                                
                                @foreach($new_books as $new_book)
                                <div class="top-courses-item">
                                    <div class="edugate-layout-2">
                                        <div class="edugate-layout-2-wrapper">
                                            <div class="edugate-content"><p class="title">{{$new_book->name}}</p>
                                                <br>
                                                <div class="info">
                                                    <div class="author item">Author</div>
                                                    <div class="date-time item">{{$new_book->author}}</div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item">Category</div>
                                                    <div class="date-time item">{{$new_book->category}}</div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item">Arrived Date</div>
                                                    <div class="date-time item">{{$new_book->date_created}}</div>
                                                </div>
                                                <br>
                                                <div class="info">
                                                    <div class="author item">   ISBN</div>
                                                    <div class="date-time item">{{$new_book->isbn}}</div>
                                                </div>
                                            <!--    <div class="info-more">
                                                    <div class="view item"><i class="fa fa-user"></i>

                                                        <p> 56</p></div>
                                                    <div class="comment item"><i class="fa fa-comment"></i>

                                                        <p> 239</p></div>
                                                </div>
                                                <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...</div> -->
                                                <a href="single_book?id={{$new_book->id}}" class="btn btn-green"><span>View Details</span></a>
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
            </div>
        </div>
</div>

@endsection