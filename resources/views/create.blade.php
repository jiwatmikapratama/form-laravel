@extends('layouts.main')
@section('container')
    <h2>Tambah Data Mahasiswa</h2>
    <form action="/store" method="post">
        @csrf
        <div class="col-md-8 mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama..." required>
        </div>
        <div class="col-md-8 mb-3">
            <label for="tempatlahir" class="form-label">Tempat Lahir:</label>
            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"
                placeholder="Masukan tempat Lahir..." required>
        </div>
        <div class="col-md-8 mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir"
                placeholder="Masukan tanggallahir..." required>
        </div>
        <div class="col-md-8 mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
            <select id="jenis_kelamin" class="form-select" name="jeniskelamin" required>
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="col-md-8 mb-3">
            <label for="prodi" class="form-label">Prodi:</label>
            <select id="prodi" class="form-select" name="prodi" required>
                <option value="">--Pilih Prodi--</option>
                <option value="S1 Pendidikan Teknik Informatika">S1 Pendidikan Teknik Informatika</option>
                <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                <option value="S1 Ilmu Komputer">S1 Ilmu Komputer</option>
                <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak</option>
                <option value="S1 Pendidikan Kesejahteraan Keluarga">S1 Pendidikan Kesejahteraan Keluarga</option>
                <option value="D4 Teknik Elektronika">D4 Teknik Elektronika</option>
                <option value="S1 Pendidikan Teknik Elektro">S1 Pendidikan Teknik Elektro</option>
                <option value="S1 Pendidikan Teknik Mesin">S1 Pendidikan Teknik Mesin</option>
                <option value="S1 Pendidikan Vokasional Seni Kuliner">S1 Pendidikan Vokasional Seni Kuliner</option>
            </select>
        </div>
        <div class="col-md-8 mb-3">
            <label for="hobi" class="form-label">Hobi:</label>

        </div>
        <div class="col-md-8 mb-3">
            membaca
            <input type="checkbox" id="hobi" name="hobi[]" value="membaca">
            menulis<input type="checkbox" id="hobi" name="hobi[]" value="menulis">
            traveling
            <input type="checkbox" id="hobi" name="hobi[]" value="traveling">
            shoping<input type="checkbox" id="hobi" name="hobi[]" value="shoping">

        </div>
        <div class="col-md-8 mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat..."
                required>
        </div>
        <div class="row">
            <div class="col-md-5 my-4">
                <button type="submit" class="btn btn-success" name="submit" value="save">Tambah Data</button>
                <a class="btn btn-secondary" href="/">Batal</a>
            </div>
        </div>
    </form>
@endsection
