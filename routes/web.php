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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')
    // ->namespace('Admin') //Indica la cartella che si riferisce al controller che gestisce il database e le crud
    // ->name('admin.') //per aggiungere admin all'inizio di ogni nome della rotta
    // ->prefix('admin')// fa riferimneto all'URL, prima del nome cartella si inserisce il nome del prefix
    ->group (function () {
        Route::resource('post','PostController');
});