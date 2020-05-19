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

// CRUD
Route::resource('kontak','Kontak'); 

Route::get('/', function () {
    return view('index');
});

Route::get('/halaman-kedua', function () {
    return view('halamandua');
});

// RESTful API Laravel
// Get All Data
Route::get('/mainkontak','ControllerKontak@index');
// Data Detail 
Route::get('/mainkontak/{id}','ControllerKontak@show');
// Save New Data
Route::post('/mainkontak/store','ControllerKontak@store');
// Update Data
Route::post('/mainkontak/update/{id}','ControllerKontak@update');
// Delete Data
Route::post('/mainkontak/delete/{id}','ControllerKontak@destroy');
