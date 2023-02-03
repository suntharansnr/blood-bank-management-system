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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth'],'prefix' => 'admin'], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('donors','DonorController');
    Route::resource('hospitals','HospitalController');
    Route::resource('requests','RequestController');
    Route::resource('donations','DonationController');
    Route::post('change_bloodstatus/{id}','DonationController@change_bloodstatus');
    Route::resource('profiles','ProfileController');
    Route::resource('withdrawals','ProfileController');
    Route::resource('stocks','StockController');
    Route::get('/home', 'AdminController@dashboard')->name('dashboard');
});

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/help', 'PagesController@help')->name('help');
Route::get('/donors', 'PagesController@donors')->name('donors');
Route::get('/contact', 'PagesController@contact')->name('contact');
