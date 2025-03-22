<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('pages/home');
});

// route wali
Route::get('/profile-siswa', [SiswaController::class, 'ProfileSiswa']);
Route::get('/nilai', [SiswaController::class, 'Nilai']);
Route::get('/kehadiran-siswa', [SiswaController::class, 'KehadiranSiswa']);
// route guru
Route::get('/daftar-siswa', [SiswaController::class, 'DaftarSiswa']);
Route::get('/nilai-siswa', [SiswaController::class, 'NilaiSiswa']);
Route::get('/absensi-siswa', [SiswaController::class, 'AbsensiSiswa']);
