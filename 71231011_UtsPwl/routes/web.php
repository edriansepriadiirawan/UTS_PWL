<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Form POST NIM & Nama
Route::get('/mahasiswa', [PageController::class, 'mahasiswa']);
Route::post('/proses', [PageController::class, 'proses']);

// 1.c - Template Inheritance: 4 Child
Route::get('/courses', [PageController::class, 'courses']);
Route::get('/students', [PageController::class, 'students']);
Route::get('/grades', [PageController::class, 'grades']);
Route::get('/assignments', [PageController::class, 'assignments']);

// Default route
Route::get('/', function () {
    return redirect('/courses');
});