<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

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
