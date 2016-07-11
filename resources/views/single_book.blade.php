@extends('master')

@section('title')

Public Library Single Book

@stop

@section('resources')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
    <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="container">
                @foreach($book_details as $book)
                <div class="container-fluid">
                <div class="row" id="show_book">
        <legend>
            <h2> </h2> </legend>

        <div class="form-group">
        <div class="col-lg-3"  style="background-image: url('../images/PlaceholderBook.png');background-size: 100% 100%;width:300px;height:280px">
&ensp;
            </div>

        </div>
        <div class="col-lg-8">
            <div class="form-group">
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300; font-size:70%"> </h5>
                <legend>Main Info</legend>
                <div hidden>


                </div>
            </div>


            <div class="form-group">
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Name</h5>
                <div class="col-lg-5">
                    <h5 style="font-weight:600;font-size:110%"> {{$book->name}}</h5>

                </div>
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Author </h5>
                 <div class="col-lg-1">
                    <h5 style="font-weight:500;font-size:110%"> {{$book->author}} </h5>

                </div>
            </div>
            
            <div class="form-group">
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Cl Number</h5>
                <div class="col-lg-5">
                    <h5 style="font-weight:600;font-size:110%"> {{$book->cl_number}}</h5>

                </div>
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Category </h5>
                 <div class="col-lg-1">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->category=="" ||$book->category==null){
                            echo "None";

                        } 
else {
    echo $book->category;

}
                        ?></h5>

                </div>
            </div>


            <input type="text" id="book_id" value="{{$book->id}}" hidden="true">



            <div class="form-group">
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Editor/Translator</h5>
                <div class="col-lg-9">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->edit_translate=="" ||$book->edit_translate==null){
                            echo "None";

                        } 
else {
    echo $book->edit_translate;

}
                        ?></h5>

                </div>
            </div>




            <div class="form-group">
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
                <legend>Publisher Info</legend>
                <div hidden>


                </div>
            </div>



            <div class="form-group">
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Publisher</h5>
                <div class="col-lg-9">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->publisher=="" ||$book->publisher==null){
                            echo "None";

                        } 
else {
    echo $book->publisher;

}
                        ?></h5>

                </div>


            </div>



            <div class="form-group">
                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Published Place</h5>
                <div class="col-lg-5">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->published_place=="" ||$book->published_place==null){
                            echo "None";

                        } 
else {
    echo $book->published_place;

}
                        ?></h5>

                </div>



                <h5 for="name" class="col-lg-3 control-label" style="font-weight:300;font-size:110%">Published Year</h5>
                <div class="col-lg-1">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->published_year=="" ||$book->published_year==null){
                            echo "None";

                        } 
else {
    echo $book->published_year;

}
                        ?></h5>

                </div>

            </div>

        </div>
        
<div class="col-lg-11">
        <div class="form-group">
            <h5 for="name" class="col-lg-3 control-label" style="font-weight:300"> </h5>
            <legend>Additional Info </legend>

        </div>


          <div class="form-group">
                <h5 for="name" class="col-lg-2 control-label" style="font-weight:300;font-size:110%">Pages</h5>
                <div class="col-lg-5">
                     <h5 style="font-weight:500;font-size:110%"> <?php if($book->pages=="" ||$book->pages==null){
                            echo "None";

                        } 
else {
    echo $book->pages;

}
                    ?></h5>

                </div>
                <h5 for="name" class="col-lg-2 control-label" style="font-weight:300;font-size:110%">Series</h5>
                 <div class="col-lg-2">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->series=="" ||$book->series==null){
                            echo "None";

                        } 
else {
    echo $book->series;

}
                        ?></h5>

                </div>
            </div>
        
        
         <div class="form-group">
                <h5 for="name" class="col-lg-2 control-label" style="font-weight:300;font-size:110%">Height</h5>
                <div class="col-lg-5">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->height=="" ||$book->height==null){
                        echo "None";

                    } 
else {
    echo $book->height.'cm';

}
                    ?></h5>

                </div>
                <h5 for="name" class="col-lg-2 control-label" style="font-weight:300;font-size:110%">Series Number</h5>
                 <div class="col-lg-2">
                    <h5 style="font-weight:500;font-size:110%"> <?php if($book->series_num=="" ||$book->series_num==null){
                            echo "None";

                        } 
