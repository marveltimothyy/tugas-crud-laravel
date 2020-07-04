<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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
    return view('layouts.master');
});
Route::get('/item', 'ItemController@index');
Route::get('/item/create', 'ItemController@create');
Route::post('/item', 'ItemController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::post('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@Store');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@showEdit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@insertEdit');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');