<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelolaKelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.kelola-kelas.index', compact('kelas'));
    }
}
