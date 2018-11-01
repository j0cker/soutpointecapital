<?php

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

Route::get('/', 'Index@index');
Route::get('/people', 'Index@people');
Route::get('/portfolio', 'Index@portfolio');

/* API */

Route::post('/api/postMessage', 'API@postMessage');

/* Mails */

Route::get('/mailsLauncher', 'MailsLauncher@mailsLauncher');
