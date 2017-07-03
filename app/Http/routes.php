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
    return view('index');
})->name("home");
Route::get('/courses', function () {
        return view('courses');
 })->name("courses");
Route::get('/about', function () {
        return view('about');
 })->name("about");
Route::get('/booknow', function () {
        return view('book');
 })->name("booknow");
Route::get('/treatments', function () {
        return view('treatments');
 })->name("treatments");

Route::get('/contact', function () {
        return view('contact');
 })->name("contact");



Route::get('/dashboard', [
        'uses'=>"UserController@getDashboard" ,
        'as'=>'dashboard' ,
       
    ]);
Route::get('/course', [
        'uses'=>"UserController@getcourses" ,
        'as'=>'course' ,
       
    ]);




Route::post('/insertcourse',[
      'uses'=>'CourseController@PostCourse',
      'as' =>'insertcourse'
       ]);
