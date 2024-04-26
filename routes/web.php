<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get(
    'players/trash/{id}',
    [PlayerController::class, 'trash']
)->name('players.trash');

Route::get('teams/trash/{id}', [TeamController::class, 'trash'])->name('teams.trash');

Route::resource('players', PlayerController::class)->middleware(['auth', 'verified']);
Route::resource('teams', TeamController::class)->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
