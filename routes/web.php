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
//abort('500');

Route::get('/', function () {
    return view('index');
});

Route::resource('messages', 'MessageController');
Route::resource('crypto', 'CryptoController');


Auth::routes();

Route::get('/account', 'HomeController@index')->name('account.account');
Route::get('/account/crypto', 'CryptoController@index')->name('account.crypto.index');
Route::get('/account/crypto/create', 'CryptoController@create')->name('account.crypto.create');
