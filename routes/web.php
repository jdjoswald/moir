<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformeController;
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


Route::resource('telegrama', App\Http\Controllers\TelegramaController::class);


Route::resource('informe', App\Http\Controllers\InformeController::class);
Route::post('/generateinforme', [InformeController::class,'generar']);
Route::get('/all', [InformeController::class,'all']);
Route::get('/', [HomeController::class,'home']);

