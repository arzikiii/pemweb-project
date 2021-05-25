<?php

namespace App\Http\Controllers;

use App\Models\asesorjenissertifikasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ajscontroller extends Controller
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
        $ajs = asesorjenissertifikasi::all();
        return view('read.ajs', compact('ajs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.ajs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ajs = new asesorjenissertifikasi;
		// $ajs->id_asesor = $request->id_asesor;
		// $ajs->id_ref_jenis_sertifikasi = $request->id_ref_jenis_sertifikasi;
		// $ajs->tanggal_awal_berlaku = $request->tanggal_awal_berlaku;
		// $ajs->tanggal_akhir_berlaku = $request->tanggal_akhir_berlaku;
		// $ajs->no_sertifikat = $request->no_sertifikat;

        asesorjenissertifikasi::create($request->all());

		return redirect('/index/ajs')->with('status', 'data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(asesorjenissertifikasi $asesorjenissertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(asesorjenissertifikasi $asesorjenissertifikasi)
    {
        return view('edit.ajs', compact('asesorjenissertifikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asesorjenissertifikasi $asesorjenissertifikasi)
    {
             asesorjenissertifikasi::where('id', $asesorjenissertifikasi->id)
            ->update([
                'id_asesor' => $request->id_asesor,
                'id_ref_jenis_sertifikasi' => $request->id_ref_jenis_sertifikasi,
                'tanggal_awal_berlaku' => $request->tanggal_awal_berlaku,
                'tanggal_akhir_berlaku' => $request->tanggal_akhir_berlaku,
                'no_sertifikat' => $request->no_sertifikat
            ]);
        return redirect('/index/dataajs')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asesorjenissertifikasi  $asesorjenissertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(asesorjenissertifikasi $asesorjenissertifikasi)
    {
        asesorjenissertifikasi::destroy($asesorjenissertifikasi->id);
        return redirect('/index/dataajs')->with('status', 'data berhasil dihapus');
    }
}
