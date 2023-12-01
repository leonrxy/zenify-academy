<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Instruktur;
use Illuminate\Validation\ValidationException;

class KelolaKelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $siswas = Siswa::all();
        return view('admin.kelola-kelas.index', compact('kelas', 'siswas'));
    }

    public function tambah()
    {
        $instrukturs = Instruktur::all();
        $kelas = Kelas::all();
        return view('admin.kelola-kelas.tambah', compact('instrukturs', 'kelas'));
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        $instrukturs = Instruktur::all();
        return view('admin.kelola-kelas.edit', compact('kelas', 'instrukturs'));
    }

    public function hapus(Request $request)
    {
        $kelas_id = $request->input('kelas');

        try {
            $kelas = Kelas::findOrFail($kelas_id);

            // Detach associated records
            $kelas->instrukturs()->detach();

            // Now you can safely delete the Kelas record
            $kelas->delete();
            return redirect()->route('admin.kelola-kelas.index')->with('success', 'Kelas berhasil dihapus');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return redirect()->route('admin.kelola-kelas.index')->with('error', 'Kelas tidak ditemukan atau gagal dihapus');
        }
    }

    public function tambahKelas(Request $request)
    {
        try {
            //dd('Controller is called!');
            $dataKelas = $request->validate([
                'nama' => 'required',
                'hari' => 'required',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'mata_pelajaran' => 'required',
                'kode_kelas' => 'required',
            ]);
            $dataInstruktur = $request->input('instruktur_id');

            $kelas = Kelas::create($dataKelas);
            $kelas->instrukturs()->attach($dataInstruktur);


            return redirect()->route('admin.kelola-kelas.index')->with('success', 'Data Kelas Berhasil Ditambahkan!');
        } catch (ValidationException $e) {
            return redirect()->route('admin.kelola-kelas.index')->withErrors($e->errors())->with('error', 'Terjadi kesalahan validasi.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kelola-kelas.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function editKelas(Request $request)
    {
        try {
            //dd('Controller is called!');
            $dataKelas = $request->validate([
                'nama' => 'required',
                'hari' => 'required',
                'jam_mulai' => 'required',
                'jam_selesai' => 'required',
                'mata_pelajaran' => 'required',
                'kode_kelas' => 'required',
            ]);
            $instrukturId = $request->input('instruktur_id');

            $kelas = Kelas::find($request->kelas_id); // Assuming you have a hidden input field with the name 'kelas_id' in your form

            if (!$kelas) {
                return redirect()->route('admin.kelola-kelas.index')->with('error', 'Kelas not found.');
            }

            $kelas->update($dataKelas);

            $kelas->instrukturs()->sync([$instrukturId]);


            return redirect()->route('admin.kelola-kelas.index')->with('success', 'Data Kelas Berhasil Ditambahkan!');
        } catch (ValidationException $e) {
            return redirect()->route('admin.kelola-kelas.index')->withErrors($e->errors())->with('error', 'Terjadi kesalahan validasi.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kelola-kelas.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function tambahSiswa(Request $request)
    {
        try {
            $dataKelas = $request->input('kelas_id');
            $dataSiswa = $request->input('namaSiswa');

            $kelas = Kelas::findOrFail($dataKelas);
            $siswa = Siswa::findOrFail($dataSiswa);

            $kelas->siswas()->attach($siswa);

            return redirect()->route('admin.kelola-kelas.index')->with('success', 'Siswa Berhasil Ditambahkan!');
        } catch (ValidationException $e) {
            return redirect()->route('admin.kelola-kelas.index')->withErrors($e->errors())->with('error', 'Terjadi kesalahan validasi.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kelola-kelas.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
