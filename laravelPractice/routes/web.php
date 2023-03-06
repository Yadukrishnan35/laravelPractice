<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/','App\Http\Controllers\frontEndController@homePage')->name('home');
Route::get('/user-create','App\Http\Controllers\frontEndController@createUser')->name('create.user');
Route::post('/save-user','App\Http\Controllers\frontEndController@saveUser')->name('save.user');
Route::get('/user-edit{user_id}','App\Http\Controllers\frontEndController@editUser')->name('edit.user');
Route::post('/user-update','App\Http\Controllers\frontEndController@updateUser')->name('update.user');
Route::get('/user-edit{user_id}','App\Http\Controllers\frontEndController@editUser')->name('edit.user');
Route::get('/address-create/{user_id}','App\Http\Controllers\addressController@createAddress')->name('create.address');
Route::post('/save-address/{user_id}','App\Http\Controllers\addressController@saveAddress')->name('save.address');
Route::get('/user-fulldetail/{user_id}','App\Http\Controllers\frontEndController@rawExpressions')->name('user.userFullDetail');

Route::get('/about-us','App\Http\Controllers\frontEndController@aboutUs')->name('about');
Route::get('/contact-us','App\Http\Controllers\frontEndController@contactUs')->name('contact');
Route::get('/array','App\Http\Controllers\frontEndController@arrayOperations')->name('array');