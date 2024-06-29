<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChequeController;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// Route::get('add-cheque', [ChequeController::class, 'index'])->name('add-cheque');
Route::resource('cheque', ChequeController::class);
