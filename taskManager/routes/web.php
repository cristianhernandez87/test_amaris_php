<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/tasks', function () {
    return view('tasks/index');
});

Route::post('/tareas', function () {
    dd('entrando dos');
});

// Route::post('/tareas', [TasksController::class, 'store']) -> name('tasks');
