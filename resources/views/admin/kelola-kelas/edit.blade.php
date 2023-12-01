@extends('layouts.main')

@section('css')
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Edit Kelas
        </div>
        <div class="content-wrapper">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.kelola-kelas.editKelas', ['id' => $kelas->id]) }}" method="post"
                            role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <input type="text" id="nama" name="nama" required class="form-control"
                                    value="{{ $kelas->nama }}">
                            </div>

                            <div class="form-group">
                                <label>Hari</label>
                                <select name="hari" id="hari" class="form-control" required>
                                    <option selected disabled hidden value="">Pilih Hari</option>
                                    <option value="Senin" {{ $kelas->hari === 'Senin' ? 'selected' : '' }}>Senin
                                    </option>
                                    <option value="Selasa" {{ $kelas->hari === 'Selasa' ? 'selected' : '' }}>Selasa
                                    </option>
                                    <option value="Rabu" {{ $kelas->hari === 'Rabu' ? 'selected' : '' }}>Rabu
                                    </option>
                                    <option value="Kamis" {{ $kelas->hari === 'Kamis' ? 'selected' : '' }}>Kamis
                                    </option>
                                    <option value="Jumat" {{ $kelas->hari === 'Jumat' ? 'selected' : '' }}>Jumat
                                    </option>
                                    <option value="Sabtu" {{ $kelas->hari === 'Sabtu' ? 'selected' : '' }}>Sabtu
                                    </option>
                                    <option value="Minggu" {{ $kelas->hari === 'Minggu' ? 'selected' : '' }}>Minggu
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jam Mulai</label>
                                <input type="time" id="jam_mulai" name="jam_mulai" class="form-control"
                                    value="{{ $kelas->jam_mulai }}">
                            </div>

                            <div class="form-group">
                                <label>Jam Selesai</label>
                                <input type="time" id="jam_selesai" name="jam_selesai" class="form-control"
                                    value="{{ $kelas->jam_selesai }}">
                            </div>

                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <input type="text" name="mata_pelajaran" id="mata_pelajaran" class="form-control"
                                    value="{{ $kelas->mata_pelajaran }}">
                            </div>

                            <div class="form-group">
                                <label>Kode Kelas</label>
                                <input type="text" name="kode_kelas" id="kode_kelas" class="form-control"
                                    value="{{ $kelas->kode_kelas }}">
                            </div>

                            <div class="form-group">
                                <label>Instruktur</label>
                                <select name="instruktur_id" id="instruktur_id" class="form-control" required>
                                    <option disabled hidden value="">Pilih Instruktur</option>
                                    @foreach ($instrukturs as $instruktur)
                                        <option value="{{ $instruktur->id }}"
                                            {{ $kelas->instrukturs->contains('id', $instruktur->id) ? 'selected' : '' }}>
                                            {{ $instruktur->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="hidden" name="kelas_id" id="kelas_id" value="{{ $kelas->id }}">

                            <button type="submit" class="btn btn-primary mt-3" name="submit" value="simpan">Update
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
    @if (session()->get('success'))
        <script>
            iziToast.success({
                message: '{{ session()->get('success') }}',
                position: 'topRight',
            });
        </script>
    @endif
    @if (session()->get('error'))
        <script>
            iziToast.error({
                message: '{{ session()->get('error') }}',
                position: 'topRight',
            });
        </script>
    @endif
@endsection
@section('runjs')
@endsection
