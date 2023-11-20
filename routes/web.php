<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/index', "App\Http\Controllers\ProductController@viewHomepage");
Route::get('/', "App\Http\Controllers\ProductController@viewHomepage")->name('mainpage');
Route::get('/allproducts', "App\Http\Controllers\ProductController@viewProductpage")->name('allproducts.all');;
Route::get('/faq', "App\Http\Controllers\PageController@faq");

Route::middleware('custom-auth')->get('/product/edit/{id}', '\App\Http\Controllers\ProductController@editProduct')->name('products.edit');
Route::middleware('custom-auth')->get('/products', '\App\Http\Controllers\ProductController@viewAllProduct')->name('products.all');
Route::middleware('custom-auth')->post('/product/add', '\App\Http\Controllers\ProductController@addNewProduct')->name('products.add');
Route::middleware('custom-auth')->post('/product/delete', '\App\Http\Controllers\ProductController@deleteProduct')->name('products.delete');
Route::middleware('custom-auth')->post('/product/update/{id}', '\App\Http\Controllers\ProductController@updateProduct')->name('products.update');

Route::middleware('custom-auth')->post('/slide/add', '\App\Http\Controllers\ProductController@addNewSlide')->name('slides.add');
Route::middleware('custom-auth')->get('/slides', '\App\Http\Controllers\ProductController@viewAllSlide')->name('slides.all');
Route::middleware('custom-auth')->get('/slide/edit/{id}', '\App\Http\Controllers\ProductController@editSlide')->name('slides.edit');
Route::middleware('custom-auth')->post('/slide/delete', '\App\Http\Controllers\ProductController@deleteSlide')->name('slides.delete');
Route::middleware('custom-auth')->post('/slide/update/{id}', '\App\Http\Controllers\ProductController@updateSlide')->name('slides.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('custom/register', [App\Http\Controllers\AuthorizationController::class, 'register'])->name('auth.custom.register')->middleware('guest');
Route::post('custom/login', [App\Http\Controllers\AuthorizationController::class, 'login'])->name('auth.custom.login')->middleware('guest');
Route::post('custom/reset-password', [App\Http\Controllers\AuthorizationController::class, 'reset'])->name('auth.custom.reset')->middleware('guest');
Route::post('custom/logout', [App\Http\Controllers\AuthorizationController::class, 'logout'])->name('auth.custom.logout')->middleware('auth');
