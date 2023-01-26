<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
require __DIR__.'/auth.php';

Route::get('/{url}', function () {
    return view('home.index');
})->where('url', '(home)?');

Route::get('/about', function () {
    return view('about.index');
});

Route::middleware('auth')->group(function () {
    Route::resource('/reservation', ReservationController::class);
});

Route::get('/contact', function () {
    return view('contact.index');
});