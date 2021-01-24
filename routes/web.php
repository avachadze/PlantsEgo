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

        Route::post('/plants/add', 'PlantsController@store');

  
    Route::post('/plants/add', '\App\Http\Controllers\PlantsController@store');
    Route::get('/systems','\App\Http\Controllers\SystemsController@index');
    Route::get('/systems/{id}/{plantid}/addsensor', '\App\Http\Controllers\SensorsController@showStoreForm');
    Route::get('/{id}/{plantid}', '\App\Http\Controllers\PlantsController@show');
    Route::get('/{id}/{plantid}/statistics', '\App\Http\Controllers\SensorsController@index');

    Route::get('/contact', function () {
        return view('pages/contact');
    });

    Auth::routes(['verify' => true]);
    Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');

});
