<?php

use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('login');
    });

    Route::get('login', function () {
        return view('login');
    })->name('login');

    Route::post('login', [AuthenticatedController::class, 'store']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [BooksController::class, 'index'])->name('dashboard');

    Route::resource('books', BooksController::class);

    Route::post('logout', [AuthenticatedController::class, 'destroy'])
                ->name('logout');
});
