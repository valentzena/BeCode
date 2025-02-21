<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\gamecontroller;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('logintambah');
    Route::post('/login', [AuthController::class, 'dologin'])->name('login');

});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/pegawai', [PegawaiController::class, 'index']);

});

Route::get('/konten',[SuperadminController::class, 'ml']);

Route::get('/bayar',[SuperadminController::class, 'pembayaran']);

Route::get('/game', [gamecontroller::class, 'index']);
Route::get('modul/tambah', [gamecontroller::class, 'tambah']);
Route::post('/modul/simpan', [gamecontroller::class, 'simpan']);
Route::get('/modul/edit/{id}', [gamecontroller::class, 'edit']);
Route::put('/modul/update/{id}', [gamecontroller::class, 'update']);
Route::get('/modul/hapus/{id}', [gamecontroller::class, 'hapus']);
Route::get('/register', [Registercontroller::class, 'showRegisterForm']);
Route::post('/registeruser', [Registercontroller::class, 'register'])->name('register');