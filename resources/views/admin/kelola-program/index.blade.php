@extends('layouts.main')

@section('css')
    <link href="../vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../vendor/izitoast/css/iziToast.min.css">
    <style>
        .program-table {
            margin-top: 20px;
        }

        .button-tambah {
            margin-bottom: 15px;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
    </style>
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Kelola Program
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.kelola-program.tambah') }}" class="btn mb-2 icon-left btn-primary"><i
                            class="ti-plus"></i>Tambah
                        Program</a>
                    <!-- Tabel List Program -->
                    <table id="programTable" class="table dt-responsive display">
                        <thead>
                            <tr>
                                <th>Nama Program</th>
                                <th>Harga</th>
                                <th>Jangka Waktu</th>
                                <th>Jumlah Pertemuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programs as $program)
                                <tr>
                                    <td>{{ $program->nama }}</td>
                                    <td>{{ $program->harga }}</td>
                                    <td>{{ $program->jangka_waktu }}</td>
                                    <td>{{ $program->jml_pertemuan }}</td>
                                    <td>
                                        <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detailProgram{{ $loop->iteration }}" type="button">Lihat
                                            Detail</button>

                                        <div class="modal fade" id="detailProgram{{ $loop->iteration }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                            Detail Program
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-fixed">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="3" class="table-success">Data Program
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td style="width:50%"> Nama Program</td>
                                                                <td>:</td>
                                                                <td>{{ $program->nama }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Harga</td>
                                                                <td style="width:0">:</td>
                                                                <td>{{ $program->harga }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jangka Waktu </td>
                                                                <td>:</td>
                                                                <td>{{ $program->jangka_waktu }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jumlah Pertemuan </td>
                                                                <td>:</td>
                                                                <td>{{ $program->jml_pertemuan }}x/Minggu</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Waktu Pertemuan</td>
                                                                <td>:</td>
                                                                <td>{{ $program->waktu_pertemuan }} Menit/Pertemuan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Deskripsi 1</td>
                                                                <td>:</td>
                                                                <td>{{ $program->info_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Deskripsi 2</td>
                                                                <td>:</td>
                                                                <td>{{ $program->info_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Deskripsi 3</td>
                                                                <td>:</td>
                                                                <td>{{ $program->info_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Style</td>
                                                                <td>:</td>
                                                                <td>{{ $program->nama }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Label</td>
                                                                <td>:</td>
                                                                <td>
                                                                    @if ($program->info_label == '')
                                                                        -
                                                                    @else
                                                                        {{ $program->info_label }}
                                                                    @endif
                                                                </td>
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
                                                        Apakah anda yakin ingin menghapus program '{{ $program->nama }}'?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form
                                                            action="{{ route('admin.kelola-program.hapus', ['program' => $program->nama]) }}"
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
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
