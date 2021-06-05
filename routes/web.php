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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index0082');
});
Route::get('/dokter', function () {
    return view('dokter0082');
});
Route::get('/kamar', function () {
    return view('kamar0082');
});
Route::get('/pasien', function () {
    return view('pasien0082');
});
Route::get('/user', function () {
    return view('user0082');
});