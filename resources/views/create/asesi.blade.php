@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/asesi">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group my-3">
                        <label for="nim">nim</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nim">
                    </div>
                    <div class="form-group my-3">
                        <label for="nik">nik</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan nik">
                    </div>
                    <div class="form-group my-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group my-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Laki-Laki/Perempuan">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_ref_negara">id ref negara</label>
                        <input type="text" class="form-control" id="id_ref_negara" name="id_ref_negara" placeholder="id negara">
                    </div>
                    <div class="form-group my-3">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat">
                    </div>
                    <div class="form-group my-3">
                        <label for="no_telpon">no telepon</label>
                        <input type="tel" class="form-control" id="no_telpon" name="no_telpon" placeholder="masukkan nomor telepon">
                    </div>
                    <div class="form-group my-3">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="masukkan email">
                    </div>
                    <div class="form-group my-3">
                        <label for="kualifikasi_pendidikan">Kualifikasi Pendidikan</label>
                        <input type="text" class="form-control" id="kualifikasi_pendidikan" name="kualifikasi_pendidikan" placeholder="Pendidikan">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_unit">nomor unit</label>
                        <input type="number" class="form-control" id="id_unit" name="id_unit" placeholder="nomor unit">
                    </div>
                    <!-- <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="form-group my-3">
                        <label for="edited_by">Editor</label>
                        <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="Kosongkan bila pertama mengisi">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_user">user id</label>
                        <input type="number" class="form-control" id="id_user" name="id_user" placeholder="user id">
                    </div> -->
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index/dataasesi') }}" class="btn bg-warning my-3">Lihat Data</a>
                    <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
                </form>
            </div>
        </div>
    </div>
@endsection