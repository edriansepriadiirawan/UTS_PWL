<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\KrskhsController;
use App\Http\Controllers\PageController;

// ========================================
// SOAL 2 - Backend API (Resource Controllers)
// ========================================
Route::resource('dosen', DosenController::class)->only(['index']);
Route::resource('mahasiswa', MahasiswaController::class)->only(['index']);
Route::resource('matakuliah', MatakuliahController::class)->only(['index']);
Route::resource('jadwal', JadwalController::class)->only(['index']);
Route::resource('registrasi', RegistrasiController::class)->only(['index']);
Route::resource('krskhs', KrskhsController::class)->only(['index']);

// ========================================
// SOAL 1 - Frontend (PageController)
// ========================================
Route::get('/courses', [PageController::class, 'courses']);
Route::get('/students', [PageController::class, 'students']);
Route::get('/grades', [PageController::class, 'grades']);
Route::get('/assignments', [PageController::class, 'assignments']);
Route::get('/mahasiswa-form', [PageController::class, 'mahasiswa']);
Route::post('/proses', [PageController::class, 'proses']);

Route::get('/', function () {
    return redirect('/courses');
});