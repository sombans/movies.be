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
Route::get('movies', ['as' => 'all-movies', 'uses' => 'MoviesController@index']);
Route::get('movies/{id}', 'MoviesController@show');
Route::post('movies', 'MoviesController@store');
Route::put('movies/{id}', 'MoviesController@update');
Route::delete('movies/{id}', 'MoviesController@delete');
