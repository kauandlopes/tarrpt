<?php

use App\Http\Controllers\RptController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware("guest")->group(function () {
    Route::get('/', function () {
        return view('auth/login');
    });
});

Route::middleware('auth')->group(function () {

    Route::get('/', [RptController::class, 'index'])->name('tarrpt.index');
   
    Route::post('/tarrpt', [RptController::class, 'store'])->name('tarrpt.store');

    // logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});



Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
