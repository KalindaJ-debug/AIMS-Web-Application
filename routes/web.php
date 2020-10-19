<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Reports;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\User;
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
//Route::get('/dataEntry', 'DataController@index')->middleware('auth');
//Route::post('/dataEntry', 'DataController@store')->name('dataEntry')->middleware('auth');
Route::get('/crop-data', 'DataController@index');
Route::get('/Entry-crop-data', 'DataController@create');
Route::get('/crop-data/{id}', 'DataController@show');
Route::get('/crop-data/{id}/delete', 'DataController@destroy');
Route::resource('crop-data', 'DataController');

Route::get('/harvest-data', 'HarvestController@index');
Route::get('/Entry-harvest-data', 'HarvestController@create');
Route::get('/harvest-data/{id}', 'HarvestController@show');
Route::resource('harvest-data', 'HarvestController');

Route::get('/external-data', 'ExternalFactors@index');
Route::get('/Entry-external-data', 'ExternalFactorsController@create');
Route::get('/external-data/{id}', 'ExternalFactorsController@show');
Route::resource('external-data', 'ExternalFactorsController');

Route::post('/cropDetails', 'DataController@store')->name('cropDetails');

Route::post('/harvestDetails', 'HarvestController@store')->name('harvestDetails');

Route::post('/externalFactors', 'ExternalFactorsController@store')->name('externalFactors');

Route::get('/getPDF', 'PDFcontroller@getPDF');

Route::get('/Cultivation-list', 'DataController@list');
//User admin
//Route::get('/user',"UserController@index")->name('user');

//userView Admin
//Route::get("/userView","viewController@index")->name('userView');

//device view
//Route::get("/device","deviceController@index")->name('device');


//user controller
Route::resource('adminuser', 'UserController')->middleware('auth','roleCheck','verified');
Route::resource('registration', 'RegistrationController')->middleware('auth','roleCheck');
Route::resource('crop', 'CropController')->middleware('auth','roleCheck');
Route::resource('farmer', 'FarmerController')->middleware('auth','roleCheck');
Route::resource('land-records', 'LandController')->middleware('auth','roleCheck');

Route::get('/home', function () {
    return view('home');
});

Route::get('/land-records-empty/{id}', function ($id) {
    return view('land-records-empty'. $id);
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/land-update', function () {
    return view('land-record-update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Device Management 

Route::get('device', 'DeviceController@index');
Route::post('device-user-add', 'DeviceController@addUserDevice');
Route::post('device-user-edit', 'DeviceController@editUserDevice');
Route::post('device-delete', 'DeviceController@deleteDevice');
Route::post('device-farmer-add', 'DeviceController@addFarmerDevice');
Route::post('device-farmer-edit', 'DeviceController@editFarmerDevice');
Route::post('device-farmerManagement-add', 'DeviceController@addFarmerManagement');
Route::post('device-farmerManagement-edit', 'DeviceController@editFarmerManagement');
Route::post('device-userManagement-add', 'DeviceController@addUserManagement');
Route::post('device-userManagement-edit', 'DeviceController@editUserManagement');

//Report generation - Land Module
Route::get('exportAllLandRecordsPDF/{id}', 'LandReportController@exportAllLandRecordsPDF');
Route::get('exportLandPDF/{id}','LandReportController@exportLandRecordPDF');
Route::get('/userReport', 'Reports\UsersReportController@getUsersPDF');
Route::get('/sendUserEmail', 'Reports\UsersReportController@sendUserEmailPDF');
Route::get('/farmersReport', 'Reports\FarmersReportController@getFarmersPDF');
Route::get('/sendFarmersReport', 'Reports\FarmersReportController@sendFarmerEmailPDF');
Route::get('/cropsReport', 'Reports\CropsReportController@getCropsPDF');
Route::get('/sendCropsReport', 'Reports\CropsReportController@sendCropsEmailPDF');
Route::get('exportFilteredLandPDF', 'LandReportController@exportFilteredLandRecords'); //filtered land

Route::post('/userReport','Reports\UsersReportController@getUsersPDF')->name('report.store');

Route::get('/userRep', function () {

    $pdf = PDF::loadView('Reports.users');

});

Route::get('/farmerRep', function () {

    $pdf = PDF::loadView('Reports.farmers');

});

Route::get('/cropRep', function () {

    $pdf = PDF::loadView('Reports.crops');
    
});

//Approval Cultivation 

Route::get('approval', 'ApprovalController@index');
Route::get('harvestDescription/{id}', 'ApprovalController@harvestDescription');
Route::get('cultivationDescription/{id}', 'ApprovalController@cultivationDescription');
Route::post('harvest-status', 'ApprovalController@updateHarvest');
Route::post('cultivation-status', 'ApprovalController@updateCultivation');
Route::post('harestDetailsUpdate', 'ApprovalController@store');

//All Crop Information - Public
Route::get('cropInformation', 'PublicController@allMainCrops');
Route::get('publicMainCrops', 'PublicController@mainCrops');
