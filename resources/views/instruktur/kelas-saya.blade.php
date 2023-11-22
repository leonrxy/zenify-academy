@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .class-container {
            margin-top: 20px;
        }

        .class-card {
            margin-bottom: 20px;
        }

        .class-card-header {
            background-color: #007bff;
            color: #fff;
        }

        .class-card-body {
            padding: 20px;
        }

        .class-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .class-info {
            flex: 1;
        }

        .class-info h5 {
            margin-bottom: 5px;
            color: #333;
        }

        .class-info p {
            margin-bottom: 10px;
            color: #777;
        }

        .class-actions {
            text-align: right;
        }
    </style>
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Kelas Saya
        </div>
        <div class="class-container">
            <!-- Konten Kelas Saya -->
            <div class="class-card">
                <div class="card">
                    <div class="card-header class-card-header">
                        Matematika Dasar
                    </div>
                    <div class="card-body class-card-body">
                        <div class="class-details">
                            <div class="class-info">
                                <h5 class="mb-1">Dr. Instruktur</h5>
                                <p class="mb-1">Jumlah Siswa: 30</p>
                            </div>
                            <div class="class-actions">
                                <a href="#" class="btn btn-success">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-card">
                <div class="card">
                    <div class="card-header class-card-header">
                        Fisika Lanjut
                    </div>
                    <div class="card-body class-card-body">
                        <div class="class-details">
                            <div class="class-info">
                                <h5 class="mb-1">Prof. Instruktur</h5>
                                <p class="mb-1">Jumlah Siswa: 25</p>
                            </div>
                            <div class="class-actions">
                                <a href="#" class="btn btn-success">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-card">
                <div class="card">
                    <div class="card-header class-card-header">
                        Bahasa Inggris Intermediate
                    </div>
                    <div class="card-body class-card-body">
                        <div class="class-details">
                            <div class="class-info">
                                <h5 class="mb-1">Drs. Instruktur</h5>
                                <p class="mb-1">Jumlah Siswa: 20</p>
                            </div>
                            <div class="class-actions">
                                <a href="#" class="btn btn-success">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan card kelas lainnya sesuai kebutuhan -->
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('runjs')
@endsection
