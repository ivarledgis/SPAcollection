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
Route::post('/quote',[
	'uses' => 'QuoteController@postQuote',
	'middleware' => 'jwt.auth'
]);
Route::get('/quotes',[
	'uses' => 'QuoteController@getQuotes',
]);
Route::patch('/quote/{id}',[
	'uses' => 'QuoteController@putQuote',
	'middleware' => 'jwt.auth'

]);
Route::delete('/quote/{id}',[
	'uses' => 'QuoteController@deleteQuote',
	'middleware' => 'jwt.auth'

]);

Route::post('/signup',[
	'uses' => 'UserController@signup'
]);


Route::post('/signin',[
	'uses' => 'UserController@signin'
]);