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

Route::redirect('/', '/en');

Route::get('/{locale}/contact', function ($locale) {
    App::setLocale($locale);
    return view('pages/contact');
});


Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    //dd(App::getLocale());
    return view('pages/index');
    //
});
