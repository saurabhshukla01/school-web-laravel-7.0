<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// All Admin Routes Here

Route::prefix('/admin')->namespace('Admin')->group(function(){
	// All the Admin Routes will be defined here :-
	Route::match(['get','post'],'/','AdminController@login');

	Route::group(['middleware' => ['admin']],function(){

		Route::get('dashboard','AdminController@dashboard');
		Route::get('logout','AdminController@logout');

	});	
});


// All Front Routes Here

Route::namespace('Front')->group(function(){

	Route::get('/','Indexcontroller@index');

});