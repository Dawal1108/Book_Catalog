<?php

use GuzzleHttp\Middleware;
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

// =============== INDEX ROUTE ==============
Route::get('/index', 'BookController@index')->Middleware('CustomAuth');

// =============== CREATE ROUTE ==============
Route::get('/create', 'BookController@create');
Route::post('/create', 'BookController@store');

// =============== EDIT ROUTE ==============
Route::get('/edit/{id}', 'BookController@edit');
Route::post('/edit/{id}', 'BookController@update');

// =============== DELETE ROUTE ==============
Route::get('/delete/{id}', 'BookController@delete');

// =============== RESTRICTION ROUTE ==============
Route::get('/noaccess', 'BookController@noAccess')->name('noaccess');

// Route::middleware(['restricted'])->group(function(){
//     // =============== CREATE ROUTE ==============
//     Route::get('/create', 'BookController@create');
//     Route::post('/create', 'BookController@store');
// });

Route::get('/create', 'BookController@create');
Route::post('/create', 'BookController@store');