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

Route::get('/', 'App\Http\Controllers\CategoriesController@category');
Route::get('/categories/{id}', 'App\Http\Controllers\CategoriesController@index');
Route::get('/{id}', 'App\Http\Controllers\CategoriesController@view');
Route::get('/books/{id}', 'App\Http\Controllers\CategoriesController@view2');
Route::get('/result/{id}', 'App\Http\Controllers\CategoriesController@result_book');
Route::post('/result/{id}', 'App\Http\Controllers\CategoriesController@update');
Route::get('/kakuninn/{id}', 'App\Http\Controllers\CategoriesController@kakuninn');
Route::get('/update/{id?}', 'App\Http\Controllers\CategoriesController@update');
Route::Post('/update/{id}', 'App\Http\Controllers\CategoriesController@update');
Route::Post('/kakuninn/{id}', 'App\Http\Controllers\CategoriesController@kakuninn');
Route::Post('/logins/{id}', 'App\Http\Controllers\CategoriesController@kakuninn');


