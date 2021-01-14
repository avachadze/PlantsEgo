<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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






Route::group([
    'middleware' => 'setLocale'
], function () {

    Route::get('/Company', 'CompaniesController@index')->name('Company.index');
    Route::get('/Company/{company}', 'CompaniesController@show')->name('Company.show');
    Route::resource('Company', 'CompaniesController')->middleware('auth');
  
    Route::get('switchLang/{lang}', 'LangController@switchLang')->name('switchLang');

    Route::resource('Dashboard', 'DashboardController')->only('show')->middleware('auth');


    Route::get('/contact', function () {
        return view('pages/contact');
    });

    Route::get('/', function () {
        return view('pages/index');
    });
    Auth::routes(['verify' => true]);
    Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');
    });
