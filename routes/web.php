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

Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('physics_lab', 'highlights/physics_lab');
Route::view('chemistry_lab', 'highlights/chemistry_lab');
Route::view('header', 'components/header');
Route::view('dashboard', 'components/dashboard');
Route::view('userview', '/user');
Route::view('/test', 'test');
Route::view('/physics_lab', 'highlights/physics_lab');
Route::view('/chemistry_lab', 'highlights/chemistry_lab');

Route::get('pickfile', 'UploadFile@index');
Route::post('uploadfile', 'UploadFile@store');
Auth::routes(['register' => false]);
Route::get('gallery', 'GalleryController@index');

//get data from database and show it to public

Route::get('/blog', 'NewsController@index');
Route::get('/blog-single/{id}', 'NewsController@showNewsDetail');
Route::get('teacher', 'StaffController@index');

//delete from database
Route::get('/home/delete/news/{id}', 'NewsController@deleteNewsWithId');
Route::get('/home/delete/staff/{id}', 'StaffController@deleteStaffWithId');
Route::get('/home/delete/event/{id}', 'EventController@deleteEventWithId');

//updating into the database

//ajax response
//--------for images---------
Route::get('/getImages/{tag}', 'GalleryController@getImagesWithTag');

//-------for staffs---------
Route::get('/getStaffs/{tag}', 'StaffController@getStaffsWithTag');



//store and view news admin
Route::get('/news', 'NewsController@create');
Route::post('/news', 'NewsController@storeNews');
Route::get('/', 'EventController@index');

//store and view staff admin

Route::get('/newstaff', 'StaffController@create');
Route::post('/newstaff', 'StaffController@addStaff');

//store and view event admin
Route::get('/event', 'EventController@create');
Route::post('/event', 'EventController@storeEvent');

Route::get('home', 'HomeController@index');

//store routine and results
Route::post('/resultroutine', 'ResultRoutineController@storeFile');

//view and download results or routines
Route::get('/results', 'ResultRoutineController@showResultFiles');
Route::get('/routines', 'ResultRoutineController@showRoutineFiles');
Route::get('/download/resultroutine/{id}/{tag}', 'ResultRoutineController@downloadFile');

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
