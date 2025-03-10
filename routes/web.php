<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ApotikController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\TransaksiVendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('buat_apotik', [ViewController::class, 'buat_apotik'])->name('buat_apotik');
    Route::get('buat_vendor', [ViewController::class, 'buat_vendor'])->name('buat_vendor');
    Route::post('create_apotik', [ApotikController::class, 'create_apotik'])->name('create_apotik');
    Route::post('create_vendor', [VendorController::class, 'create_vendor'])->name('create_vendor');
    Route::post('create_stock', [TransaksiVendorController::class, 'create_stock'])->name('create_stock');
});