<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get('test', function () {
    return view('test');
});

Route::get('/', [HomepageController::class, 'home'])->name('homepage');
Route::get('destinasi-wisata', [HomepageController::class, 'destinasi'])->name('destinasi');
Route::get('tentang-kami', [HomepageController::class, 'tentang'])->name('tentang-kami');
Route::get('/detail/{id}', [HomepageController::class, 'detail'])->name('detail');
Route::get('/konawe-private/asset/{filename}', [AssetController::class, 'getDestinasiPhotos'])->name('img');
Route::get('/konawe-private/gallery/{filename}', [AssetController::class, 'getGallery'])->name('gallery');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/wisata', [PageController::class, 'wisata'])->name('wisata');
    Route::get('admin/komentar', [PageController::class, 'komentar'])->name('komentar');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

// Livewire::setScriptRoute(function ($handle) {
//     return Route::get('/konawe-tourism/public/livewire/livewire.js', $handle);
// });

// Livewire::setUpdateRoute(function ($handle) {
//     return Route::post('/konawe-tourism/public/livewire/update', $handle);
// });
