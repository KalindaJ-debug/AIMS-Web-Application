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

//index page
Route::get('/index', 'PagesController@index');

//contact us
Route::get('/contact', 'PagesController@contact');

//admindashboard
Route::get('/admindash', 'PagesController@admindash');

//map
Route::get('/map', 'PagesController@map');

//adminharvest
Route::get('/adminharvest', 'PagesController@adminharvest');


Route::resource('approval', 'ApprovalController'); 
Route::resource('registration', 'RegistrationController'); 
Route::resource('crop', 'CropController');

Route::get('/home', function () {
    return view('home');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/feedback-registered', function () {
    return view('feedback-registered');
});

Route::get('/land-registration', function () {
    return view('land-registration');
});

Route::get('/welcome', function(){
    return view('welcome');
});




