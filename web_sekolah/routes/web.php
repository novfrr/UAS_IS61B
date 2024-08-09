<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\GuruController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//data siswa
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->middleware('auth');
Route::get('/pendaftaran/form/', [PendaftaranController::class, 'create'])->middleware('auth');
Route::post('/pendaftaran/store/', [PendaftaranController::class, 'store'])->middleware('auth');
Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit'])->middleware('auth');
Route::put('/pendaftaran/{id}', [PendaftaranController::class, 'update'])->middleware('auth');
Route::delete('/pendaftaran/{id}', [PendaftaranController::class, 'destroy'])->middleware('auth');

Route::get('/guru', [GuruController::class, 'index'])->middleware('auth');
Route::get('/guru/form/', [GuruController::class, 'create'])->middleware('auth');
Route::post('/guru/store/', [GuruController::class, 'store'])->middleware('auth');
Route::get('/guru/edit/{id}', [GuruController::class, 'edit'])->middleware('auth');
Route::put('/guru/{id}', [GuruController::class, 'update'])->middleware('auth');
Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->middleware('auth');

