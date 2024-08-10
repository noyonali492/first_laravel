<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/first', function(){
    $arr= array('country',3,5,8,9);
    return $arr;
    return view('first');
});

Route::get('/test','TestController@display');
*/

Route::get('/','AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_category', 'categoryController@add');
Route::post('/save-category', 'categoryController@saveCategory');
Route::get('manage-category','categoryController@manageCategory');
Route::get('/edit-category/{edit_id}','categoryController@editCcategory');
Route::post('/update-category','categoryController@updateCategory');

Route::get('/add_product', 'productController@add');
Route::post('/save-product', 'productController@saveProduct');