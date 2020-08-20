<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');


//contact us
Route::get('/contact', 'PagesController@contact');

//admindashboard
Route::get('/admindash', 'PagesController@admindash')->name('admindash')->middleware('roleCheck');

//map
Route::get('/map', 'PagesController@map');

//adminharvest
Route::get('/adminharvest', 'PagesController@adminharvest');


Route::resource('approval', 'ApprovalController'); 
Route::resource('registration', 'RegistrationController'); 
Route::resource('crop', 'CropController');
Route::resource('farmer', 'FarmerController');
Route::resource('land-records', 'LandController');

Route::get('/home', function () {
    return view('home');
});

Route::get('/land-record-update/{id}', function($id){ return view('land-record-update'); });

Route::get('/land-registration', 'RegistrationController@show')->name('land-registration');

Route::get('/land-form-success/{id}', function ($id) {
    return view('land-form-success')->with($id);
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/feedback-registered', function () {
    return view('feedback-registered');
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/feedback-management', function(){
    return view('feedback-management');
});

Route::post('adminFeedback', 'FeedbackController@adminAdd');

Route::get('adminFeedbackPage', 'FeedbackController@index');

Route::get('/feedback-view-public', function () {
    return view('feedback-view-public');
});

Route::get('/feedback-view', function () {
    return view('feedback-view');
});

//Routes for Data Visualization
Route::get('/paddySummary', function () {
    return view('paddySummary');
});

Route::get('/ofc', function () {
    return view('ofc');
});

Route::get('/vegetable', function () {
    return view('vegetable');
});

Route::get('/harvest', function () {
    return view('harvest');
});

Route::get('/croplist', function () {
    return view('croplist');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/land-update', function () {
    return view('land-record-update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
