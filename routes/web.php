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

Route::get('/', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/', 'PertanyaanController@store');
Route::get('jawaban/create/{pertanyaan_id}', 'JawabanController@create');
Route::post('jawaban/create/{pertanyaan_id}', 'JawabanController@store');
Route::get('jawaban/view/{pertanyaan_id}', 'JawabanController@view');


