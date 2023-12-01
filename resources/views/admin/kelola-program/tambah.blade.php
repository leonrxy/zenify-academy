@extends('layouts.main')

@section('css')
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Tambah Program
        </div>
        <div class="content-wrapper">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.kelola-program.tambahProgram') }}" method="post" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Program</label>
                                <input type="text" id="nama" name="nama" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" id="harga" name="harga" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jangka Waktu</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jangka_waktu" id="Bulan"
                                        value="Bulan" checked />
                                    <label class="form-check-label" for="Bulan">
                                        Bulan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jangka_waktu" id="Semester"
                                        value="Semester" />
                                    <label class="form-check-label" for="Semester">
                                        Semester
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jumlah Pertemuan</label>
                                <input type="number" name="jml_pertemuan" id="jml_pertemuan" class="form-control"
                                    placeholder="Per Minggu">
                            </div>

                            <div class="form-group">
                                <label>Waktu Pertemuan</label>
                                <input type="number" name="waktu_pertemuan" id="waktu_pertemuan" class="form-control"
                                    placeholder="Menit/Pertemuan">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 1</label>
                                <input type="text" name="info_1" id="info_1" class="form-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="na_info_1"
                                        name="na_info_1">
                                    <label class="form-check-label" for="na_info_1">
                                        Coret Deskripsi
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 2</label>
                                <input type="text" name="info_2" id="info_2" class="form-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="na_info_2"
                                        name="na_info_2">
                                    <label class="form-check-label" for="na_info_2">
                                        Coret Deskripsi
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 3</label>
                                <input type="text" name="info_3" id="info_3" class="form-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="na_info_3"
                                        name="na_info_3">
                                    <label class="form-check-label" for="na_info_3">
                                        Coret Deskripsi
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Style</label>
                                <select name="style" id="style" class="form-control" required>
                                    <option selected disabled hidden value="">Pilih Style</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Featured">Featured</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Label</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="label"
                                        name="label">
                                    <label class="form-check-label" for="label">
                                        Tambahkan Label
                                    </label>
                                </div>
                                <input type="text" name="info_label" id="info_label" class="form-control" disabled>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3" name="submit" value="simpan">Simpan
                                Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        document.getElementById('label').onchange = function() {
            document.getElementById('info_label').disabled = !this.checked;
        };
    </script>
@endsection
@section('runjs')
@endsection
