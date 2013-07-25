<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//Route::controller('/api', 'UrlController');

Route::resource('api/items', 'UrlController');
Route::resource('api/items/add', 'UrlController@store');
Route::resource('api/items/{id}', 'UrlController');

/*
Route::group(array('prefix' => 'api/items'), function()
{
    Route::get('/api/items/{id?}', function()
    {
    	Route::resource('url', 'UrlController');
    });

    Route::post('/api/items/add', function()
    {
    	Route::resource('url', 'UrlController');
    });
});
*/