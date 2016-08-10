<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@index');
Route::get('/login', 'PageController@login');
Route::get('/hubungi', 'PageController@hubungi');
Route::get('/respon', 'PageController@respon');


// Route admin
Route::group( [ 'prefix' => 'admin' ], function() {

	// Route bagi folder admin
	Route::get('/', 'PageController@admin');
	Route::get('/dashboard', 'PageController@dashboard');

	// Route berkaitan users
	// Akan paparkan senarai users
	Route::get('/users', 'UserController@index');

	// Akan paparkan borang tambah user
	Route::get('/users/tambah', 'UserController@create');

	// akan paparkan detail / profile user
	Route::get('/users/{id}', 'UserController@show');

	// Pengurusan tickets
	Route::get('/tickets', 'TicketController@index');
	Route::get('/tickets/{id}', 'TicketController@show');



	Route::get('/logout', function() {

		return redirect('/login');
	});

} ); // Tutup kepada route group
