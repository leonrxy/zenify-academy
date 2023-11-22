<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('admin.kelola-program', compact('programs'));
    }

    public function create()
    {
        return view('admin.kelola-program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jangka_waktu' => 'required',
            'waktu_pertemuan' => 'required',
            'deskripsi' => 'required',
            'info_1' => 'required',
            'na_info_1' => 'required',
            'info_2' => 'required',
            'na_info_2' => 'required',
            'info_3' => 'required',
            'na_info_3' => 'required',
            'style' => 'required',
            'label' => 'required',
            'info_label' => 'required',
        ]);

        $program = new Program;
        $program->nama = $request->nama;
        $program->harga = $request->harga;
        $program->jangka_waktu = $request->jangka_waktu;
        $program->waktu_pertemuan = $request->waktu_pertemuan;
        $program->deskripsi = $request->deskripsi;
        $program->info_1 = $request->info_1;
        $program->na_info_1 = $request->na_info_1;
        $program->info_2 = $request->info_2;
        $program->na_info_2 = $request->na_info_2;
        $program->info_3 = $request->info_3;
        $program->na_info_3 = $request->na_info_3;
        $program->style = $request->style;
        $program->label = $request->label;
        $program->info_label = $request->info_label;
        $program->save();

        return redirect('admin/kelola-program')->with('success', 'Data Program Berhasil Ditambahkan!');
    }
}
