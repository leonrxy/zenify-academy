<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program');
    }

    public function create()
    {
        return view('program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required',
            'deskripsi' => 'required',
            'tujuan' => 'required',
            'target' => 'required',
            'waktu' => 'required',
            'biaya' => 'required',
            'lokasi' => 'required',
            'foto' => 'required',
        ]);

        $program = new Program;
        $program->nama_program = $request->nama_program;
        $program->deskripsi = $request->deskripsi;
        $program->tujuan = $request->tujuan;
        $program->target = $request->target;
        $program->waktu = $request->waktu;
        $program->biaya = $request->biaya;
        $program->lokasi = $request->lokasi;
        $program->foto = $request->foto;
        $program->save();

        return redirect('/program')->with('status', 'Data Program Berhasil Ditambahkan!');
    }
}
