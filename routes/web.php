<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\AuthController;

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

Route::get('/pengaduan/{id}', [pengaduanController::class, 'detail_pengaduan']); 
Route::get('/update/{id}', [pengaduanController::class, 'update_pengaduan']); 

Route::get('/registrasi', [AuthController::class, 'registrasi']);
Route::post("/registrasi", [AuthControlller::class, 'register']);
