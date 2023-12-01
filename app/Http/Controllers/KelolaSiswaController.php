<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class KelolaSiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('admin.kelola-siswa.index', compact('siswas'));
    }
}
