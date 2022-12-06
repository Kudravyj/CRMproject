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

Route::get('/mapbox', 'App\Http\Controllers\map\MapBoxController@index');
Route::get('/create','App\Http\Controllers\OrderController@view');
Route::post('/create', 'App\Http\Controllers\OrderController@create');
Route::get('/', 'App\Http\Controllers\HomeController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
