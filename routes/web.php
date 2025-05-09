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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/hookah-tobacco/{slug}', 'App\Http\Controllers\ProductController@index')->name('home');

Route::get('/hookah-tobacco/{slug}/{slug_child}', 'App\Http\Controllers\ProductController@index')->name('product');

Route::get('{slug}', 'App\Http\Controllers\ProductController@getProduct')->name('product.view');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
