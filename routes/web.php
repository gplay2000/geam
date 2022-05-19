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
Route::get('/', 'BusquedaController@index')->name('busquedas');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::resource('instituciones',App\Http\Controllers\InstitucionController::class)->middleware('auth');
Route::resource('reportes',App\Http\Controllers\ReporteController::class)->middleware('auth');
Route::resource('generales',App\Http\Controllers\GeneralController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
