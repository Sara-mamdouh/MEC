<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,"index"]);

Route::get('/diplomas',[HomeController::class,"redirect"])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/diplomas/create',[AdminController::class,"create"])->name("diplomas.create");
Route::post('/diplomas',[AdminController::class,"store"])->name("diplomas.store");

Route::delete('/diplomas/{diploma}',[AdminController::class,"destroy"])->name("diplomas.destroy");
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
