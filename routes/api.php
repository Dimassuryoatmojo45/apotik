<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApotikController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\TransaksiVendorController;

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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/create_apotik', [ApotikController::class, 'create_apotik']);
    Route::post('/create_vendor', [VendorController::class, 'create_vendor']);
    Route::post('/create_stock', [TransaksiVendorController::class, 'create_stock']);
    Route::post('/logout', [AuthController::class, 'destroy']);
});