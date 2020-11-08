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

Route::get('/conditions', 'App\Http\Controllers\ConditionController@index')->name('condition.index');

Route::get('/', function () {
    return view('welcome');
});
