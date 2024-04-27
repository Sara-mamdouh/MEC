<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\InstructorController;
use App\Http\Controllers\API\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('login' , [UserController::class,"login"]);
Route::post('logout' , [UserController::class,"logout"])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        "categories"=>CategoryController::class,
        "courses"=>CourseController::class,
        "instructors"=>InstructorController::class,
    
    ]);
});
