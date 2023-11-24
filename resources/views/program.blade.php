@extends('layouts.home')

@section('body')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Program Bimbingan Belajar</h2>
                <p>Kami memiliki beberapa program bimbingan belajar yang dipercaya dapat memberikan bimbingan yang efisien
                    dan efektif dalam membantu pemahaman siswa. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Pricing Section ======= -->
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
                                        <li @if ($program->na_info_1 === 'y') class="na" @endif>{{ $program->info_1 }}</li>
                                        <li @if ($program->na_info_2 === 'y') class="na" @endif>{{ $program->info_2 }}</li>
                                        <li @if ($program->na_info_3 === 'y') class="na" @endif>{{ $program->info_3 }}</li>
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
                                        <li @if ($program->na_info_1 === 'y') class="na" @endif>{{ $program->info_1 }}</li>
                                        <li @if ($program->na_info_2 === 'y') class="na" @endif>{{ $program->info_2 }}</li>
                                        <li @if ($program->na_info_3 === 'y') class="na" @endif>{{ $program->info_3 }}</li>
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

    </main><!-- End #main -->
@endsection
