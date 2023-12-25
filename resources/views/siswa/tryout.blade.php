@extends('layouts.main')
@section('title', 'Tryout')

@section('css')
    <link rel="stylesheet" href="../vendor/chart.js/Chart.min.css">
    <style>
        .tryout-card {
            margin-bottom: 20px;
        }

        .tryout-thumbnail {
            max-width: 100%;
            max-height: 240px;
            height: auto;
        }
    </style>
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            Tryout
        </div>
        <div class="content-wrapper">
            <!-- Konten Tryout -->
            <div class="row">
                <div class="col-md-6">
                    <div class="tryout-card">
                        <div class="card">
                            <img src="{{asset('assets/images/math.jpg')}}" alt="Tryout Thumbnail"
                                class="card-img-top tryout-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">Tryout Matematika</h5>
                                <p class="card-text">Durasi: 1 jam</p>
                                <p class="card-text">Deskripsi: Deskripsi tryout akan ditampilkan di sini.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                    data-target="#tryoutModal1">Ikuti Tryout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tryout-card">
                        <div class="card">
                            <img src="{{asset('assets/images/english.jpg')}}" alt="Tryout Thumbnail"
                                class="card-img-top tryout-thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">Tryout Bahasa Inggris</h5>
                                <p class="card-text">Durasi: 45 menit</p>
                                <p class="card-text">Deskripsi: Deskripsi tryout akan ditampilkan di sini.</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                    data-target="#tryoutModal2">Ikuti Tryout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan card tryout lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>

    <!-- Modal Ikuti Tryout 1 -->
    <div class="modal fade" id="tryoutModal1" tabindex="-1" role="dialog" aria-labelledby="tryoutModal1Label"
        aria-hidden="true">
        <!-- Isi modal sama seperti sebelumnya -->
    </div>

    <!-- Modal Ikuti Tryout 2 -->
    <div class="modal fade" id="tryoutModal2" tabindex="-1" role="dialog" aria-labelledby="tryoutModal2Label"
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