else {
    echo $book->series_num;

}
                        ?></h5>

                </div>
            </div>
    
    
        <div class="form-group">
                <h5 for="name" class="col-lg-2 control-label" style="font-weight:300;font-size:110%">ISBN</h5>
                <div class="col-lg-5">
                   <h5 style="font-weight:500;font-size:110%"> <?php if($book->isbn=="" ||$book->isbn==null){
                        echo "None";

                    } 
else {
    echo $book->isbn;

}
                    ?></h5>

                </div>
            <!--    <h5 for="name" class="col-lg-2 control-label" style="font-weight:300;font-size:110%">Remarks</h5>
                 <div class="col-lg-2">
                   <h5 style="font-weight:500;font-size:110%"> <?php if($book->remarks=="" ||$book->remarks==null){
                        echo "None";

                    } 
else {
    echo $book->remarks;

}
                    ?></h5>

                </div>-->
            </div>
       
        
    </div>

    </div>
                </div>
                @endforeach
                    <br>
                    <legend>Copies</legend>
                 <table class="table table-striped table-hover" id="retable">

                <thead>

                    <th> Copy ID</th>
                    <th> Availability</th>
                    <th> Reserved Status</th>
                    <th> Date Added </th>
                    <th class="col-lg-1"> </th>

                </thead>
                <tbody id="copytable">

                    @foreach ($book_copies as $copies)

                    <tr>
                        <td> {{$copies->id}}</td>
                        <td>{{$copies->status}} </td>
                         <td>{{$copies->reserved}} </td>
                        <td> {{$copies->date_added}}</td>

                        @if(Auth::check())
                
                        <td>
                             <button type="button" class="btn btn-contact btn-green" onclick="reserve('{{$copies->id}}')"  <?php if ($copies->status=="Not Available"||$copies->reserved=="Yes"){ echo "disabled"; } ?> ><span>RESERVE</span></button>
                        </td>                         
                   
                        @else
                        <td>
                             <button type="button" class="btn btn-contact btn-green" onclick="cant_reserve()"  <?php if ($copies->status=="Not Available"||$copies->reserved=="Yes"){ echo "disabled"; } ?> ><span>RESERVE</span></button>
                        </td>
                        @endif
                        
                    </tr>



                    @endforeach
                </tbody>


            </table>
                </div>
        </div>
    </div>
</div>

<!--Reserve copy modal-->
<div class="modal fade" id="reservebook">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Reserve Log</h4>
            </div>
            <div class="modal-body" id="memberDelSuccess">

          <form >
            {!! csrf_field() !!}
            <div class=" form form-horizontal">
               <fieldset>               
                    <div class="form-group">
                         <label for="reserved_duration" class="col-lg-3 control-label">Duration</label>
                         <div class="col-lg-6">
                             <select class="form-control" id="reserved_duration" name="reserved_duration">
                             <option value="1">1 day</option>
                             <option value="2">2 days</option>
                             <option value="3">3 days</option>
                             <option value="4">4 days</option>
                             <option value="5">5 days</option>
                             <option value="6">6 days</option>
                             <option value="7">7 days</option>
                             </select>
                       
                        </div>
                   </div>
                   
                   <input type="text" id="reservebookid"  hidden="true">
                   
                    </fieldset>
                </div>
            </form>
                
                
                
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#A4A4A4">Cancel</button>
                <button type="submit" class="btn btn-success" onclick="ReserveBook()" style="background-color:#2E64FE">Reserve</button>
            </div>
        </div>
    </div>
</div> 
    
<!--Reserve copy modal-->
<div class="modal fade" id="please_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Something went wrong</h4>
            </div>
            <div class="modal-body">                
                
                <div class="alert alert-danger">
                    <strong>Sorry!</strong> You must register in order to reserve this book.
                </div>
                
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#A4A4A4">Cancel</button>
            </div>
        </div>
    </div>
</div> 
    
    
<script>

  function reserve(a){
      
    var id = a;
    $("#reservebook").modal('show');
    $("#reservebookid").val(a);

  }
    
   function cant_reserve(){

    $("#please_login").modal('show');

  }
    
  function ReserveBook(){
    
    var bid = document.getElementById("reservebookid").value;
    var duration = document.getElementById("reserved_duration").value;
    
    var data = "copyid="+bid+"&duration="+duration;
    
    $.ajax({
    type: "get",
    url: "/reservecopy",
    data: data,
        
     success : function(data){
       
        location.reload();
        
     }
    });
   }
    
</script>

@endsection