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





 Route::resource('project','ProjectController');
 
// Route::get('/project','ProjectController@index');
// Route::get('/project/create','ProjectController@create');
// Route::post('/project','ProjectController@store');
// Route::get('/project/{project}','ProjectController@show');
// Route::get('/project/{project}/edit','ProjectController@edit');
// Route::patch('/project/{project}','ProjectController@update');
// Route::delete('/project/{project}','ProjectController@destroy');


// get /project (index)  to show all
//get /project/create (create)  show me a form to create  anew project	
// post /project (store)		to save the new project actuually the action of above
//get /project/1/edit (edit)	show me a form to edit the project
//patch  /project/1 (update)  to update the project
//delete /project/1 (delete) to delete the project

