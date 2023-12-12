@extends('layouts.home')

@section('body')
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Zenify Academy,<br>Bimbingan Belajar Online dan Offline Terbaik di Surakarta</h1>
            <a href="index.php?page=program" class="btn-get-started">Daftar Sekarang</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up" data-mdb-animation-start="onLoad">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/bimbel.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Bimbingan Belajar Zenify Academy</h3>
                        <p class="fst-italic">
                            Bimbingan Belajar untuk SD, SMP, SMA, dan Umum. Juga melayani les privat di area Surakarta.
                            Kami melayani les privat untuk semua mata pelajaran atau pelajaran-pelajaran tertentu yang
                            dibutuhkan, seperti Bahasa Inggris, Matematika, Kimia, Fisika, Bahasa inggris, dan lain
                            sebagainya.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Harga Terjangkau.</li>
                            <li><i class="bi bi-check-circle"></i> Fasilitas Lengkap (AC, Wifi, dll).</li>
                            <li><i class="bi bi-check-circle"></i> Pengajar Berkualitas.</li>
                        </ul>
                        <p>
                            Segera daftar bimbingan belajar Zenify Academy sekarang juga.
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="412" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Siswa</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Daftar Mapel</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pengajar</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Mengapa memilih Zenify Academy?</h3>
                            <p>
                                Zenify Academy menggunakan sistem pembelajaran baru dan produk program baru. Zenify Academy memfokuskan
                                kinerja berfikir siswa melalui sistem PAIKEM (Pembelajaran Aktif, Inovatif, Kreative,
                                Efektif dan Menyenangkan) untuk menuju sebuah pemahaman siswa otak kanan dan kiri.
                            </p>
                            <div class="text-center">
                                <a href="index.php?page=tentang" class="more-btn">Tentang Kami <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Modul Lengkap</h4>
                                        <p>Kami memiliki ribuan modul pembelajaran yang dapat diakses oleh siswa</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Pengajar Profesional</h4>
                                        <p>Semua pengajar Zenify Academy merupakan pengajar profesional pada bidangnya</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-chat"></i>
                                        <h4>Bebas Konsultasi</h4>
                                        <p>Siswa bebas melakukan konsultasi seputas pembelajaran ataupun non pembelajaran
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

    </main><!-- End #main -->
@endsection