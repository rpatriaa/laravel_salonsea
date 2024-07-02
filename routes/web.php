<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;

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
    return view('welcome');
});

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/reservation', function () {
    return view('reservasi');
})->name('reservation.form');

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');