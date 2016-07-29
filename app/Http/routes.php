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
// Login
Route::get('login', 'LoginController@login');
// Index
Route::get('/',function(){
	return view('index');
});
// Reportes
Route::get('/pdf/{report}', 'ReportsController@invoice');
// Configuraciones
Route::get('/config/sanciones', 'SanctionsController@sanctions');
Route::get('/config/reports' , 'SanctionsController@report');
Route::get('config/all', 'AppController@index');
Route::post('new-career', 'AppController@addCareer');
Route::get('del-career/{id}', 'AppController@deleteCareer');
// Préstamos
Route::get('/loans', 'LoansController@index');
Route::get('/make', 'LoansController@makeLoan');
Route::get('/delivery', 'LoansController@delivery');
Route::get('select/{id}', 'LoansController@getArticles');

// User,Ariculos,Categorias
Route::resource('user','UserController');
Route::resource('article','ArticlesController');
Route::resource('category','CategoryController');