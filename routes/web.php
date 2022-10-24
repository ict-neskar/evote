<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminCandidateController;

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

// AdminPages
Route::get('admin', [AdminController::class, 'index'])->name('adminDashboard')->middleware(['auth', 'is-admin']);

// AdminPagesCandidate
Route::get('/admin/kandidat/slug', [AdminCandidateController::class, 'slug'])->middleware(['auth', 'is-admin']);
Route::resource('/admin/kandidat', AdminCandidateController::class)->middleware(['auth', 'is-admin']);


// Pages
Route::get('/', [PagesController::class, 'homePage'])->name('homePage');
Route::get('kandidat', [PagesController::class, 'candidatesPage'])->name('candidatesPage');
Route::get('informasi', [PagesController::class, 'informationPage'])->name('informationPage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
