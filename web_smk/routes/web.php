<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MhsController;

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

// Route::get('/', function () {
//     return view('master');
// });

Auth::routes();
// Rute untuk menyimpan data pendaftaran siswa
Route::post('/pendaftaran/store', [PendaftaransisController::class, 'store'])->name('register.store');

// Rute untuk menampilkan formulir pendaftaran akun
Route::get('/register/{nisn}', [RegisterController::class, 'showRegisterForm'])->name('register.show');

// Rute untuk menyimpan pendaftaran akun
Route::post('/register', [RegisterController::class, 'register'])->name('register.save');

// Rute untuk halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login-mhs', [App\Http\Controllers\MhsController::class, 'login']);
Route::post('/login-mhs', [App\Http\Controllers\MhsController::class, 'ceklogin'])->name('login-mhs');

Route::middleware('auth:mahasiswa')->group(function () {
    Route::get('/db-mahasiswa', [App\Http\Controllers\MhsController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {

    Route::middleware(['CekAkses:admin'])->group(function () {
        //data jurusan
        Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit']);
        Route::put('/jurusan/{id}', [JurusanController::class, 'update']);
        Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy']);
    });

    Route::get('/jurusan/', [JurusanController::class, 'index']);
    Route::get('/jurusan/form/', [JurusanController::class, 'create']);
    Route::post('/jurusan/store/', [JurusanController::class, 'store']);

    //data mahasiswa
    Route::get('/mahasiswa/', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/form/', [MahasiswaController::class, 'create']);
    Route::post('/mahasiswa/store/', [MahasiswaController::class, 'store']);

    //data Pendaftaran
    Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
    Route::get('/pendaftaran/form/', [PendaftaranController::class, 'create']);
    Route::post('/pendaftaran/store/', [PendaftaranController::class, 'store']);
    Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit']);
    Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'update']);
    Route::delete('/pendaftaran/{id}', [PendaftaranController::class, 'destroy']);

});
