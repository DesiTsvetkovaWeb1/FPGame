<?php

use App\Http\Controllers\Data_usersControler;
use App\Http\Controllers\Data_usersController;
/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
  Route::group ( [ 'middleware' => 'web' ], function () {
	Route::get('/', function(){
		if(Auth::user()){
			return redirect('index');
		}
		return view('welcome');
	});
  	
}); 

Route::group ( ['middleware' => 'web'], function () {
	Route::auth ();
	Route::get ( '/home', 'Data_usersController@index' );
	Route::get ( '/index', 'Data_usersController@index' );
	Route::get('/magazine', 'ItemsControler@index');
	Route::post('/magazine','Data_user_itemsController@addItems');
	
}); 

 
