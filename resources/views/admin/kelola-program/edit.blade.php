@extends('layouts.main')

@section('css')
@endsection

@section('body')
    <div class="main-content">
        <div class="title">
            Edit Program
        </div>
        <div class="content-wrapper">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.kelola-program.editProgram', ['id' => $program->id]) }}" method="post" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Program</label>
                                <input type="text" id="nama" name="nama" value="{{ $program->nama }}" required
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" id="harga" name="harga" value="{{ $program->harga }}"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jangka Waktu</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jangka_waktu" id="Bulan"
                                        value="Bulan" @if ($program->jangka_waktu == 'Bulan') checked @endif/>
                                    <label class="form-check-label" for="Bulan">
                                        Bulan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jangka_waktu" id="Semester"
                                        value="Semester" @if ($program->jangka_waktu == 'Semester') checked @endif/>
                                    <label class="form-check-label" for="Semester">
                                        Semester
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jumlah Pertemuan</label>
                                <input type="number" name="jml_pertemuan" id="jml_pertemuan"
                                    value="{{ $program->jml_pertemuan }}" class="form-control" placeholder="Per Minggu">
                            </div>

                            <div class="form-group">
                                <label>Waktu Pertemuan</label>
                                <input type="number" name="waktu_pertemuan" id="waktu_pertemuan"
                                    value="{{ $program->waktu_pertemuan }}" class="form-control"
                                    placeholder="Menit/Pertemuan">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 1</label>
                                <input type="text" name="info_1" id="info_1" value="{{ $program->info_1 }}"
                                    class="form-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="na_info_1"
                                        name="na_info_1" @if ($program->na_info_1 == 'y') checked @endif>
                                    <label class="form-check-label" for="na_info_1">
                                        Coret Deskripsi
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 2</label>
                                <input type="text" name="info_2" id="info_2" value="{{ $program->info_2 }}"
                                    class="form-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="na_info_2"
                                        name="na_info_2" @if ($program->na_info_2 == 'y') checked @endif>
                                    <label class="form-check-label" for="na_info_2">
                                        Coret Deskripsi
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi 3</label>
                                <input type="text" name="info_3" id="info_3" value="{{ $program->info_3 }}"
                                    class="form-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="na_info_3"
                                        name="na_info_3" @if ($program->na_info_3 == 'y') checked @endif>
                                    <label class="form-check-label" for="na_info_3">
                                        Coret Deskripsi
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Style</label>
                                <select name="style" id="style" class="form-control" required>
                                    <option disabled hidden value=""
                                        @if ($program->style == '') selected @endif>Pilih Style</option>
                                    <option value="Normal" @if ($program->style == 'Normal') selected @endif>Normal
                                    </option>
                                    <option value="Featured" @if ($program->style == 'Featured') selected @endif>Featured
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Label</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="y" id="label"
                                        name="label" @if ($program->label == 'y') checked @endif>
                                    <label class="form-check-label" for="label">
                                        Tambahkan Label
                                    </label>
                                </div>
                                <input type="text" name="info_label" id="info_label"
                                    value="{{ $program->info_label }}" class="form-control" disabled>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit" value="simpan">Update
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
    @if (session()->get('success'))
        <script>
            iziToast.success({
                message: '{{ session()->get('success') }}',
                position: 'topRight',
            });
        </script>
    @endif
    @if (session()->get('error'))
        <script>
            iziToast.error({
                message: '{{ session()->get('error') }}',
                position: 'topRight',
            });
        </script>
    @endif
@endsection
@section('runjs')
@endsection
