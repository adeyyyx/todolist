<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
Route::middleware(['auth'])->group(function () {
    // Dashboard user
    Route::get('/dashboard', [TaskController::class, 'myTasks'])->name('dashboard');

    // Update status task
    Route::patch('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.updateStatus');
});
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Contoh proteksi
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/projects', 'dashboard')->name('projects.index');
Route::view('/tasks', 'dashboard')->name('tasks.index');

// Resource route untuk Projects
Route::resource('projects', ProjectController::class);

// Resource route untuk Tasks
Route::resource('tasks', TaskController::class);
