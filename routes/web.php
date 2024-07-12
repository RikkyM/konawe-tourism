<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PageController;
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

Route::redirect('/', '/');

Route::get('/', [HomepageController::class, 'home'])->name('homepage');
Route::get('destinasi-wisata', [HomepageController::class, 'destinasi'])->name('destinasi');
Route::get('tentang-kami', [HomepageController::class, 'tentang'])->name('tentang-kami');
Route::get('/detail/{id}', [HomepageController::class, 'detail'])->name('detail');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);

Route::middleware('auth')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('wisata', [PageController::class, 'wisata'])->name('wisata');
    Route::get('komentar', [PageController::class, 'komentar'])->name('komentar');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});