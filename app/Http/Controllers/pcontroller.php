<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.p');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $p = new pendaftar;
		// $p->id_penawaran_sertifikasi = $request->id_penawaran_sertifikasi;
		// $p->id_asesi = $request->id_asesi;
		// $p->status_akhir_sertifikasi = $request->status_akhir_sertifikasi;
		// $p->tanggal_status_akhir = $request->tanggal_status_akhir;
		// $p->created_by = $request->created_by;
		// $p->edited_by = $request->edited_by;
		// $p->status_pendaftaran = $request->status_pendaftaran;
        // $p->save();

        pendaftar::create($request->all());

		return redirect('/index/p')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftar $pendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftar $pendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftar $pendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftar $pendaftar)
    {
        //
    }
}