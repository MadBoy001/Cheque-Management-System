<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChequeController;
use App\Http\Controllers\ManageUsersController;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// Cheque Routes
Route::resource('cheque', ChequeController::class);
Route::get('expired-cheques', [ChequeController::class, 'expiredCheques'])->name('expired-cheques');
Route::get('expiring-cheques', [ChequeController::class, 'expiringCheques'])->name('expiring-cheques');
Route::get('returned-cheques', [ChequeController::class, 'returnedCheques'])->name('returned-cheques');

// Manage Users Route
Route::resource('manage-users', ManageUsersController::class);
