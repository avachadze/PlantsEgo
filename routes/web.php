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
        Route::post('/message/create', 'ContactMessagesController@store')->name('storeContactMessage');
        Route::get('/message', 'ContactMessagesController@index')->name('messages.list');
        Route::get('/message/send/{id}', 'ContactMessagesController@mailResponse')->name('contactResponseSend');
        Route::get('/message/{id}', 'ContactMessagesController@show')->name('messages.show');
        Route::delete('/message/{id}', 'ContactMessagesController@destroy')->name('destroyMessage');

        Route::post('/plants/add', '\App\Http\Controllers\PlantsController@store');
        Route::post('/systems/add/corporative','\App\Http\Controllers\SystemsController@store');
        Route::post('/systems/add/personal','\App\Http\Controllers\SystemsController@store');
        Route::get('/systems','\App\Http\Controllers\SystemsController@index');
        Route::view('/systems/add', '/pages/addSystem');
        Route::get('/systems/{id}', '\App\Http\Controllers\PlantsController@index');
        Route::get('/systems/{id}/addplant', '\App\Http\Controllers\PlantsController@showStoreForm');
        Route::get('/systems/{id}/{plantid}/addsensor', '\App\Http\Controllers\SensorsController@showStoreForm');
        Route::get('/systems/{id}/{plantid}', '\App\Http\Controllers\PlantsController@show');
        Route::get('/systems/{id}/{plantid}/statistics', '\App\Http\Controllers\SensorsController@index');
        Route::post('/system/sensors/add', '\App\Http\Controllers\SensorsController@store');

        Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');

});
    Auth::routes(['verify' => true]);

    Route::get('switchLang/{lang}', 'LangController')->name('switchLang');

    Route::view('/contact', 'pages/contact');

    Route::view('/', 'pages/index');
});
