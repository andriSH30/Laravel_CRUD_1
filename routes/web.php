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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/{id}','PertanyaanController@edit');
Route::post('/pertanyaan/{id}/proses-edit','PertanyaanController@update');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::get('/pertanyaan/{id}/hapus','PertanyaanController@destroy');

Route::get('/lihat-jawaban/{id}','JawabanController@index');
Route::get('/jawaban/{id}','JawabanController@create');
Route::post('/jawaban/{id}','JawabanController@store');

