<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsersController;
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



Route::get('administrate', function () {
    return view('admin/administration');
});

Route::get('administrate',[UsersController::class,'index']);
Route::get('delete/{id}',[UsersController::class,'delete']);
Route::get('restore/{id}',[UsersController::class,'restore']);
Route::get('destroy/{id}',[UsersController::class,'destroy']);
Route::get('edit/{id}',[UsersController::class,'updateRole']);



Route::group([
    'middleware' => 'setLocale'
], function () {
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
