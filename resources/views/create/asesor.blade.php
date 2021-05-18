@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/asesor">
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
                    <button type="submit" class="btn bg-primary">Tambah Data</button>
                    <a href="{{ url('/index/dataasesor') }}" class="btn bg-warning my-3">Lihat Data</a>
                    <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
                </form>
            </div>
        </div>
    </div>
@endsection