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

Route::get('/staffs', 'App\Http\Controllers\StaffController@index')->name('staff.list');
Route::get('/staff/{id}', 'App\Http\Controllers\StaffController@show')->name('staff.show');

Route::get('/conditions', 'App\Http\Controllers\ConditionController@index')->name('condition.list');
Route::get('/condition/menu', 'App\Http\Controllers\ConditionController@menu')->name('condition.menu');
Route::get('/condition/new', 'App\Http\Controllers\ConditionController@new')->name('condition.new');
Route::post('/condition/store', 'App\Http\Controllers\ConditionController@store')->name('condition.store');
Route::get('/condition/{date}', 'App\Http\Controllers\ConditionController@show')->name('condition.show');

Route::get('/', function () {
    return view('welcome');
});
