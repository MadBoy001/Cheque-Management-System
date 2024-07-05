<?php
use App\Http\Controllers\SuperuserChequeController;
use App\Http\Controllers\SuperuserController;
use Illuminate\Support\Facades\Route;


// Superuser Routes
Route::get('dashboard', [SuperuserController::class, 'dashboard'])->name('dashboard');

// Route::get('add-cheque', [ChequeController::class, 'index'])->name('add-cheque');
Route::resource('cheque', SuperuserChequeController::class);
Route::get('expired-cheques', [SuperuserChequeController::class, 'expiredCheques'])->name('expired-cheques');
Route::get('expiring-cheques', [SuperuserChequeController::class, 'expiringCheques'])->name('expiring-cheques');
Route::get('returned-cheques', [SuperuserChequeController::class, 'returnedCheques'])->name('returned-cheques');
