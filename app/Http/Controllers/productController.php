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
        $imageUrl = $uploadPah.$name;
        //echo $imageUrl;

        $product = new Product();

        $product->productName = $request->productName;
        $product->categoryId = $request->productCategory;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productDescription = $request->productDescription;
        $product->productPicture = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();


       //dd($productPic);

    }

}
