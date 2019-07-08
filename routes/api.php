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

Route::group(['namespace' => 'Api'], function () {
    Route::get('signup-data', 'UserController@getSignupPageDate');

    Route::post('register', "UserController@register");
    Route::post('login', "UserController@login");

    Route::get('/materials', 'MaterialController@index');
    Route::get('/questions', 'QuestionController@index');

    Route::group(['middleware' => 'auth:api'], function () {
         Route::get('/profile', "UserController@profile");
         Route::post('/ask', 'QuestionController@ask');
    });
    
});
