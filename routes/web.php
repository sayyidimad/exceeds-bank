<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Cache;
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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('landing-page');
    })->name('landing-page');
});

Route::middleware('auth')->group(function () {
    Route::get('/homepage', function () {
        return view('homepage');
    })->name('homepage');

    Route::get('/mutation', function () {
        return view('mutation');
    })->name('mutation');

    Route::get('/transfer', [TransactionController::class, 'index'])->name('transfer');
    Route::post('/transfer', [TransactionController::class, 'store'])->name('transfer.store');
    Route::get('/transfer/final', [TransactionController::class, 'index2'])->name('transfer-2');
});

Route::get('/test', function () {
    return dd(Cache::get('access_token'));
});

require __DIR__ . '/auth.php';
