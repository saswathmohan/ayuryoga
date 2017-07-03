<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use App\course;
use App\contact;

use Illuminate\Support\Facades\Auth;


class CourseController extends Controller {

    

public function PostCourse(Request $request){

        $this->validate($request,[
            'course_name'=>'required',
            'vendorname' => 'required',
             
        ]);
        $itemname=$request['itemname'];
        $vendorname=$request['vendorname'];

        $stock= new stock();
        $stock->itemname=$itemname;
        $stock->vendor=$vendorname;
        $stock->stock_qty=0;
        $stock->save();
        $request->session()->flash('alert-success', 'Item is successful added!');
        return redirect()->back();

    }



   

}

