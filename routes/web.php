<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersVottingController;
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
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route Dashboard
Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard
    Route::get('/dashboard/all', [DashboardController::class, 'index'])->name('dashboard.index');

    // Chart
    Route::get('/dashboard/live-chart', [ChartController::class, 'index'])->name('chart.index');

    // Event
    Route::get('/dashboard/event', [EventController::class, 'index'])->name('event.index');
    Route::get('/dashboard/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/dashboard/event/store', [EventController::class, 'store'])->name('event.store');
    Route::get('/dashboard/event/show/{id}', [EventController::class, 'show'])->name('event.show');

    // Candidate
    Route::get('/dashboard/candidate', [CandidateController::class, 'index'])->name('candidate.index');
    Route::get('/dashboard/candidate/create', [CandidateController::class, 'create'])->name('candidate.create');

    // Users
    Route::get('/dashboard/users', [UsersVottingController::class, 'index'])->name('users.index');
    Route::get('/dashboard/users/import', [UsersVottingController::class, 'import'])->name('users.import');

    // Logout
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Route SuperAdmin
Route::middleware('role:superAdmin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

require __DIR__.'/auth.php';
