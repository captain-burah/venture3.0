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

Route::middleware('auth:api')->get('/exampapers', function (Request $request) {
    return $request->exampapers();    
});

Route::group(['middleware' => 'auth:api'], function() {
    Route::apiResources([
        'user'=> 'API\UserController',
        'exampapers'=> 'API\ExamPapers',

        
    ]);
    Route::get('profile', 'API\UserController@profile');
    Route::put('profile', 'API\UserController@updateProfile');
});