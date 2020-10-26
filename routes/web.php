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
Route::get('/farmer_id', 'DataController@farmerid');
Route::get('/farmer_land', 'DataController@farmerLand');
// Route::get('/farmer_land2', 'DataController@farmerLand2');
Route::get('/farmer_address', 'DataController@farmerAddress');

Route::get('/harvest-data', 'HarvestController@index');
Route::get('/Entry-harvest-data/{id}', 'HarvestController@create');
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

Route::get('/DvCropCat', 'DVCropCategoryController@loadpage');
Route::post('/DvCropCat', 'dvcropcat\DVCropCategoryController@showGraph')->name('graph.load');
Route::get('/DvExternalFac', 'DvExternalFacController@index');
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

//Route::post('adminFeedback', 'FeedbackController@adminAdd');

//Route::get('adminFeedbackPage', 'FeedbackController@index');

// Route::get('/feedback-view-public', function () {
//     return view('feedback-view-public');
// });

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

// Feedback - Public
Route::resource('feedbackpublic', 'FeedbackPublicController');
Route::get('feedback-view-public', 'FeedbackPublicController@index')->middleware('auth');
Route::post('feedback-view-public', 'FeedbackPublicController@destroy_all')->middleware('auth');
Route::get('feedback-view-public-sort', 'FeedbackPublicController@sort')->middleware('auth');

// Feedback - Registered Users
Route::resource('feedbackregistered', 'FeedbackRegisteredController')->middleware('auth');
Route::get('feedback-view', 'FeedbackRegisteredController@index')->middleware('auth');
Route::post('feedback-view', 'FeedbackRegisteredController@destroy_all')->middleware('auth');
Route::get('feedback-view-sort', 'FeedbackRegisteredController@sort')->middleware('auth');

Route::get('noFeedback', function () {
    return view('noFeedback');
});

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
Route::get('exportFilteredLandPDF', 'LandReportController@exportFilteredLandRecords'); //filtered land

//pathway for form data
Route::post('/userReport','Reports\UsersReportController@getUsersPDF')->name('report.store');
Route::post('/cropsReport', 'Reports\CropsReportController@getCropsPDF')->name('reportcrop.store');
Route::post('/loadGraph','Graphs\CropCategoryController@showGraph')->name('graph.load');
Route::post('/graphLoad','Graphs\CropCategoryController@generateHarvestAndCultivation')->name('graphdata.load');
Route::post('/graphLoadVariety','Graphs\CropCategoryController@generateHarvestAndCultivationVariety')->name('graphdataVariety.load');
Route::post('/graphLoadcrop','Graphs\CropCategoryController@generateHarvestAndCultivationCrop')->name('graphdataCrop.load');


Route::get('/userRep', function () {

    $pdf = PDF::loadView('Reports.users');

});

Route::get('/farmerRep', function () {

    $pdf = PDF::loadView('Reports.farmers');

});

Route::get('/cropRep', function () {

    $pdf = PDF::loadView('Reports.crops');
    
});

// Approval Cultivation 

Route::get('approval', 'ApprovalController@index');
Route::get('harvestDescription/{id}', 'ApprovalController@harvestDescription');
Route::get('cultivationDescription/{id}', 'ApprovalController@cultivationDescription');
Route::post('harvest-status', 'ApprovalController@updateHarvest');
Route::post('cultivation-status', 'ApprovalController@updateCultivation');
Route::post('harestDetailsUpdate', 'ApprovalController@store');

//All Crop Information - Public
Route::get('cropInformation', 'PublicController@allMainCrops');
Route::get('exportCropList', 'PublicController@exportCropList');
Route::get('publicMainCrops', 'PublicController@mainCrops');
Route::get('exportMainCropsReport/{id}', 'PublicController@exportReport');
//Data Visualization - Crop Variety

Route::post('crop_variety_dv', 'DVCropVarietyController@generateChart');
Route::get('crop_variety_chart', 'DVCropVarietyController@index');


//Data Visualization - Crop Category
Route::get('/crop-cat-harvest' , 'Graphs\CropCategoryController@loadPage');

//Data Visualization - Crop Category
Route::get('/crop-cat-district' , 'Graphs\CropCategoryController@loadHarvestAndCultivation');
Route::get('/crop-cat-district-variety' , 'Graphs\CropCategoryController@loadHarvestAndCultivationVariety');
Route::get('/crop-cat-district-crop' , 'Graphs\CropCategoryController@loadHarvestAndCultivationcrop');
// Crop Visualization

Route::get('cropVisualization', 'CropVisualizationController@index');
Route::get('cropHarvestSelect/{id}', 'CropVisualizationController@cropHarvestSelect');
Route::post('harestVisulisationDetailsUpdate', 'CropVisualizationController@updateHarvest');
Route::get('cropCultivationSelect/{id}', 'CropVisualizationController@cropCultivationSelect');
Route::get('harvestPdfConvert/{id}', 'CropVisualizationController@harvestPdfConvert');
Route::post('cultivationVisulisationDetailsUpdate', 'CropVisualizationController@updateCultivation');

//Search Results
Route::get('searched', 'HomeController@search');

//mobile API routes

Route::post('/getLand','Mobile\UserController@getAllLand');  
Route::post('/getRegisteredUsers','Mobile\UserController@getAllRegisteredUsers');
Route::post('/getFarmers','Mobile\UserController@getAllFarmers'); 
Route::post('/addCulti','Mobile\UserController@addCultivationData');     
Route::post('cultivationPdfConvert/{id}', 'CropVisualizationController@cultivationPdfConvert');
