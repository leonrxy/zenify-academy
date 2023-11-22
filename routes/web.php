<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\SiswaController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
Siswa Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/dashboard', [SiswaController::class, 'dashboard'])->name('dashboard');
});
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/kelasku', [SiswaController::class, 'kelasku'])->name('kelasku');
});
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/jadwal', [SiswaController::class, 'jadwal'])->name('jadwal');
});
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/live-class', [SiswaController::class, 'liveClass'])->name('live-class');
});
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/video-belajar', [SiswaController::class, 'videoBelajar'])->name('video-belajar');
});
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/tryout', [SiswaController::class, 'tryout'])->name('tryout');
});
Route::middleware(['auth', 'user-access:siswa'])->group(function () {

    Route::get('/sharing-soal', [SiswaController::class, 'sharingSoal'])->name('sharing-soal');
});

/*------------------------------------------
--------------------------------------------
Instruktur Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:instruktur'])->group(function () {

    Route::get('/instruktur/dashboard', [InstrukturController::class, 'dashboard'])->name('instruktur.dashboard');
});
Route::middleware(['auth', 'user-access:instruktur'])->group(function () {

    Route::get('/instruktur/kelas-saya', [InstrukturController::class, 'kelasSaya'])->name('instruktur.kelas-saya');
});

/*------------------------------------------
--------------------------------------------
Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/kelola-program', [AdminController::class, 'kelolaProgram'])->name('admin.kelola-program');
});
