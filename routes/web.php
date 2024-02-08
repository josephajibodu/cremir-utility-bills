<?php

use App\Http\Controllers\AirtimeController;
use App\Http\Controllers\DataTopupController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('landing');

Route::get('airtime', [AirtimeController::class, 'index']);
Route::get('data-topup', [DataTopupController::class, 'index']);
Route::get('payment', [PaymentController::class, 'index']);
