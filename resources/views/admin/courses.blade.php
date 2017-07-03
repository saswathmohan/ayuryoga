


@extends('layouts.admin_master')
@section('title')
    Ayuryoga Gurukulam
@endsection
@section('content')


 <div class= "right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Courses</h3>
                </div>









                
            </div>
           

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">

<h3>Add Courses</h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
      <form action="{{route('insertcourse') }}"   method="post" class="form-horizontal form-label-left" >


 <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="course_name">Course Name
            </label>
            
           
            <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="course_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="corse_name" placeholder="Course Name" type="text">
            </div>

        </div>

        <div class="item form-group">
            <label for="course_start" class="control-label col-md-3">Start Date</label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="course_start" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="course_start"  type="date">
        </div>
        </div>

        <div class="item form-group">
            <label for="course_end" class="control-label col-md-3">End Date</label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="course_end" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="course_end"  type="date">
        </div>
        </div>
        

        <div class="item form-group">
            <label for="seats" class="control-label col-md-3">Number Of Seats</label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="seats" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="seats"  placeholder="Number of Seats" type="number">
        </div>
        </div>

         <div class="item form-group">
            <label for="course_discription" class="control-label col-md-3">Discription</label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="course_discription" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="course_discription"  rows="4" cols="50"></textarea>
        </div>
        </div>


        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">

                <button id="send" type="submit" style="float:right;" class="btn btn-success">Submit</button>
               <input type="hidden" name="_token" value="{{Session::token()}}">



            </div>

</div>




@if(count($errors)>0)
                            <div class="row">
                            <div class="col-md-6">
                            <ul  style="list-style-type:none;" class="alert alert-danger" > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                            @foreach($errors->all() as $error)
                            <li style="margin-left:20px; ">{{$error}} </li>
                            @endforeach
                            </ul>

                            </div>

                            </div>
                            @endif

                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))

                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                    @endif
                                @endforeach
                            </div>
                            @endsection