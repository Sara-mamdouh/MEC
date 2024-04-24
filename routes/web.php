<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
// use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/',[HomeController::class,"index"])->name("mainhome");
Route::get('/about',[HomeController::class,"about"])->name("about");

Route::get('/user',[HomeController::class,"redirect"])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/user/{diploma}',[HomeController::class,"add_cart"])->name('add_cart');
Route::get('/user/show_cart',[HomeController::class,"show_cart"])->name('show_cart');
Route::delete('/user/remove_cart/{diploma}',[HomeController::class,"remove_cart"])->name('remove_cart');
Route::get('/user/cash_booking',[HomeController::class,"cash_booking"])->name('cash_booking');

Route::get('/diplomas/create',[CategoryController::class,"create"])->name("diplomas.create");
Route::post('/diplomas',[CategoryController::class,"store"])->name("diplomas.store");
Route::get('/diplomas/{diploma}/edit',[CategoryController::class,"edit"])->name("diplomas.edit");
Route::put('/diplomas/{diploma}',[CategoryController::class,"update"])->name("diplomas.update");
Route::delete('/diplomas/{diploma}',[CategoryController::class,"destroy"])->name("diplomas.destroy");



Route::get('/instructors/create',[InstructorController::class,"create"])->name("instructors.create");
Route::post('/instructors',[InstructorController::class,"store"])->name("instructors.store");
Route::get('/instructors/{instructor}/edit',[InstructorController::class,"edit"])->name("instructors.edit");
Route::put('/instructors/{instructor}',[InstructorController::class,"update"])->name("instructors.update");
Route::delete('/instructors/{instructor}',[InstructorController::class,"destroy"])->name("instructors.destroy");


Route::get('/courses/create',[CourseController::class,"create"])->name("courses.create");
Route::post('/courses',[CourseController::class,"store"])->name("courses.store");
Route::get('/courses/{course}/edit',[CourseController::class,"edit"])->name("courses.edit");
Route::put('/courses/{course}',[CourseController::class,"update"])->name("courses.update");
Route::delete('/courses/{course}',[CourseController::class,"destroy"])->name("courses.destroy");

Route::get('/diplomas/{diploma}',[HomeController::class,"show"])->name("diplomas.show");




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
