@extends('layouts.home')

@section('body')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Simulasi Pembayaran Bimbingan Belajar</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <section class="text-center">
            <div class="form-signup" data-aos="fade-up">
                <div class="container" data-aos="fade-up">
                    <table class="table">
                        <form action="index.php?page=simulasi&go=proses" method="post">
                            <img class="mb-2 mt-3" src="assets/img/book.svg" alt="" width="80" height="80" />
                            <h1 class="h3 mb-3 fw-normal">Simulasi Pembayaran Bimbel</h1>
                            <tr align="left">
                                <td class="align-middle">
                                    Harga Bimbel
                                    <p class="text-muted mb-0">(Masukkan Harga Program Bimbel)</p>
                                </td>
                                <td class="align-middle">
                                    <input name="harga" id="harga" type="number" placeholder="Harga (Rupiah)"
                                        class="form-control" aria-describedby="inputGroupPrepend" required />
                                </td>
                                <td class="align-middle">Rupiah</td>
                            </tr>
                            <tr align="left">
                                <td class="align-middle">Uang Muka / DP
                                    <p class="text-muted mb-0">(30 - 100%)</p>
                                </td>
                                <td class="align-middle">
                                    <input type="number" name="dp" class="form-control" placeholder="Input tanpa (%)"
                                        id="dp" min="30" max="100" required />
                                    <p class="text-muted mb-0">Persen dari harga program bimbel</p>
                                </td>
                                <td>%</td>
                            </tr>

                            <tr align="left">
                                <td class="align-middle">Pilih Program
                                    <p class="text-muted mb-0">(Bulanan/Semesteran)</p>
                                </td>
                                <td class="align-middle">
                                    <select name="program" id="program" class="form-select" required>
                                        <option selected disabled hidden value="">
                                            Pilih Program
                                        </option>
                                        <option value="Bulanan" disabled>B̶u̶l̶a̶n̶a̶n̶</option>
                                        <option value="Semesteran">Semesteran</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tr align="left">
                                <td class="align-middle">Jangka Waktu
                                    <p class="text-muted mb-0">(1-3 Bulan)</p>
                                </td>
                                <td class="align-middle">
                                    <select name="jangkawaktu" id="jangkawaktu" class="form-select" required>
                                        <option selected disabled hidden value="">
                                            Pilih Jangka Waktu
                                        </option>
                                        <option value="1">1 Bulan</option>
                                        <option value="2">2 Bulan</option>
                                        <option value="3">3 Bulan</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="">
                                <td id="button" colspan="3" align="center" class="p-2 no-hover">
                                    <input class="btn btn-lg btn-success mx-auto py-1" type="submit" value="Kalkulasi"
                                        style="width: 20%;" />
                                    <br />
                                    <z>atau</z>
                                    <br />
                                    <input class="btn btn-lg btn-success mx-auto py-1" type="reset" value="Ulangi"
                                        style="width: 20%;" />
                                </td>
                            </tr>
                        </form>
                    </table>
                    <p class="mt-0 text-muted align-top">
                        Simulasi Pembayaran Bimbingan Belajar
                    </p>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
