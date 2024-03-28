<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ProfileController::class, 'listofplayer'])->name('dashboard');
    Route::post('/select-player', [ProfileController::class, 'selectplayer'])->name('select_player');
    Route::get('/player/{id}', [ProfileController::class, 'playerById']);
    Route::get('/fetch-districts',[ProfileController::class, 'districtget'])->name('district_name');
});

require __DIR__.'/auth.php';
