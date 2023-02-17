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

Route::get('/',[\App\Http\Controllers\CovidController::class ,'index'])->name('index');
Route::post('/europa',[\App\Http\Controllers\CovidController::class ,'europa'])->name('europa');
Route::post('/vilagker',[\App\Http\Controllers\CovidController::class ,'vilagker'])->name('vilagker');
Route::get('/adatok',[\App\Http\Controllers\CovidController::class ,'adatok'])->name('adatok');
