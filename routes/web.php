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

//Route::get('demo',function (){
//    return view('demo');
//});
//Route::get('/yummy',function (){
//    return view('ymmy');
//});

Route::resource('admin/category', 'CategoryController');
Route::resource('admin/collection', 'CollectionController');
Route::resource('admin/article', 'ArticleController');
Route::resource('admin/bakery', 'BakeryController');


