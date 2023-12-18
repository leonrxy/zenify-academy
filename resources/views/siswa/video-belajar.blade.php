@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="../vendor/chart.js/Chart.min.css">
    <style>
        .video-card {
            margin-bottom: 20px;
        }

        .video-thumbnail {
            max-width: 100%;
            max-height: 240px;
            height: auto;
        }
    </style>
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            Video Belajar
        </div>
        <div class="content-wrapper">
            <!-- Konten Video Belajar -->
            <div class="row">
                <div class="col-md-6">
                    <div class="video-card">
                        <div class="card">
                            <img src="{{asset('assets/images/math.jpg')}}" alt="Video Thumbnail"
                                class="card-img-top video-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">Matematika Dasar - Bab 1</h5>
                                <p class="card-text">Durasi: 30 menit</p>
                                <p class="card-text">Deskripsi: Deskripsi video belajar akan ditampilkan di sini.</p>
                                <a href="#" class="btn btn-success" data-toggle="modal"
                                    data-target="#videoModal1">Tonton Video</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="video-card">
                        <div class="card">
                            <img src="{{asset('assets/images/english.jpg')}}" alt="Video Thumbnail"
                                class="card-img-top video-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">Bahasa Inggris - Grammar</h5>
                                <p class="card-text">Durasi: 45 menit</p>
                                <p class="card-text">Deskripsi: Deskripsi video belajar akan ditampilkan di sini.</p>
                                <a href="#" class="btn btn-success" data-toggle="modal"
                                    data-target="#videoModal2">Tonton Video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan card video belajar lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>

    <!-- Modal Tonton Video 1 -->
    <div class="modal fade" id="videoModal1" tabindex="-1" role="dialog" aria-labelledby="videoModal1Label"
        aria-hidden="true">
        <!-- Isi modal sama seperti sebelumnya -->
    </div>

    <!-- Modal Tonton Video 2 -->
    <div class="modal fade" id="videoModal2" tabindex="-1" role="dialog" aria-labelledby="videoModal2Label"
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
