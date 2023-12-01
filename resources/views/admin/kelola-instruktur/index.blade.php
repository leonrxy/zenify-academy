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
            Kelola Instruktur
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn mb-2 icon-left btn-primary"><i class="ti-plus"></i>Tambah
                        Instruktur</a>
                    <!-- Tabel List Program -->
                    <table id="programTable" class="table dt-responsive display">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Mata Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instrukturs as $instrukturs)
                                <tr>
                                    <td>{{ $instrukturs->nama }}</td>
                                    <td>{{ $instrukturs->email }}</td>
                                    <td>{{ $instrukturs->nohp }}</td>
                                    <td>{{ $instrukturs->mata_pelajaran }}</td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detailProgram{{ $loop->iteration }}" type="button">Lihat
                                            Detail</button>

                                        <a href="#"><button class="btn btn-warning" type="button">Edit</button></a>

                                        <div class="modal fade" id="detailProgram{{ $loop->iteration }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                            Detail Instruktur
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-fixed">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3" class="table-success">Data Instruktur
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td>Foto</td>
                                                                <td>:</td>
                                                                <td><img src="{{ $instrukturs->foto_profil }}"
                                                                        alt="" width="250px"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:50%">Nama Lengkap</td>
                                                                <td>:</td>
                                                                <td>{{ $instrukturs->nama }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td style="width:0">:</td>
                                                                <td>{{ $instrukturs->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor HP </td>
                                                                <td>:</td>
                                                                <td>{{ $instrukturs->nohp }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Lahir </td>
                                                                <td>:</td>
                                                                <td>{{ $instrukturs->tgl_lahir }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>:</td>
                                                                <td>{{ $instrukturs->jenis_kelamin }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td>{{ $instrukturs->alamat }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kelas Diajar</td>
                                                                <td>:</td>
                                                                <td>{{ $instrukturs->kelas_diajar }}</td>
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
                                                        Apakah anda yakin ingin menghapus instruktur
                                                        '{{ $instrukturs->nama }}'?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form
                                                            action="{{ route('admin.kelola-program.hapus', ['program' => $instrukturs->nama_lengkap]) }}"
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
