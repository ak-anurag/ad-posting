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

Route::get('/', 'IndexController@index')->name('index');

Route::get('post', 'PostAdController@showPage')->name('postad');
Route::post('post', 'PostAdController@store');
Route::get('/post-image', 'PostAdController@showImagePage')->name('post.image');
Route::post('/post-image', 'PostAdController@storeImage');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');