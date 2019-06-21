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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/about', 'FrontPageController@about');
Route::get('/contact', 'FrontPageController@contact');

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/participants', 'ParticipantController');
Route::resource('/generals', 'GeneralController');
Route::resource('/students', 'StudentController');
Route::resource('/payments', 'PaymentController');
Route::resource('/grades', 'GradeController');
Route::resource('/announcements', 'AnnouncementController');
Route::resource('/informations', 'InformationController');

Route::get('/settings', 'SettingController@index');
Route::get('/notifications', 'NotificationController@index');
Route::post('/notifications', 'NotificationController@store');
Route::get('/vision', 'VisionController@annotateImage');
