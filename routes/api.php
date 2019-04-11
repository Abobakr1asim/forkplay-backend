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

// php artisan jwt:secret ---> Keep this with you...
// php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
