<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
// Route::get('/sample/{id}', function ($id) {
//     echo $id;
//     return view('sample');
// });

Route::get('/sample', function () {
    return view('sample',[
        'name'=>'John Doe'
    ]);
});

Route::get('users','Users@index');
Route::get('greet/{name}','Users@show');
Route::post('userController','UserController@validateForm');
Route::view('about','about');
Route::view('teacher','teacher');
Route::view('blog-single','blog-single');
Route::view('blog','blog');
Route::view('blog-single','blog-single');
Route::view('gallery','gallery');
Route::view('contact','contact');
Route::view('physics_lab','highlights/physics_lab');
Route::view('chemistry_lab','highlights/chemistry_lab');
Route::view('header','components/header');

// Route::view('sample','sample',['name'=>'ram and sita']);
//alternative syntax
Route::view('userview','/user');
//once the home page is loaded it is redirect to the mentioned route
// Route:: redirect('/','sample');