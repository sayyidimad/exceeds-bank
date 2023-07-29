<?php

use App\Http\Controllers\ProfileController;
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
});

require __DIR__.'/auth.php';
