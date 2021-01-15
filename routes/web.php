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

    Route::group([
        'middleware' => 'verified'
    ], function () {

        Route::group(
            ['middleware' => 'auth'],
            function (){

                Route::resource('Dashboard', 'DashboardController')->only('show');
                Route::resource('Company', 'CompaniesController');
            });

        Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');
    });

    Auth::routes(['verify' => true]);

    Route::get('switchLang/{lang}', 'LangController')->name('switchLang');

    Route::view('/contact', 'pages/contact');

    Route::view('/', 'pages/index');
});
