@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="../vendor/chart.js/Chart.min.css">
    <style>
        .sharing-soal-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .sharing-soal-card {
            text-decoration: none;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .sharing-soal-card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .sharing-soal-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }

        .sharing-soal-card-content {
            padding: 15px;
        }

        .comment-section {
            margin-top: 15px;
        }

        .comment-list {
            list-style-type: none;
            padding: 0;
        }

        .comment {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .comment-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
        }

        .comment-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .comment-text {
            flex: 1;
        }
    </style>
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            Sharing Soal
        </div>
        <div class="content-wrapper">
            <!-- Konten Sharing Soal -->
            <div class="sharing-soal-container">
                <div class="sharing-soal-card" data-toggle="modal" data-target="#soalModal1">
                    <div class="card-body sharing-soal-card-content">
                        <h5 class="card-title">Soal Matematika</h5>
                        <p class="card-text">Kelas: 10</p>
                        <p class="card-text">Berapa hasil penjumlahan 200+44?</p>

                        <!-- Bagian Komentar -->
                        <div class="comment-section">
                            <h6>Komentar</h6>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="comment-avatar">
                                        <img src="{{ asset('assets/images/avatar1.png') }}" alt="User Avatar">
                                    </div>
                                    <div class="comment-text">
                                        <strong>Leonardus Reka</strong> <br>Jawabannya 244.
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-avatar">
                                        <img src="{{ asset('assets/images/avatar2.png') }}" alt="User Avatar">
                                    </div>
                                    <div class="comment-text">
                                        <strong>Najwa Alfan</strong> <br>244.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Bagian Jumlah Menjawab -->
                        <p>Jumlah orang yang sudah menjawab: 2</p>
                    </div>
                </div>

                <div class="sharing-soal-card" data-toggle="modal" data-target="#soalModal1">
                    <div class="card-body sharing-soal-card-content">
                        <h5 class="card-title">Soal Bahasa Inggris</h5>
                        <p class="card-text">Kelas: 8</p>
                        <p class="card-text">My sister is ___________ at painting. She has won several awards for her
                            artwork. </p>

                        <!-- Bagian Komentar -->
                        <div class="comment-section">
                            <h6>Komentar</h6>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="comment-avatar">
                                        <img src="{{ asset('assets/images/avatar1.png') }}" alt="User Avatar">
                                    </div>
                                    <div class="comment-text">
                                        <strong>Jehezkiel</strong> <br>Jawabannya talented.
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-avatar">
                                        <img src="{{ asset('assets/images/avatar2.png') }}" alt="User Avatar">
                                    </div>
                                    <div class="comment-text">
                                        <strong>Iqbal</strong> <br>talented.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Bagian Jumlah Menjawab -->
                        <p>Jumlah orang yang sudah menjawab: 2</p>
                    </div>
                </div>

                <div class="sharing-soal-card" data-toggle="modal" data-target="#soalModal1">
                    <div class="card-body sharing-soal-card-content">
                        <h5 class="card-title">Soal Matematika</h5>
                        <p class="card-text">Kelas: 9</p>
                        <p class="card-text">Sebuah balok memiliki panjang 8 cm, lebar 5 cm, dan tinggi 3 cm. Hitunglah
                            volume balok tersebut. </p>

                        <!-- Bagian Komentar -->
                        <div class="comment-section">
                            <h6>Komentar</h6>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="comment-avatar">
                                        <img src="{{ asset('assets/images/avatar1.png') }}" alt="User Avatar">
                                    </div>
                                    <div class="comment-text">
                                        <strong>Leonardus Reka</strong> <br>V=panjang×lebar×tinggi <br>V=8×5×3 <br>V=120
                                        cm³
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-avatar">
                                        <img src="{{ asset('assets/images/avatar2.png') }}" alt="User Avatar">
                                    </div>
                                    <div class="comment-text">
                                        <strong>Loly Pentauli</strong> <br>120 cm^3.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Bagian Jumlah Menjawab -->
                        <p>Jumlah orang yang sudah menjawab: 2</p>
                    </div>
                </div>

                <!-- Tambahkan card soal lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>

    <!-- Modal Lihat Soal 1 -->
    <div class="modal fade" id="soalModal1" tabindex="-1" role="dialog" aria-labelledby="soalModal1Label"
        aria-hidden="true">
        <!-- Isi modal sama seperti sebelumnya -->
    </div>

    <!-- Modal Lihat Soal 2 -->
    <div class="modal fade" id="soalModal2" tabindex="-1" role="dialog" aria-labelledby="soalModal2Label"
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
