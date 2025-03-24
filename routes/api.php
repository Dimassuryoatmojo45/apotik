<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApotikController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\TransaksiVendorController;
use App\Http\Controllers\TransaksiObatController;

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
    Route::get('buat_apotik', [ViewController::class, 'buat_apotik']);
    Route::get('buat_vendor', [ViewController::class, 'buat_vendor']);
    Route::get('buat_transaksi', [ViewController::class, 'buat_transaksi'])->name('buat_transaksi');
    Route::get('buat_transaksi_obat', [ViewController::class, 'buat_transaksi_obat'])->name('buat_transaksi_obat');
    Route::get('register_admin', [ViewController::class, 'register_admin'])->name('register_admin');
    
    Route::post('/create_apotik', [ApotikController::class, 'create_apotik']);
    Route::post('/create_vendor', [VendorController::class, 'create_vendor']);
    Route::post('/create_stock', [TransaksiVendorController::class, 'create_stock']);
    Route::post('/create_obat', [TransaksiObatController::class, 'create_obat'])->name('create_obat');
    Route::post('/logout', [AuthController::class, 'destroy']);
    Route::post('/register_admin', [AuthController::class, 'register_admin'])->name('register_admin');
    Route::post('/form_obat', [ViewController::class, 'form_obat'])->name('form_obat');
});