<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Input;
use Redirect;
use Session;
use Hash;
use Illuminate\Support\MessageBag;
use Auth;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
      *get the newly arrived books from database
      *@return newly arrived books
      */
    public function new_arrival(Request $request)
    {
        $new_books = DB::table('bookdetails')->orderBy('id', 'desc')->take(10)->get();
        
        return view('new_arrivals')->with("new_books", $new_books);      
    }
    
    /**
      *view a single book with details
      *
      *@param book id
      *@return book details of the given book
      */
     public function single_books(Request $request)
    {
        $id = $request->input('id');
         
        $book_details = DB::table('bookdetails')->where('id', '=' , $id)->get();
        $book_copies = DB::table('books')->where('book_name_id', '=' , $id)->get();
         
        return view('single_book')->with("book_details", $book_details)->with("book_copies", $book_copies);
    }
    
    /**
      *Search books by categories
      *
      *@param category name
      *@return all the books under the given category
      */
    public function searchbook(Request $request)
    {
        $select=$request->input('category');
        $search=$request->input('key_word');
        $type=$request->input('type');
        
        if($select == "all")
        {
            
         $books=  DB::table('bookdetails')
        ->leftJoin('books', 'bookdetails.id','=','books.book_name_id')

        ->select(DB::raw('count(books.id) as available, bookdetails.*'))
        ->where('bookdetails.'.$type, 'LIKE', $search.'%')
        ->groupBy('bookdetails.id')
        ->get();

            
          $categories = DB::table('categories')->orderBy('id')->get();
        
          return view('resources')->with("categories",$categories)->with("books",$books);  
        }
        else
        {
        $books=  DB::table('bookdetails')
        ->leftJoin('books', 'bookdetails.id','=','books.book_name_id')

        ->select(DB::raw('count(books.id) as available, bookdetails.*'))
        ->where('bookdetails.category','=' , $select)
        ->where('bookdetails.'.$type, 'LIKE', $search.'%')
        ->groupBy('bookdetails.id')
        ->get();

        $categories = DB::table('categories')->orderBy('id')->get();
        
        return view('resources')->with("categories",$categories)->with("books",$books);
        }
    }
    
    /**
      *validate membership
      *
      *@param membership id
      *@return membership status
      */
    public function validatememberships(Request $request)
    {
       $mid = $request->input('id');

       $validity = DB::table('members')->where('id', '=' , $mid)->first();
         
            if(is_null($validity))
            {
                 $uservalidity = "Invalid Membership ID";
                 return $uservalidity;
            }
            else
            {
                $webstatus = DB::table('members')->where('id','=',$mid)->first();
                $status = $webstatus->web_access;
                
                if($status == "yes")
                {
                     $activatevalidity = "You have already activated your web account. If you have any trouble please contact one of our staff members";
                     return $activatevalidity;
                }
                else
                {
                    $userdetails = DB::table('members')->where('id','=',$mid)->get();
                    return $userdetails;
                }
            }
    }
    
    public function onlineregisters(Request $request)
    {
        $rules = array(
        'First_Name'         => 'required|max:20',       
        'Last_Name'         => 'required|max:20',     
        'type'         => 'required',     
        'nic'         => 'required|unique:members|max:10|min:10',     
        'password'         => 'required',    
        'repassword'         => 'required|same:password',     
        'Address_Line_1'         => 'required|max:50',
        'Address_Line_2'         => 'required|max:50',         
        'Address_Line_3'         => 'required|max:50',
        'Land_Number'         => 'required|digits_between:9,11',     
        'Mobile_Number'         => 'required|digits_between:9,11|unique:members',           
        'email'         => 'required|email|unique:members',     
         );
    
    $validator = Validator::make(Input::all(), $rules);
    
    
       if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('register')
            ->withErrors($validator)->withInput();

    } else {
        // validation successful ---------------------------

       
        $name=Input::get('First_Name');
        $lastname=Input::get('Last_Name');
        $typee=Input::get('type');
        $nic=Input::get('nic');    

        $addressone=Input::get('Address_Line_1');
        $addresstwo=Input::get('Address_Line_2');
        $addressthree=Input::get('Address_Line_3');
     
        $lnum=Input::get('Land_Number');  
        $mnum=Input::get('Mobile_Number');      
        $email=Input::get('email');      
     
        $username=$name.' '.$lastname;
        $password=Hash::make(Input::get('repassword'));   
           
        $address=$addressone.','.$addresstwo.','.$addressthree;
        
        
  
        $id=DB::table('members')->insertGetId(array('name'=>$name,'Last_Name'=>$lastname,'typee'=>$typee,'nic'=>$nic,'address'=>$address,'Land_Number'=>$lnum,'Mobile_Number'=>$mnum,'email'=>$email,'Address_Line_1'=>$addressone,'Address_Line_2'=>$addresstwo,'Address_Line_3'=>$addressthree,'username'=>$username,'password'=>$password,'web_access'=>"yes"));

        return Redirect::to('register');

      }
    }
    
    /**
      *activate the web account of an already registered member
      * 
      *@param member id
      *
      */
     public function onlineactivates(Request $request)
    {
        $rules = array(   
        'Password'         => 'required',    
        're-enter_password'         => 'required|same:Password',     
         );
    
    $validator = Validator::make(Input::all(), $rules);
    
    
       if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        \Session::flash('message','there are errors');
           
        // redirect our user back to the form with the errors from the validator
        return Redirect::to('register')
            ->withErrors($validator)->withInput();

    } else {
        // validation successful ---------------------------
   
        $id=Input::get('memid'); 
        $username=Input::get('username'); 
        $password=Hash::make(Input::get('re-enter_password'));   

        $id=DB::table('members')
        ->where('id', '=', $id)
        ->update(array('username' => $username, 'password' => $password, 'web_access' => "yes"));

        return Redirect::to('register');

      }
    }
    
    /**
      *login members
      *
      *@param email and password
      *
      */
     public function loginmembers(Request $request)
    {
      $credentials = [
      'email'     => Input::get('email'),
      'password'  => Input::get('password')    
    ];
        
    $errors = new MessageBag;    
    
   // $member = Input::only('email','password');
        
     if(Auth::attempt($credentials)){
        return Redirect::Intended('/home');
    }
        
     $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
    return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
    }
    
    /**
      *logout the member
      */
    public function logouts(Request $request)
    {
        Auth::logout();
        
        $popular_books = DB::table('bookdetails')->orderBy('lend_count', 'desc')->take(12)->get();
        $popular_first = array_slice($popular_books, 0, 6);
        $popular_second = array_slice($popular_books, 5);
        $comments = DB::table('web_comments')->orderBy('id', 'desc')->get();
    
    return view('home')->with("popular_first", $popular_first)->with("popular_second", $popular_second)->with("comments", $comments);
    }

    /**
      *comments about the library
      *
      *@param comments
      *
      */
    public function postcomments(Request $request)
    {
        $comment=Input::get('comment');
        $username = Auth::user()->username;
        $id=Auth::user()->id;
    
        DB::table('web_comments')->insert(array('member_id'=>$id,'username'=>$username,'comment'=>$comment));
        
        return Redirect::back();
    }
        
    /**
      *reserve a book copy online
      *
      *@param book copy id
      *
      */
    public function reservecopys(Request $request)
    {
        $copyid=$request->input('copyid');   
        $duration=$request->input('duration');
        $id=Auth::user()->id;
        $bdate = date("Y-m-d");
        $date=\Carbon\Carbon::now();
        $due_date = $date->addDays($duration);
    
        DB::table('reserved_log')->insert(array('book_id'=>$copyid,'client_id'=>$id,'reserved_date'=>$bdate,'duration'=>$duration,'due_date'=>$due_date));
        DB::table('books')->where('id','=', $copyid)->update(array('reserved'=>"Yes"));  
        
        return 'success';
    }
}
