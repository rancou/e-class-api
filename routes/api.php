<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    'namespace' => 'Api',
], function () {
    // Route::post('/register', 'Auth\RegisterController@store');
    // Route::post('/login', 'Auth\LoginController@login');
    Route::post('/reset-password', 'Auth\ResetPasswordController')->name('reset_password');

    // Route::group(['middleware' => ['auth:api']], function () {
    //     Route::post('/logout', 'Auth\LoginController@logout');
    //     Route::post('/logout-all', 'Auth\LoginController@logoutAll');
    // });
});
