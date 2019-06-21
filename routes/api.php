
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Api\ApiStudentController@register');
Route::post('login', 'Api\ApiStudentController@login');
Route::post('student', 'Api\ApiStudentController@insertDataStudent');
Route::post('general', 'Api\ApiStudentController@insertDataGeneral');
Route::post('pay', 'Api\ApiStudentController@pay');

Route::get('checkpayment/{participant_id}', 'Api\ApiStudentController@checkPayment');
Route::get('studentprofile/{participant_id}', 'Api\UtilsController@studentProfile');
Route::get('generalprofile/{participant_id}', 'Api\UtilsController@generalProfile');
Route::get('faculties', 'Api\UtilsController@faculties');
Route::get('programs', 'Api\UtilsController@programs');
Route::get('banks', 'Api\UtilsController@banks');
