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
Route::get('/adlist', 'AdListController@show')->name('show_adlist');
Route::post('/adlist', 'AdListController@showFiltered')->name('show_adlist');
Route::get('/adlist/category', 'AdListController@showCategoryWise')->name('adlist.category');
Route::get('/adlist/city', 'AdListController@showCityWise')->name('adlist.city');
Route::get('/ad/{post_id}/{slug}', 'AdListController@showAdDetail')->name('adlist.detail');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/delete/{post_id}', 'HomeController@deleteAd')->name('home.delete.post');


Route::prefix('admin')->group(function () {
	Route::get('/', 'AdminController@index')->name('admin.index');
	Route::post('block', 'AdminController@blockUser')->name('admin.block.user');
	Route::post('unblock', 'AdminController@unblockUser')->name('admin.unblock.user');
	Route::get('posts', 'AdminController@getPostList')->name('admin.post');
	Route::post('post/block', 'AdminController@blockPost')->name('admin.post.block');

});

Route::get('/test', function(){
	putenv("APP_NAME=Street");
	return var_dump(env('APP_NAME'));
});
