<?php

use App\Http\Controllers\CucikomplitController;
use App\Http\Controllers\CucisatuanController;
use App\Http\Controllers\DrycleanController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginpageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/Login', LoginpageController::class);
Route::resource('/homepage', HomepageController::class);
Route::resource('/Order', OrderController::class);
Route::resource('/cucisatuan', CucisatuanController::class);
Route::resource('/cucikomplit', CucikomplitController::class);
Route::resource('/dryclean', DrycleanController::class);
Route::resource('/transaksi', TransaksiController::class);

