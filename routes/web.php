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
    return view('pages/index');
})->name('index');

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::resource('Dashboard', 'DashboardController')->only('show')->middleware('auth');

Route::get('/redirect', 'DashboardController@redirect')->name('usrDashboard');

Auth::routes();

Route::get('/demo', function (){
    $demoData= null;
    return view('dashboardDemo')->with('demoData', $demoData);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
