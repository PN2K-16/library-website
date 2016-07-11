<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    
    $popular_books = DB::table('bookdetails')->orderBy('lend_count', 'desc')->take(12)->get();
    $popular_first = array_slice($popular_books, 0, 6);
    $popular_second = array_slice($popular_books, 5);
    $comments = DB::table('web_comments')->orderBy('id', 'desc')->get();
    
    return view('home')->with("popular_first", $popular_first)->with("popular_second", $popular_second)->with("comments", $comments);
});

Route::get('/home', function () {
    
    $popular_books = DB::table('bookdetails')->orderBy('lend_count', 'desc')->take(12)->get();
    $popular_first = array_slice($popular_books, 0, 6);
    $popular_second = array_slice($popular_books, 6);
    $comments = DB::table('web_comments')->orderBy('id', 'desc')->get();
    
    return view('home')->with("popular_first", $popular_first)->with("popular_second", $popular_second)->with("comments", $comments);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/new_arrivals', function () {
    return view('new_arrivals');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/resources', function () {
    
    $categories = DB::table('categories')->orderBy('id')->get();
    $books = DB::table('bookdetails')->orderBy('id','desc')->get();
        
    return view('resources')->with("categories",$categories)->with("books",$books);
});

Route::get('/staff', function () {
    
    $staff = DB::table('users')->orderBy('id')->get();    
    
    return view('staff')->with("staff", $staff);
});

Route::get('new_arrivals', 'booksController@new_arrival');
Route::get('single_book', 'booksController@single_books');
Route::any('searchbooks', array('as' => 'searchbooks', 'uses' => 'booksController@searchbook'));
Route::any('validatemembership', array('as' => 'validatemembership', 'uses' => 'booksController@validatememberships'));
Route::any('onlineregister', array('as' => 'onlineregister', 'uses' => 'booksController@onlineregisters'));
Route::any('onlineactivate', array('as' => 'onlineactivate', 'uses' => 'booksController@onlineactivates'));
Route::any('loginmember', array('as' => 'loginmember', 'uses' => 'booksController@loginmembers'));
Route::get('logout', 'booksController@logouts');
Route::any('postcomment', array('as' => 'postcomment', 'uses' => 'booksController@postcomments'));
Route::get('reservecopy', 'booksController@reservecopys');

