<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordResetLinkController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/agendar', function () {
        return view('usuario.agendar');
    })->name('agendar');

    Route::get('/agenda', function () {
        return view('usuario.agenda');
    })->name('agenda');
});

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create']);
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store']);



require __DIR__.'/auth.php';
