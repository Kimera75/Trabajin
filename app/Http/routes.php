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
Route::get('/',function(){
	return view('index');
});
//Sanciones
Route::get('/config/sanciones', 'SanctionsController@sanctions');
Route::get('/config/all', 'SanctionsController@config');
Route::get('/config/reports' , 'SanctionsController@report');
// Préstamos
Route::get('/loans', 'LoansController@index');
Route::get('/make', 'LoansController@makeLoan');
Route::get('/delivery', 'LoansController@delivery');

//User,Ariculos,Categorias
Route::resource('user','UserController');
Route::resource('article','ArticlesController');
Route::resource('category','CategoryController');