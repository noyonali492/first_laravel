<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\product;

class productController extends Controller
{
    public function add(){

        return view('products.addProduct');
    }
}
