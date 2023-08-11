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

//Route::get('/', 'App\Http\Controllers\Testcontroller@index');

//Route::get('product/{uid}','App\Http\Controllers\Testcontroller@product');

// Route::get('/','App\Http\Controllers\Pagescontroller@index');
// Route::get('/about','App\Http\Controllers\Pagescontroller@about');
// Route::get('/contact','App\Http\Controllers\Pagescontroller@contact');



