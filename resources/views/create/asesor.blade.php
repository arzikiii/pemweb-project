@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Asesor</h1>
                <hr>
                <form method="POST" action="/index/asesor">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="masukkan nama lengkap" value="{{old('nama')}}">
                        @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control  @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="masukkan NIM" value="{{old('nim')}}">
                        @error('nim') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control  @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="masukkan NIK" value="{{old('nik')}}">
                        @error('nik') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" placeholder="tempat lahir" value="{{old('tempat_lahir')}}">
                        @error('tempat_lahir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}">
                        @error('tanggal_lahir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control  @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" placeholder="Laki-Laki/Perempuan" value="{{old('jenis_kelamin')}}">
                        @error('jenis_kelamin') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="masukkan alamat" value="{{old('alamat')}}">
                        @error('alamat') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="no_telpon">No HP/Telepon</label>
                        <input type="tel" class="form-control  @error('no_telpon') is-invalid @enderror" id="no_telpon" name="no_telpon" placeholder="masukkan no telepon" value="{{old('no_telpon')}}">
                        @error('no_telpon') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="masukkan email" value="{{old('email')}}">
                        @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary" style="color: white">Tambah Data</button>
                    @hasrole('admin')
                    <a href="{{ url('/index/dataasesor') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
                    @endhasrole
                    <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
                </form>
            </div>
        </div>
    </div>
@endsection
