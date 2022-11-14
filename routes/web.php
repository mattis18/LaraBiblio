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

Route::get('/', 'WelcomeController@index')->name('accueil');
Route::get('/ouvrages', 'WelcomeController@ouvrages')->name('ouvrages');
Route::get('/inscrits', 'WelcomeController@inscrits')->name('inscrits');
Route::get('/prets', 'WelcomeController@pret')->name('prets');
Route::get('/evenements', 'WelcomeController@evenements')->name('evenements');
Route::get('/historique', 'WelcomeController@historique')->name('historique');
Route::get('/commandes', 'WelcomeController@commandes')->name('commandes');