@extends('layouts.main')
@section('title', 'Live Class')

@section('css')
    <link rel="stylesheet" href="../vendor/chart.js/Chart.min.css">
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            Live Class
        </div>
        <div class="content-wrapper">
            <!-- Konten Live Class -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Jadwal Live Class</h4>
                        </div>
                        <div class="card-body">
                            <!-- Daftar Live Class -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Kimia Dasar</h5>
                                    <p class="card-text">Instruktur: Prof. Instruktur</p>
                                    <p class="card-text">Waktu: Senin, 10:00 - 11:30</p>
                                    <p class="card-text">Deskripsi: Deskripsi live class akan ditampilkan di sini.</p>
                                    <a href="#" class="btn btn-success" data-toggle="modal"
                                        data-target="#liveClassModal1">Rincian</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sejarah Modern</h5>
                                    <p class="card-text">Instruktur: Dr. Instruktur</p>
                                    <p class="card-text">Waktu: Rabu, 14:00 - 15:30</p>
                                    <p class="card-text">Deskripsi: Deskripsi live class akan ditampilkan di sini.</p>
                                    <a href="#" class="btn btn-success" data-toggle="modal"
                                        data-target="#liveClassModal2">Rincian</a>
                                </div>
                            </div>
                            <!-- Tambahkan card live class lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Rincian Live Class 1 -->
    <div class="modal fade" id="liveClassModal1" tabindex="-1" role="dialog" aria-labelledby="liveClassModal1Label"
        aria-hidden="true">
        <!-- Isi modal sama seperti sebelumnya -->
    </div>

    <!-- Modal Rincian Live Class 2 -->
    <div class="modal fade" id="liveClassModal2" tabindex="-1" role="dialog" aria-labelledby="liveClassModal2Label"
        aria-hidden="true">
        <!-- Isi modal sama seperti sebelumnya -->
    </div>
@endsection
@section('js')
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/pages/index.min.js"></script>
@endsection
@section('runjs')
@endsection
