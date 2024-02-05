<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(["middleware" => ['auth']], function () {
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('buku', BookController::class);
    Route::get('export-buku', [BookController::class, 'export_excel'])->name('export'); 
});
Auth::routes();


