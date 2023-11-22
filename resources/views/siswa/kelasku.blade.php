@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="../vendor/chart.js/Chart.min.css">
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            Kelas Saya
        </div>
        <div class="content-wrapper">
            <!-- Konten Kelas Saya -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Daftar Ruang Kelas -->
                        <div class="col-md-10">
                            <h5 class="mb-1">Matematika Dasar</h5>
                            <p class="mb-1">Dr. Instruktur</p>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="#" class="btn btn-primary">Masuk Kelas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-10">
                            <h5 class="mb-1">Fisika Lanjut</h5>
                            <p class="mb-1">Prof. Instruktur</p>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="#" class="btn btn-primary">Masuk Kelas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-10">
                            <h5 class="mb-1">Bahasa Inggris Intermediate</h5>
                            <p class="mb-1">Drs. Instruktur</p>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="#" class="btn btn-primary">Masuk Kelas</a>
                        </div>
                        <!-- Tambahkan item ruang kelas lainnya sesuai kebutuhan -->
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
