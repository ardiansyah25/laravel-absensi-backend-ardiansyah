<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CompanyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [ AuthController::class, 'login' ]);
Route::post('/logout', [ AuthController::class, 'logout' ])->middleware('auth:sanctum');
Route::get('/company', [ CompanyController::class, 'show' ])->middleware('auth:sanctum');

//checkin
Route::post('/checkin', [ App\Http\Controllers\Api\AttendanceController::class, 'checkin' ])->middleware('auth:sanctum');
//checkout
Route::post('/checkout', [ App\Http\Controllers\Api\AttendanceController::class, 'checkout' ])->middleware('auth:sanctum');
//is checkin
Route::get('/is-checkin', [ App\Http\Controllers\Api\AttendanceController::class, 'isCheckedin' ])->middleware('auth:sanctum');

//update profile
Route::post('/update-profile', [ App\Http\Controllers\Api\AuthController::class, 'updateProfile' ])->middleware('auth:sanctum');