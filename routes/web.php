<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardMatakuliahController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\DashboardUser;
use App\Models\Matakuliah;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home');
});

Route::get('/mhs-index',[MahasiswaController::class,'index']);

// middleware=> disuruh login dulu

Route::get('/home', function(){
    return view('home');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::resource('/dashboard-mahasiswa', DashboardMahasiswaController::class)->middleware('auth','admin');

Route::get('/cetak-pdf',[DashboardMahasiswaController::class,'cetakPdf']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::resource('/dashboard-dosen', DashboardDosenController::class)->middleware('auth');

Route::get('/prodi', [ProdiController::class, 'index']);
Route::resource('/dashboard-prodi', DashboardProdiController::class)->middleware('auth');

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::resource('/dashboard-matakuliah', DashboardMatakuliahController::class)->middleware('auth');

Route::resource('/dashboard-jabatan', JabatanController::class)->middleware('auth');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/user', [UserController::class, 'index']);
Route::post('/dashboard-user', [DashboardUserController::class, 'index']);

Route::resource('/dashboard-user', DashboardUserController::class)->middleware('auth');
