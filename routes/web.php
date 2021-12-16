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

Route::get('/','myController@index');
// 127.0.0.1:8000

Route::get('/add', function () {
    return view('add');
});
// 127.0.0.1:8000/add

Route::get('/insert','myController@store')->name('insertData');
// 127.0.0.1:8000/add + Request

Route::get('/edit/{id}','myController@update')->name('editData');
// // 127.0.0.1:8000/edit + parameter:id

Route::get('/delete/{id}','myController@destroy')->name('delete');
// // 127.0.0.1:8000/delete + parameter:id

Route::get('/{id}','myController@show')->name('show');
// 127.0.0.1:8000/parameter:id
