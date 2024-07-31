<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class categoryController extends Controller
{
    public function add(){
        return view('categories.addCategory');
    }
    public function saveCategory(Request $request){
        $categories= new Category();
        $categories->categoryName = $request->categoryName;
        $categories->categoryDescription = $request->categoryDescription;
        $categories->publicationStatus = $request->publicationStatus;
        $categories->save();
        return redirect('/add_category')->with('msg','add successfully');
    }

    public function manageCategory(){
        $categories= DB::table('categories')->paginate(2);
        // $categories= Category::all();
        return view('categories.manageCategory',['categories'=>$categories]);
    }

    public function editCcategory($id){
        $categoryById = Category::where('id',$id)->first();
        return view('categories.editCategory',['categoryById'=>$categoryById]);

    }

    public function updateCategory(Request $request){
        $category = Category::find($request->categoryId);

        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();
        return redirect('/manage-category')->with('msg','Category Updated successfully');
    }
 
}
 