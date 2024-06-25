<?php

use App\Http\Controllers\CourseEventsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/homepage/{id}', [EventsController::class, 'index']);
Route::get('/courses/{id}', [CoursesController::class, 'index']);
Route::get('/details/{id}', [DetailController::class, 'index']);
Route::get('/userProfile/{id}', [UserProfileController::class, 'index']);
Route::get('/courseEvents/{courseId}', [CourseEventsController::class, 'index']);
Route::post('/login', [UserProfileController::class, 'login']);
