<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function display(){
        // $arr = array(2,3,5,8,9);
        // return $arr;
        return view('first');
    }
}
