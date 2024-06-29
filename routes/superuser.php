<?php
use App\Http\Controllers\SuperuserController;
use Illuminate\Support\Facades\Route;


// Superuser Routes
Route::get('superuser/dashboard', [SuperuserController::class, 'dashboard'])->name('superuser.dashboard');