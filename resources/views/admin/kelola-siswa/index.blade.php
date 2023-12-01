@extends('layouts.main')

@section('css')
    <link href="../vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../vendor/izitoast/css/iziToast.min.css">
    <style>
        .button-tambah {
            margin-bottom: 15px;
        }
    </style>
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Kelola Siswa
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn mb-2 icon-left btn-primary"><i class="ti-plus"></i>Tambah
                        Siswa</a>
                    <!-- Tabel List Program -->
                    <table id="programTable" class="table dt-responsive display">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Jenis Program</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswas)
                                <tr>
                                    <td>{{ $siswas->nama_lengkap }}</td>
                                    <td>{{ $siswas->email }}</td>
                                    <td>{{ $siswas->nohp }}</td>
                                    <td>{{ $siswas->program }}</td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detailProgram{{ $loop->iteration }}"
                                            type="button">Detail</button>

                                        <a href="#"><button class="btn btn-warning" type="button">Edit</button></a>

                                        <div class="modal fade" id="detailProgram{{ $loop->iteration }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                            Detail Siswa
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-fixed">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3" class="table-success">Data Siswa
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td>Foto</td>
                                                                <td>:</td>
                                                                <td><img src="{{ $siswas->foto_diri }}" alt=""
                                                                        width="250px"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:50%">Nama Lengkap</td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->nama_lengkap }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td style="width:0">:</td>
                                                                <td>{{ $siswas->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor HP </td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->nohp }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Lahir </td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->tgl_lahir }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->jenis_kelamin }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Asal Sekolah</td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->asal_sekolah }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->alamat }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Program</td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->program }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Waktu Program</td>
                                                                <td>:</td>
                                                                <td>{{ $siswas->waktuprogram }}</td>
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
                                        <div class="modal fade" id="hapusProgram{{ $loop->iteration }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Program</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus siswa
                                                        '{{ $siswas->nama_lengkap }}'?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form
                                                            action="{{ route('admin.kelola-program.hapus', ['program' => $siswas->nama_lengkap]) }}"
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
