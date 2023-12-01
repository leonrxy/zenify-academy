@extends('layouts.main')

@section('css')
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Tambah Kelas
        </div>
        <div class="content-wrapper">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.kelola-kelas.tambahKelas') }}" method="post" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <input type="text" id="nama" name="nama" required class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Hari</label>
                                <select name="hari" id="hari" class="form-control" required>
                                    <option selected disabled hidden value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jam Mulai</label>
                                <input type="time" id="jam_mulai" name="jam_mulai" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Jam Selesai</label>
                                <input type="time" id="jam_selesai" name="jam_selesai" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <input type="text" name="mata_pelajaran" id="mata_pelajaran" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Kode Kelas</label>
                                <input type="text" name="kode_kelas" id="kode_kelas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Instruktur</label>
                                <select name="instruktur_id" id="instruktur_id" class="form-control" required>
                                    <option selected disabled hidden value="">Pilih Instruktur</option>
                                    @foreach ($instrukturs as $instruktur)
                                        <option value="{{ $instruktur->id }}">{{ $instruktur->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3" name="submit" value="simpan">Simpan
                                Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        document.getElementById('label').onchange = function() {
            document.getElementById('info_label').disabled = !this.checked;
        };
    </script>
@endsection
@section('runjs')
@endsection
