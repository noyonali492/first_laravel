<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\product;

class productController extends Controller
{
    public function add(){
        $categories = Category::where('publicationStatus','1')->get();
        return view('products.addProduct',['categories'=>$categories]);
    }

    public function saveProduct(Request $request){
        $productPic = $request->file('productPicture');
        $name = $productPic->getClientOriginalName();
        $uploadPah = 'productPic/';
        $productPic->move($uploadPah,$name);



       //dd($productPic);

    }

}
