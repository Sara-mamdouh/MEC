<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;

// use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/',[HomeController::class,"index"])->name("mainhome");
Route::get('/about',[HomeController::class,"about"])->name("about");
Route::get('/user',[HomeController::class,"redirect"])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cart/show_cart',[CartController::class,"show_cart"])->name('show_cart');
Route::get('/cart/cash_booking',[CartController::class,"cash_booking"])->name('cash_booking');
Route::get('/cart/payment_online',[CartController::class,"payment_online"])->name('payment_online');
Route::post('/cart/add-to-cart/{id}',[CartController::class,"add_cart"])->name('add_cart');
Route::delete('/cart/remove_cart/{id}',[CartController::class,"remove_cart"])->name('remove_cart');


Route::middleware('auth:sanctum')->group(function () {
    
Route::get('/categories',[CategoryController::class,"index"])->name("categories.index");
Route::get('/categories/{category}',[HomeController::class,"show"])->name("categories.show");
Route::get('/categories/{category}/edit',[CategoryController::class,"edit"])->name("categories.edit");
Route::post('/categories',[CategoryController::class,"store"])->name("categories.store");
Route::put('/categories/{category}',[CategoryController::class,"update"])->name("categories.update");
Route::delete('/categories/{category}',[CategoryController::class,"destroy"])->name("categories.destroy");

    Route::get('/instructors',[InstructorController::class,"index"])->name("instructors.index");
    Route::get('/instructors/{instructor}/edit',[InstructorController::class,"edit"])->name("instructors.edit");
    Route::post('/instructors',[InstructorController::class,"store"])->name("instructors.store");
    Route::put('/instructors/{instructor}',[InstructorController::class,"update"])->name("instructors.update");
    Route::delete('/instructors/{instructor}',[InstructorController::class,"destroy"])->name("instructors.destroy");

    Route::get('/courses',[CourseController::class,"index"])->name("courses.index");
    Route::get('/courses/{course}/edit',[CourseController::class,"edit"])->name("courses.edit");
    Route::post('/courses',[CourseController::class,"store"])->name("courses.store");
    Route::put('/courses/{course}',[CourseController::class,"update"])->name("courses.update");
    Route::delete('/courses/{course}',[CourseController::class,"destroy"])->name("courses.destroy");

    Route::get('/bookings',[BookingController::class,"index"])->name("bookings.index");
    Route::delete('/bookings/{booking}',[BookingController::class,"destroy"])->name("bookings.destroy");
});









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
