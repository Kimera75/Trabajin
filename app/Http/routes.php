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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add_user', function () {
    return view('add_user');
});
Route::get('/add_cat', function () {
    return view('add_cat');
});
Route::get('/add_art', function () {
    return view('add_art');
});
Route::get('/entrega', function () {
    return view('prest_entre');
});
Route::get('/interno', function () {
    return view('prest_inte');
});
Route::get('/externo', function () {
    return view('prest_ext');
});
Route::get('/sanciones', function () {
    return view('sanciones');
});
