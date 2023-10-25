<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\loginPetugasController;


Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_pengaduan']);
Route::post('/isi-pengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);
Route::get('/hapus-pengaduan/{id}', [PengaduanController::class, 'hapus']);

Route::get('/detail-pengaduan/{id}', [PengaduanController::class, "detail_pengaduan"]);

// Route::get('about', function(){
//     return "ini halaman about";
// });

// Route::get('about', function(){
//     return view("about");
// });

Route::get('/about/{id}', [pengaduanController::class, 'tampil_about']);

Route::middleware(['auth'])->group(function() {
Route::get('/pengaduan/{id}', [pengaduanController::class, 'detail_pengaduan']); 
Route::get('/update/{id}', [pengaduanController::class, 'update_pengaduan']); 
Route::get('/registrasi', [AuthController::class, 'registrasi']);
Route::post("/registrasi", [AuthControlller::class, 'register']);
});

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);

    Route::middleware(['cekPetugas'])->group(function() {
Route::post('/petugas/logout', [loginPetugasController::class, 'logout']);
Route::post('/petugas/login_petugas', [loginPetugasController::class, 'login']);
Route::post('/petugas/home_petugas', [loginPetugasController::class, 'home']);
 });
