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
// Route::get('/register', function () {
//     return view('auth/register2');
// });

Auth::routes();

/*------------------------------------------
--------------------------------------------
Siswa Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:siswa'])->group(function () {
    Route::get('/dashboard', [SiswaController::class, 'dashboard'])->name('dashboard');
    Route::get('/kelasku', [SiswaController::class, 'kelasku'])->name('kelasku');
    Route::get('/jadwal', [SiswaController::class, 'jadwal'])->name('jadwal');
    Route::get('/live-class', [SiswaController::class, 'liveClass'])->name('live-class');
    Route::get('/video-belajar', [SiswaController::class, 'videoBelajar'])->name('video-belajar');
    Route::get('/tryout', [SiswaController::class, 'tryout'])->name('tryout');
    Route::get('/sharing-soal', [SiswaController::class, 'sharingSoal'])->name('sharing-soal');
});

/*------------------------------------------
--------------------------------------------
Instruktur Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:instruktur'])->group(function () {
    Route::get('/instruktur/dashboard', [InstrukturController::class, 'dashboard'])->name('instruktur.dashboard');
    Route::get('/instruktur/kelas-saya', [InstrukturController::class, 'kelasSaya'])->name('instruktur.kelas-saya');
});

/*------------------------------------------
--------------------------------------------
Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/kelola-program', [ProgramController::class, 'index'])->name('admin.kelola-program.index');
    Route::get('/admin/kelola-program/tambah', [AdminController::class, 'tambahProgram'])->name('admin.kelola-program.tambah');
    Route::post('admin/kelola-program/tambahProgram', [ProgramController::class, 'tambahProgram'])->name('admin.kelola-program.tambahProgram');
    Route::get('/admin/kelola-program/{id}/edit', [ProgramController::class, 'edit'])->name('admin.kelola-program.edit');
    Route::post('admin/kelola-program/{id}/editProgram', [ProgramController::class, 'editProgram'])->name('admin.kelola-program.editProgram');
    Route::delete('/admin/kelola-program/hapus', [ProgramController::class, 'hapus'])->name('admin.kelola-program.hapus');
    Route::get('/admin/kelola-siswa', [KelolaSiswaController::class, 'index'])->name('admin.kelola-siswa.index');
    Route::get('/admin/kelola-instruktur', [KelolaInstrukturController::class, 'index'])->name('admin.kelola-instruktur.index');
    Route::get('/admin/kelola-kelas', [KelolaKelasController::class, 'index'])->name('admin.kelola-kelas.index');
    Route::get('/admin/kelola-kelas/tambah', [KelolaKelasController::class, 'tambah'])->name('admin.kelola-kelas.tambah');
    Route::post('admin/kelola-kelas/tambahKelas', [KelolaKelasController::class, 'tambahKelas'])->name('admin.kelola-kelas.tambahKelas');
    Route::get('/admin/kelola-kelas/{id}/edit', [KelolaKelasController::class, 'edit'])->name('admin.kelola-kelas.edit');
    Route::post('admin/kelola-kelas/{id}/editKelas', [KelolaKelasController::class, 'editKelas'])->name('admin.kelola-kelas.editKelas');
    Route::delete('/admin/kelola-kelas/hapus', [KelolaKelasController::class, 'hapus'])->name('admin.kelola-kelas.hapus');
    Route::post('/admin/kelola-kelas/tambahSiswa', [KelolaKelasController::class, 'tambahSiswa'])->name('admin.kelola-kelas.tambahSiswa');
    Route::get('/admin/kelola-siswa/search', [KelolaSiswaController::class, 'searchSiswa'])->name('admin.kelola-siswa.search');

});
