<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::Post('/login-user', 'UserController@loginUser');
Route::get('job/job-detail/{id}', 'JobController@jobDetail');
Route::group(['middleware' => ['auth.jwt']], function () {
    Route::get('/get-user-infomation', 'UserController@getUserInfo');
    Route::prefix('job')->group(function () {
        Route::get('/list-job', 'JobController@listJob');
        Route::post('/create-job', 'JobController@createJob');
        Route::put('/update-job/{id}', 'JobController@updateJob');
        Route::delete('/delete-job/{id}', 'JobController@deleteJob');
    });
});
