<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;
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
Route::get('edit', function () {
    return view('admin/edit');
});
//User modifier 
Route::get('administrate', [UsersController::class, 'index']);
Route::get('deleteUser/{id}', [UsersController::class, 'delete']);
Route::get('restoreUser/{id}', [UsersController::class, 'restore']);
Route::get('destroyUser/{id}', [UsersController::class, 'destroy']);
Route::get('edit/{id}', [UsersController::class, 'updateRole']);
//Company Modifier
Route::post('createCompany', 'CompaniesController@create');
Route::put('updateCompany/{id}', 'CompaniesController@update');
Route::delete('deleteCompany/{id}', 'CompaniesController@delete');
Route::get('restoreCompany/{id}', 'CompaniesController@restore');
Route::get('destroyCompany/{id}', 'CompaniesController@destroy');

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
