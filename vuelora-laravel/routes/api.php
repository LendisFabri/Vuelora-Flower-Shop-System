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

Route::prefix('v1')->group(function(){
	
	Route::post('login', 'AuthController@login');
	Route::post('register', 'AuthController@register');

	Route::get('categories/random{count}', 'CategoryController@random');
	Route::get('flowers/top/{count}', 'FlowerController@top');

	Route::middleware(['auth:api'])->group(function () {
    	Route::post('logout', 'AuthController@logout');
    });
});
