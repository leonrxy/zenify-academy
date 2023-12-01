<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Validation\ValidationException;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('admin.kelola-program.index', compact('programs'));
    }

    public function edit($id)
    {
        $program = Program::find($id);
        return view('admin.kelola-program.edit', compact('program'));
    }

    public function hapus(Request $request)
    {
        $programName = $request->input('program');

        try {
            $program = Program::where('nama', $programName)->firstOrFail();
            $program->delete();
            return redirect()->route('admin.kelola-program.index')->with('success', 'Program berhasil dihapus');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return redirect()->route('admin.kelola-program.index')->with('error', 'Program tidak ditemukan atau gagal dihapus');
        }
    }

    public function homeView()
    {
        $programs = Program::all();
        return view('program', compact('programs'));
    }

    public function tambahProgram(Request $request)
    {
        try {
            //dd('Controller is called!');
            $validatedData = $request->validate([
                'nama' => 'required',
                'harga' => 'required',
                'jangka_waktu' => 'required',
                'jml_pertemuan' => 'required',
                'waktu_pertemuan' => 'required',
                'info_1' => 'required',
                'na_info_1' => '',
                'info_2' => 'required',
                'na_info_2' => '',
                'info_3' => 'required',
                'na_info_3' => '',
                'style' => '',
                'label' => '',
                'info_label' => '',
            ]);

            Program::create($validatedData);

            return redirect()->route('admin.kelola-program.index')->with('success', 'Data Program Berhasil Ditambahkan!');
        } catch (ValidationException $e) {
            return redirect()->route('admin.kelola-program.index')->withErrors($e->errors())->with('error', 'Terjadi kesalahan validasi.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kelola-program.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function editProgram(Request $request, $id)
    {
        try {
            $program = Program::find($id);
            //dd('Controller is called!');
            $validatedData = $request->validate([
                'nama' => 'required',
                'harga' => 'required',
                'jangka_waktu' => 'required',
                'jml_pertemuan' => 'required',
                'waktu_pertemuan' => 'required',
                'info_1' => 'required',
                'na_info_1' => '',
                'info_2' => 'required',
                'na_info_2' => '',
                'info_3' => 'required',
                'na_info_3' => '',
                'style' => '',
                'label' => '',
                'info_label' => '',
            ]);

            $program->update($validatedData);

            return redirect()->route('admin.kelola-program.index')->with('success', 'Data Program Berhasil Diubah!');
        } catch (ValidationException $e) {
            return redirect()->route('admin.kelola-program.index')->withErrors($e->errors())->with('error', 'Terjadi kesalahan validasi.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kelola-program.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
