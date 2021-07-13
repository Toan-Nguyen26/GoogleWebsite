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

Route::get('index', function () {
    return view('index');
})->name('index');


//Route::post('return',['as' => 'return','uses' => 'App\Http\Controllers\myController@Return']);

Route::post('check',['as' => 'check','uses' => 'App\Http\Controllers\myController@Check']);

Route::get('detail',['as' => 'detail','uses' => 'App\Http\Controllers\detail@Detail']);

Route::get('main', function () {
    return view('main');
})->name('main');