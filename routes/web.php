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

// Route::get('/', function () {
//     $foo1="foobar";
//     return view('welcome',[
//         'foo'=>'foobar',
//         'title'=>request('title'),
//         'alert'=>'<script>alert("hello");</script>',
//         'foo1'=>$foo1
//     ]);
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/project','ProjectController@index');