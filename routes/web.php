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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Frontend Controller
Route::get('/','Frontend\AccueilController@index')->name('/');
Route::get('/A-Propos','Frontend\AproposController@index')->name('a-propos');
Route::get('/Services','Frontend\ServiceController@index')->name('services');
Route::get('/Contacts','Frontend\ContactController@index')->name('contacts');
