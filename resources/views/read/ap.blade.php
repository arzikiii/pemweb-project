@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>asesor pendaftar</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id asesor jenis sertifikasi</th>
                        <th scope="col">id pendaftar</th>
                        <th scope="col">hasil</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ap as $ap)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ap -> id_asesor_jenis_sertifikasi}}</td>
                        <td>{{$ap -> id_pendaftar}}</td>
                        <td>{{$ap -> hasil}}</td>
                        <td>
                        <a href="/dataap/{{$ap->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataap/{{$ap->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                @hasanyrole('admin|asesor')
                <a href="{{ url('/index/ap') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
