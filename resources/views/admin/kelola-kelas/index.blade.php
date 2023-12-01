@extends('layouts.main')

@section('title')
    Kelola Kelas
@endsection

@section('css')
    <link href="../vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../vendor/izitoast/css/iziToast.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .button-tambah {
            margin-bottom: 15px;
        }

        #searchResults {
            z-index: 9999;
            /* You can adjust this value as needed */
        }
    </style>
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Kelola Kelas
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.kelola-kelas.tambah') }}" class="btn mb-2 icon-left btn-primary"><i
                            class="ti-plus"></i>Tambah
                        Kelas</a>
                    <!-- Tabel List Program -->
                    <table id="programTable" class="table dt-responsive display">
                        <thead>
                            <tr>
                                <th>Kode Kelas</th>
                                <th>Mata Pelajaran</th>
                                <th>Nama Instruktur</th>
                                <th>Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $kelas)
                                <tr>
                                    <td>{{ $kelas->kode_kelas }}</td>
                                    <td>{{ $kelas->mata_pelajaran }}</td>
                                    <td>
                                        @foreach ($kelas->instrukturs as $instruktur)
                                            {{ $instruktur->nama }}
                                    </td>
                                    <td>{{ $kelas->hari }}</td>
                                    <td>{{ $kelas->jam_mulai }}</td>
                                    <td>{{ $kelas->jam_selesai }}</td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detailProgram{{ $loop->iteration }}" type="button">Lihat
                                            Detail</button>
                                        <a href="{{ route('admin.kelola-kelas.edit', ['id' => $kelas->id]) }}"><button
                                                class="btn btn-warning" type="button">Edit</button></a>

                                        <div class="modal fade" id="detailProgram{{ $loop->iteration }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                            Detail Kelas
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-fixed">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3" class="table-success">Data Kelas
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td style="width:50%">Kode Kelas</td>
                                                                <td>:</td>
                                                                <td>{{ $kelas->kode_kelas }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Instruktur</td>
                                                                <td style="width:0">:</td>
                                                                <td>{{ $instruktur->nama }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mata Pelajaran </td>
                                                                <td>:</td>
                                                                <td>{{ $kelas->mata_pelajaran }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hari </td>
                                                                <td>:</td>
                                                                <td>{{ $kelas->hari }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Mulai</td>
                                                                <td>:</td>
                                                                <td>{{ $kelas->jam_mulai }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Selesai</td>
                                                                <td>:</td>
                                                                <td>{{ $kelas->jam_selesai }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapusProgram{{ $loop->iteration }}"><i
                                                class="ti-trash"></i></button>
                                        <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#listSiswa{{ $loop->iteration }}" type="button">List
                                            Siswa</button>
                                        <button class="btn btn-success mt-1" data-bs-toggle="modal"
                                            data-bs-target="#tambahSiswa{{ $loop->iteration }}" type="button">Tambahkan
                                            Siswa</button>

                                        <div class="modal fade" id="listSiswa{{ $loop->iteration }}"
                                            aria-labelledby="extraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">List Siswa Kelas
                                                            {{ $kelas->kode_kelas }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table id="programTable" class="table dt-responsive display">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Lengkap</th>
                                                                    <th>Email</th>
                                                                    <th>No HP</th>
                                                                    <th>Aksi</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($kelas->siswas as $siswa)
                                                                    <tr>
                                                                        <td>{{ $siswa->nama_lengkap }}</td>
                                                                        <td>{{ $siswa->email }}</td>
                                                                        <td>{{ $siswa->nohp }}</td>
                                                                        <td><button type="button" class="btn btn-danger"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#"><i
                                                                                    class="ti-trash"></i></button></td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal fade" id="tambahSiswa{{ $loop->iteration }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Siswa</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('admin.kelola-kelas.tambahSiswa', ['kelas' => $kelas->id]) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <p>Masukkan Nama siswa yang ingin ditambahkan ke kelas
                                                                {{ $kelas->kode_kelas }}.</p>
                                                            <div class="form-group">
                                                                <label>Nama Siswa</label>
                                                                <div>
                                                                    <select class="form-control select2" name="namaSiswa"
                                                                        id="namaSiswa">
                                                                        <option selected disabled hidden value="">
                                                                            Pilih Siswa</option>
                                                                        @foreach ($siswas as $siswa)
                                                                            <option value="{{ $siswa->id }}">
                                                                                {{ $siswa->nama_lengkap }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <input type="hidden" name="kelas_id" id="kelas_id"
                                                                        value="{{ $kelas->id }}">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-success">Tambahkan
                                                            Siswa</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="hapusProgram{{ $loop->iteration }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Kelas</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus kelas
                                                        '{{ $kelas->kode_kelas }}'?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form
                                                            action="{{ route('admin.kelola-kelas.hapus', ['kelas' => $kelas->id]) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @endforeach
                            <!-- Tambahkan baris tabel untuk setiap program lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendor/izitoast/js/iziToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').on('shown.bs.modal', '.modal', function() {
                $(this).find('select.select2').each(function() {
                    var dropdownParent = $(document.body);
                    if ($(this).parents('.modal.in:first').length !== 0)
                        dropdownParent = $(this).parents('.modal.in:first');
                    var modalIndex = $(this).closest('.modal').attr('id').replace('tambahSiswa',
                        '');
                    $(this).select2({
                        dropdownParent: $("#tambahSiswa" + modalIndex)
                        // ... other options if needed
                    });
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#programTable').DataTable();
        });
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
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    message: '{{ $error }}',
                    position: 'topRight',
                });
            </script>
        @endforeach
    @endif
@endsection

@section('runjs')
@endsection
