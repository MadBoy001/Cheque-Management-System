<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChequeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperuserController;
use App\Http\Controllers\UserChequeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user/dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Cheque Routes
// Route::resource('user/cheque', UserChequeController::class);
Route::get('user/cheque', [UserChequeController::class, 'index'])->name('user.cheque');
Route::get('user/expiring-cheques', [UserChequeController::class, 'expiringCheques'])->name('user.expiring-cheques');
Route::get('user/expired-cheques', [UserChequeController::class, 'expiredCheques'])->name('user.expired-cheques');
Route::get('user/returned-cheques', [UserChequeController::class, 'returnedCheques'])->name('user.returned-cheques');


