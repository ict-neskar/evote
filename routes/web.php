<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\CandidateController;
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

Route::get('/kandidat', [CandidateController::class, "index"]);
Route::get('/kandidat/{candidate:slug}', [CandidateController::class, "show"]);

// Voting
Route::get('golput', [VotingController::class, 'golputPage'])->name('golputPage')->middleware(['auth']);
Route::get('voting', [VotingController::class, 'votingPage'])->name('votingePage')->middleware(['auth']);
Route::get('berhasil', [VotingController::class, 'successPage'])->name('successPage')->middleware(['auth']);
Route::post('voted-for', [VotingController::class, 'chooseVoting'])->name('chooseVoting')->middleware(['auth']);

// Pages
Route::get('/', [PagesController::class, 'homePage'])->name('homePage');
Route::get('informasi', [PagesController::class, 'informationPage'])->name('informationPage');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
