@extends('layouts.home')

@section('body')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Kontak Kami</h2>
                <p>Untuk informasi lengkap serta pendaftaran bimbingan belajar, bisa hubungi kami melalui kontak dibawah
                    atau langsung datang ke kantor kami.</p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1977.6419528386434!2d110.80045775779263!3d-7.543986039644748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzInMzguNCJTIDExMMKwNDgnMDUuNiJF!5e0!3m2!1sid!2sid!4v1679669859179!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi</h4>
                                <p>Jl. Kutai 6B Sumber Banjarsari Surakarta</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email</h4>
                                <p>cs@Zenify Academy.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon/WhatsApp</h4>
                                <p>+62 899 733 6565</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
