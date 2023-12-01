<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\KelolaSiswaController;
use App\Http\Controllers\KelolaInstrukturController;
use App\Http\Controllers\KelolaKelasController;

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
Route::get('/program', [ProgramController::class, 'homeView']);
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
    Route::get('/admin/kelola-program', [ProgramController::class, 'index'])->name('admin.kelola-program.index');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/kelola-program/tambah', [AdminController::class, 'tambahProgram'])->name('admin.kelola-program.tambah');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::post('admin/kelola-program/tambahProgram', [ProgramController::class, 'tambahProgram'])->name('admin.kelola-program.tambahProgram');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/kelola-program/{id}/edit', [ProgramController::class, 'edit'])->name('admin.kelola-program.edit');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::post('admin/kelola-program/{id}/editProgram', [ProgramController::class, 'editProgram'])->name('admin.kelola-program.editProgram');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::delete('/admin/kelola-program/hapus', [ProgramController::class, 'hapus'])->name('admin.kelola-program.hapus');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/kelola-siswa', [KelolaSiswaController::class, 'index'])->name('admin.kelola-siswa.index');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/kelola-instruktur', [KelolaInstrukturController::class, 'index'])->name('admin.kelola-instruktur.index');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/kelola-kelas', [KelolaKelasController::class, 'index'])->name('admin.kelola-kelas.index');
});
