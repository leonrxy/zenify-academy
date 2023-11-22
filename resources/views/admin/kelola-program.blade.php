@extends('layouts.main')

@section('css')
    <link href="../vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="../vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <style>
        .program-table {
            margin-top: 20px;
        }

        .button-tambah {
            margin-bottom: 15px;
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
                    <button type="button" class="btn mb-2 icon-left btn-primary "><i class="ti-plus"></i>Tambah
                        Program</button>
                    <!-- Tabel List Program -->
                    <table id="programTable" class="table dt-responsive display">
                        <thead>
                            <tr>
                                <th>Nama Program</th>
                                <th>Deskripsi</th>
                                <th>Jumlah Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Program A</td>
                                <td>Deskripsi Program A</td>
                                <td>5</td>
                                <td>
                                    <a href="#" class="btn btn-info">Lihat Detail</a>
                                    <button type="button" class="btn btn-danger"><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Program B</td>
                                <td>Deskripsi Program B</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btn btn-light">Lihat Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Program C</td>
                                <td>Deskripsi Program C</td>
                                <td>7</td>
                                <td>
                                    <a href="#" class="btn btn-light">Lihat Detail</a>
                                </td>
                            </tr>
                            @foreach ($programs as $program)
                                <tr>
                                    <td>{{ $program->nama }}</td>
                                    <td>{{ $program->harga }}</td>
                                    <td>{{ $program->jangka_waktu }}</td>
                                    <td>
                                        <a href="{{ route('admin.program.detail', $program->id) }}"
                                            class="btn btn-info">Lihat Detail</a>
                                        <button type="button" class="btn btn-danger"><i class="ti-trash"></i></button>
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
    <script>
        $(document).ready(function() {
            $('#programTable').DataTable();
        });
    </script>
@endsection

@section('runjs')
@endsection
