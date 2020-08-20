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
Route::get('/admindash', 'PagesController@admindash')->name('admindash')->middleware('auth','roleCheck');

//map
Route::get('/map', 'PagesController@map');

//adminharvest
Route::get('/adminharvest', 'PagesController@adminharvest')->middleware('auth');

//data Entry
Route::get('/dataEntry', 'DataController@index')->middleware('auth');
Route::post('/dataEntry', 'DataController@store')->name('dataEntry')->middleware('auth');


//User admin
//Route::get('/user',"UserController@index")->name('user');

//userView Admin
//Route::get("/userView","viewController@index")->name('userView');

//device view
//Route::get("/device","deviceController@index")->name('device');


//user controller
Route::resource('adminuser', 'UserController')->middleware('auth','roleCheck','verified');
Route::resource('approval', 'ApprovalController')->middleware('auth'); 
Route::resource('registration', 'RegistrationController')->middleware('auth','roleCheck');; 
Route::resource('crop', 'CropController')->middleware('auth','roleCheck');
Route::resource('farmer', 'FarmerController')->middleware('auth','roleCheck');
Route::resource('land', 'LandController')->middleware('auth','roleCheck');

Route::get('/home', function () {
    return view('home');
});

Route::get('/land-registration', 'RegistrationController@show')->name('land-registration');

// Route::match(['get', 'post'], 'land-registration/{id}', function($id) {
//     return view('land-registration').$id;
// });

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

//route needed for authentication purposes
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('feedback','FeedbackController');
Route::get('feedback-view-public', 'FeedbackController@indexPublic');
Route::get('feedback', 'FeedbackController@createPublic');
Route::post('feedback', 'FeedbackController@storePublic');

Route::get('feedback-view', 'FeedbackController@indexRegistered')->middleware('auth');
Route::get('feedback-registered', 'FeedbackController@createRegistered')->middleware('auth');
Route::post('feedback-registered', 'FeedbackController@storeRegistered')->middleware('auth');

//Route::get('feedback-view-public', 'FeedbackController@show');
//Route::post('feedback-view-public', 'FeedbackController@destroyPublic', function($id){});

Route::delete('/feedback-view-public', 'FeedbackController@destroyPublic', function($id){});




//RAaaaaaaaaggggggggaaaaaaaaaaaavvvvvvvvvviiiiiiiiiiiiiiiii
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/land-records', function () {
    return view('land-records');
});

Route::get('/land-update', function () {
    return view('land-record-update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
