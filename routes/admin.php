<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('users', 'UserController@index')->name('admin.users.index');
Route::post('users', 'UserController@store')->name('admin.users.store');
Route::get('users/create', 'UserController@create')->name('admin.users.create');

Route::get('/products', 'ProductController@index')->name('admin.products.index');
Route::get('/products/create', 'ProductController@create')->name('admin.products.create');
Route::post('/products', 'ProductController@store')->name('admin.products.store');
Route::post('/products/{id}', 'ProductController@update')->name('admin.products.update');
Route::get('/products/{id}/delete', 'ProductController@destroy')->name('admin.products.delete');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('admin.products.edit');

Route::get('/categories', 'CategoryController@index')->name('admin.categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('admin.categories.create');
Route::post('/categories/create', 'CategoryController@store')->name('admin.categories.store');
Route::get('/categories/{id}/delete', 'CategoryController@destroy')->name('admin.categories.delete');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('admin.categories.edit');
Route::post('/categories/{id}', 'CategoryController@update')->name('admin.categories.update');

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::post('/login', 'LoginController@login');

// Auth::routes();
