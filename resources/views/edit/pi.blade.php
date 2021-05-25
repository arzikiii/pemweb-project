@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datapi/{{pendaftarinstrumen->id}}">
                    @csrf
                    @method('put')
					<div class="form-group my-3">
                        <label for="id_pendaftar">id pendaftar</label>
                        <input type="number" class="form-control" id="id_pendaftar" name="id_pendaftar" placeholder="id pendaftar" value="{{$pendaftarinstrumen->id_pendaftar}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_instrumen_asesmen">id instrumen asesmen</label>
                        <input type="number" class="form-control" id="id_instrumen_asesmen" name="id_instrumen_asesmen" placeholder="id instrumen asesmen" value="{{$pendaftarinstrumen->id_instrumen_asesmen}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban_self_asesmen">jawaban self asesmen</label>
                        <textarea type="text" class="form-control" id="jawaban_self_asesmen" name="jawaban_self_asesmen" placeholder="jawaban self asesmen"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="path_bukti">path_bukti</label>
                        <input type="text" class="form-control" id="path_bukti" name="path_bukti" placeholder="Masukkan path bukti" value="{{$pendaftarinstrumen->path_bukti}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="komentar_bukti">komentar bukti</label>
                        <textarea type="text" class="form-control" id="komentar_bukti" name="komentar_bukti" placeholder="komentar bukti"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="jawaban_asesor_verifikasi">jawaban asesor verifikasi</label>
                        <textarea type="text" class="form-control" id="jawaban_asesor_verifikasi" name="jawaban_asesor_verifikasi" placeholder="jawaban asesor verifikasi"></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_by">verify</label>
                        <input type="text" class="form-control" id="verified_by" name="verified_by" placeholder="Masukkan verify" value="{{$pendaftarinstrumen->verified_by}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="verified_at">Tanggal verify</label>
                        <input type="date" class="form-control" id="verified_at" name="verified_at" placeholder="Tanggal verify" value="{{$pendaftarinstrumen->verified_at}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda" value="{{$pendaftarinstrumen->created_by}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="edited_by">Editor</label>
                        <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="Kosongkan bila pertama mengisi" value="{{$pendaftarinstrumen->edited_by}}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection