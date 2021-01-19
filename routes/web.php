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
        Route::get('/message/{id}', 'ContactMessagesController@show')->name('messages.show');
        Route::delete('/message/{id}', 'ContactMessagesController@destroy')->name('destroyMessage');

        Route::get('/systems', function ()
        {
            Route::get('/','SystemsController@index');
            Route::post('/add/corporative','SystemsController@store');
            Route::post('/add/personal','SystemsController@store');
            Route::view('/add', '/pages/addSystem');
            Route::get('/{id}', 'PlantsController@index');
            Route::get('/{id}/addplant', 'PlantsController@showStoreForm');
            Route::get('/{id}/addsensor', 'SensorsController@showStoreForm');
            Route::get('/{id}/{plantid}', 'PlantsController@show');
            Route::post('/sensors/add', 'SensorsController@store');
        });


        Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');
    });

    Auth::routes(['verify' => true]);

    Route::get('switchLang/{lang}', 'LangController')->name('switchLang');

    Route::view('/contact', 'pages/contact');

    Route::view('/', 'pages/index');
});
