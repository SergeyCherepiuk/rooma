<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{url}', function () {
    return view('home.index');
})->where('url', '(home)?');

Route::get('/about', function () {
    return view('about.index');
});

// Route::get('/reservation', function () {
//     return view('reservation.index');
// })->middleware(['auth', 'verified'])->name('reservation');

// TODO!
Route::middleware('auth')->group(function () {
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/user/{id}/reservations', [ReservationController::class, 'show'])->name('reservation.show');
    Route::post('/user/{id}/reservation', [ReservationController::class, 'store'])->name('reservation.store'); // or create
    Route::patch('/user/{id}/reservation', [ReservationController::class, 'update'])->name('reservation.update');
    Route::delete('/user/{id}/reservation', [ReservationController::class, 'destroy'])->name('reservation.destroy');
});

Route::get('/contact', function () {
    return view('contact.index');
});

// Route::resource('/reservation', ReservationController::class);