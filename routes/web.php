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
    return view('home');
});
Route::get('ciao1', function () {
    return view('ciao1');
});
Route::get('ciao2', function () {
    return view('ciao2');
});
Route::get('ciao3', function () {
    return view('ciao3');
});
