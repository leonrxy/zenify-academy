<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruktur;

class KelolaInstrukturController extends Controller
{
    public function index()
    {
        $instrukturs = Instruktur::all();
        return view('admin.kelola-instruktur.index', compact('instrukturs'));
    }
}
