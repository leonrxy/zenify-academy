@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="../vendor/chart.js/Chart.min.css">
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            Jadwal Kelas
        </div>
        <div class="content-wrapper">
            <!-- Konten Kelas Saya -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Kelas</h4>
                        </div>
                        <div class="card-body">
                            <!-- Tabel Daftar Kelas -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Kelas</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Instruktur</th>
                                            <th scope="col">Jadwal</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Matematika Dasar</td>
                                            <td>Matematika</td>
                                            <td>Dr. Instruktur</td>
                                            <td>Senin, Rabu (08:00 - 10:00)</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info">Lihat Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Fisika Lanjut</td>
                                            <td>Fisika</td>
                                            <td>Prof. Instruktur</td>
                                            <td>Selasa, Kamis (10:00 - 12:00)</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info">Lihat Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bahasa Inggris Intermediate</td>
                                            <td>Bahasa Inggris</td>
                                            <td>Drs. Instruktur</td>
                                            <td>Senin, Rabu (14:00 - 16:00)</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info">Lihat Detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/pages/index.min.js"></script>
@endsection
@section('runjs')
@endsection
