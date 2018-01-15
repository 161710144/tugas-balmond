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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lusa', function () {
    return view('layouts.mexus');
});
Route::get('/lusaa', function () {
    return view('layouts.about');
});
Route::get('/lusaaa', function () {
    return view('layouts.info');
});

Route::get('barang','barangcontroller@barang');
Route::get('barang2','barangcontroller@abarang');