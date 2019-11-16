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

//List Posts
Route::get('posts', 'GeneralChatController@index');

//List Single Post
Route::get('post/{id}', 'GeneralChatController@show');

//create New Post
Route::post('post', 'GeneralChatController@store');

//Update Post
Route::put('post', 'GeneralChatController@store');

//Delete Post
Route::delete('post/{id}', 'GeneralChatController@destroy');
