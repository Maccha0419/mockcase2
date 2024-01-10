<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\ReservationController;

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

Route::post('/menu', [MenuController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::post('/thanks', [ThanksController::class, 'index']);
    Route::get('/', [ShopController::class, 'index']);
    Route::post('/detail/{id}', [ShopController::class, 'detail']);
    Route::get('/research', [ShopController::class, 'search']);
    Route::post('/reservation/complete', [ReservationController::class, 'reservation']);
});
