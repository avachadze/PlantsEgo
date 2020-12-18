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





Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setLocale'
], function(){

        Route::resource('Dashboard', 'DashboardController')->only('show')->middleware('auth');

        Route::get('/Company', 'CompaniesController@index')->name('Company.index');
        Route::get('/Company/{company}', 'CompaniesController@show')->middleware('can:view,company')->name('Company.show');
        Route::resource('Company', 'CompaniesController')->middleware('auth');


        Route::get('/demo', function (){
            $demoData= null;
            return view('dashboardDemo')->with('demoData', $demoData);
        });

        Route::get('/contact', function () {
            return view('pages/contact');
        });


        Route::get('/', function () {
            return view('pages/index');
        });

        Auth::routes();

});
Auth::routes(['verify' => true]);
  
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');
