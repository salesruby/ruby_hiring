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

Route::group([
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::post('candidate/create', 'CandidateController@store');
Route::post('hire-a-candidate/create', 'JDController@store');

Route::put('candidate/update/{candidate}', 'CandidateController@update');
Route::get('candidate/{candidate}', 'CandidateController@show');
Route::get('candidates', 'CandidateController@index');

