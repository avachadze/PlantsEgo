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
    Route::get('switchLang/{lang}', 'LangController@switchLang')->name('switchLang');

    Route::resource('Dashboard', 'DashboardController')->only('show')->middleware('auth');


    Route::post('/plants/add', '\App\Http\Controllers\PlantsController@store');

    Route::get('/plants/add', function(){
        return view('pages/addPlant');
    });
    Route::get('/systems/sensors/add', function(){
        return view('pages/addSensor');
    });
    Route::post('/system/sensors/add', '\App\Http\Controllers\SensorsController@store');

    Route::get('/contact', function () {
        return view('pages/contact');
    });

    Route::get('/', function () {
        return view('pages/index');
    });
    Auth::routes(['verify' => true]);
    Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');

    });
