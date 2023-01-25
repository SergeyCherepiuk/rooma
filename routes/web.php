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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

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

// TODO: Form validation

Route::get('/contact', function () {
    return view('contact.index');
});