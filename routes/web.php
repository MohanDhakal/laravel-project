<?php

use Illuminate\Support\Facades\Auth;
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



Route::get('users', 'Users@index');
Route::get('greet/{name}', 'Users@show');
Route::view('about', 'about');
Route::view('teacher', 'teacher');
Route::view('blog-single', 'blog-single');
Route::view('blog', 'blog');
Route::view('blog-single', 'blog-single');
Route::view('gallery', 'gallery');
Route::view('contact', 'contact');
Route::view('physics_lab', 'highlights/physics_lab');
Route::view('chemistry_lab', 'highlights/chemistry_lab');
Route::view('header', 'components/header');
Route::view('dashboard', 'components/dashboard');
Route::view('userview', '/user');

Route::view('/about', 'about');
Route::view('/teacher', 'teacher');
Route::view('/contact', 'contact');
Route::view('/test', 'test');

Route::view('/physics_lab', 'highlights/physics_lab');
Route::view('/chemistry_lab', 'highlights/chemistry_lab');

Route::get('pickfile', 'UploadFile@index');
Route::post('uploadfile', 'UploadFile@store');
Auth::routes(['register' => false]);
Route::get('home', 'HomeController@index');
Route::get('gallery', 'GalleryController@index');

//get data from database and show it to public

Route::get('/blog','NewsController@index');
Route::get('/blog-single');




//for admin panel and dashboard
Route::get('/news', 'NewsController@create');
Route::post('/news', 'NewsController@storeNews');


Route::get('/newstaff', 'StaffController@create');
Route::post('/newstaff', 'StaffController@addStaff');

Route::get('home', 'HomeController@index');

//user login and authentication
Route::namespace('Auth')->group(function () {
    //Login Routes
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    //Forgot Password Routes
    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
});
