@extends('layouts.main')
@section('title', 'Daftar Program')

@section('css')
    <link href="{{ asset('/assets/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            Daftar Program
        </div>
        <div class="content-wrapper">
            <section id="pricing" class="pricing">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <h2>Bulanan</h2>
                        @foreach ($programs as $program)
                            @if ($program->jangka_waktu === 'Bulan')
                                <div class="col-lg-3 col-md-6 {{ $loop->iteration >= 5 ? 'mt-4' : '' }}">
                                    <div class="box {{ $program->style === 'Featured' ? 'Featured' : '' }}">
                                        @if ($program->label === 'y')
                                            <span class="advanced">{{ $program->info_label }}</span>
                                        @endif
                                        <h3>{{ $program->nama }}</h3>
                                        <h4><sup>Rp</sup>{{ $program->harga }}<span> / bulan</span></h4>
                                        <ul>
                                            <li>{{ $program->jml_pertemuan }}x Pertemuan/Minggu</li>
                                            <li>{{ $program->waktu_pertemuan }} Menit/Pertemuan</li>
                                            <li @if ($program->na_info_1 === 'y') class="na" @endif>
                                                {{ $program->info_1 }}
                                            </li>
                                            <li @if ($program->na_info_2 === 'y') class="na" @endif>
                                                {{ $program->info_2 }}
                                            </li>
                                            <li @if ($program->na_info_3 === 'y') class="na" @endif>
                                                {{ $program->info_3 }}
                                            </li>
                                        </ul>
                                        <div class="btn-wrap">
                                            <a href="form/" class="btn-buy">Daftar</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <h2>Semesteran</h2>
                        @foreach ($programs as $program)
                            @if ($program->jangka_waktu === 'Semester')
                                <div class="col-lg-3 col-md-6 {{ $loop->iteration >= 5 ? 'mt-4' : '' }}">
                                    <div class="box {{ $program->style === 'Featured' ? 'Featured' : '' }}">
                                        @if ($program->label === 'y')
                                            <span class="advanced">{{ $program->info_label }}</span>
                                        @endif
                                        <h3>{{ $program->nama }}</h3>
                                        <h4><sup>Rp</sup>{{ $program->harga }}<span> / bulan</span></h4>
                                        <ul>
                                            <li>{{ $program->jml_pertemuan }}x Pertemuan/Minggu</li>
                                            <li>{{ $program->waktu_pertemuan }} Menit/Pertemuan</li>
                                            <li @if ($program->na_info_1 === 'y') class="na" @endif>
                                                {{ $program->info_1 }}
                                            </li>
                                            <li @if ($program->na_info_2 === 'y') class="na" @endif>
                                                {{ $program->info_2 }}
                                            </li>
                                            <li @if ($program->na_info_3 === 'y') class="na" @endif>
                                                {{ $program->info_3 }}
                                            </li>
                                        </ul>
                                        <div class="btn-wrap">
                                            <a href="form/" class="btn-buy">Daftar</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section><!-- End Pricing Section -->

        </div>


    </div>
@endsection
@section('js')
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/pages/index.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('/assets/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/assets/aos/aos.js') }}"></script>
    <script src="{{ asset('/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
@endsection
@section('runjs')
@endsection
