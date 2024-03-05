<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __contruct(){
        //$this->middleware('admin');
    }
    function profile(){
        
        return view('admin.profile');
    }
}
