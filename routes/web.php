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

Route::post('/tarrpt', [RptController::class, 'store'])->name('tarrpt.store');


Route::middleware("auth")->group(function () {
    
    Route::get('/tarrpt', function(){
        
        $user=auth::user();
        if(!$user){
            return view('/login');
        }
        if($user->time=='D'){
            return view('/tarrpt_dev');
        }
        elseif($user->time=='S'){
            return view('/tarrpt');
        }
        else{
            return redirect ('/logout');
        }})->name("tarrpt.index"); //<---retorno depois do login que estava dando erro

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    });


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
