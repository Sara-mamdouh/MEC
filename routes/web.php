<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;


Route::get('/',[HomeController::class,"index"]);

Route::get('/diplomas',[HomeController::class,"redirect"])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/diplomas/create',[CategoryController::class,"create"])->name("diplomas.create");
Route::post('/diplomas',[CategoryController::class,"store"])->name("diplomas.store");
Route::delete('/diplomas/{diploma}',[CategoryController::class,"destroy"])->name("diplomas.destroy");

Route::get('/instructors/create',[InstructorController::class,"create"])->name("instructors.create");
Route::post('/instructors',[InstructorController::class,"store"])->name("instructors.store");
Route::delete('/instructors/{instructor}',[InstructorController::class,"destroy"])->name("instructors.destroy");


Route::get('/courses/create',[CourseController::class,"create"])->name("courses.create");
Route::post('/courses',[CourseController::class,"store"])->name("courses.store");
Route::delete('/courses/{course}',[CourseController::class,"destroy"])->name("courses.destroy");





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
