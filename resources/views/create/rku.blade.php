@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <hr>
                <form method="POST" action="/index/rku">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="pertanyaan">pertanyaan</label>
                        <textarea type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" name="pertanyaan" placeholder="Masukkan pertanyaan kegiatan">{{old('pertanyaan')}}</textarea>
                        @error('pertanyaan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    @hasrole('admin')
                    <a href="{{ url('/index/datarku') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
                    @endhasrole
                    <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
                </form>
            </div>
        </div>
    </div>
@endsection
