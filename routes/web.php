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


Route::get('/staffs', 'App\Http\Controllers\StaffController@index')->name('staff.list')->middleware('auth');
Route::get('/staff/new', 'App\Http\Controllers\StaffController@new')->name('staff.new')->middleware('auth');
Route::post('/staff/store', 'App\Http\Controllers\StaffController@store')->name('staff.store')->middleware('auth');
Route::get('/staff/{id}', 'App\Http\Controllers\StaffController@show')->name('staff.show')->middleware('auth');

Route::get('/conditions', 'App\Http\Controllers\ConditionController@index')->name('condition.list')->middleware('auth');
Route::get('/condition/menu', 'App\Http\Controllers\ConditionController@menu')->name('condition.menu')->middleware('auth');
Route::get('/', 'App\Http\Controllers\ConditionController@new')->name('condition.new')->middleware('auth');
Route::post('/condition/store', 'App\Http\Controllers\ConditionController@store')->name('condition.store')->middleware('auth');
Route::get('/condition/{date}', 'App\Http\Controllers\ConditionController@show')->name('condition.show')->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
