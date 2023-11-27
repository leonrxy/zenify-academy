<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class KelolaSiswa extends Controller
{
    public function index()
    {
        $programs = Siswa::all();
        return view('admin.kelola-program.index', compact('programs'));
    }
}
