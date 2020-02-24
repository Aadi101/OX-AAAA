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

Route::post('sign-up','Auth\AuthController@register');
Route::post('Login','Auth\AuthController@login');


Route::post('/blogpost/create','BlogPostController@store');
Route::get('/blogpost/edit/{id}','BlogPostController@edit');
Route::post('/blogpost/update/{id}','BlogPostController@update');
Route::delete('/blogpost/delete/{id}','BlogPostController@delete');
Route::get('/blogpostview','BlogPostController@index');



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



