<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use App\course;
use App\contact;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller {

    


    public function getDashboard(){
      
      
        return view('admin.dashboard');


    }
 public function getcourses(){
      
      
        return view('admin.courses');


    }




   

}

