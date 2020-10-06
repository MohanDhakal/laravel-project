<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
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
Route::view('physics_lab', 'highlights/physics_lab');
Route::view('chemistry_lab', 'highlights/chemistry_lab');
Route::view('header', 'components/header');
Route::view('dashboard', 'components/dashboard');
Route::view('userview', '/user');
Route::view('/test', 'test');
Route::view('/physics_lab', 'highlights/physics_lab');
Route::view('/chemistry_lab', 'highlights/chemistry_lab');
Route::view('/computer_lab', 'highlights/computer_lab');
Route::view('/electronics_lab', 'highlights/electornics_lab');
Route::view('/others_smc', 'others_smc');
Route::view('/others_tpc', 'others_tpc');
Route::view('/apply', 'apply');
Route::view('/video_gallery', 'video_gallery');
Route::view('/students', 'students');

//send message in contact form
Route::get('/contact', 'ContactFormController@index');
Route::post('/sendMessage', 'ContactFormController@create');




Route::get('pickfile', 'UploadFile@index');
Route::post('uploadfile', 'UploadFile@store');
Auth::routes(['register' => false]);
Route::get('home', 'HomeController@index');
Route::get('photo_gallery', 'GalleryController@index');

//get data from database and show it to public

Route::get('/blog', 'NewsController@index');
Route::get('/blog-single/{id}', 'NewsController@showNewsDetail');
Route::get('notice/download/{fileName}', 'NewsController@downloadFile');



Route::get('teacher', 'StaffController@index');

//delete from database
Route::get('/home/delete/news/{id}', 'NewsController@deleteNewsWithId');
Route::get('/home/delete/staff/{id}', 'StaffController@deleteStaffWithId');
Route::get('/home/delete/event/{id}', 'EventController@deleteEventWithId');

//content editing routes for admin

Route::post('/event/update', 'EventController@updateEvent');
Route::post('/staff/update', 'StaffController@updateStaff');


//ajax response

//--------for images---------
Route::get('/getImages/', 'GalleryController@getImagesWithTag');

//-------for staffs---------
Route::get('/getStaffs/', 'StaffController@getStaffsWithTag');

Route::get('/getStudents/', 'StudentController@getStudentsOfClass');




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
