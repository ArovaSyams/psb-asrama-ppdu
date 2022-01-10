<?php

namespace App\Http\Controllers;

use App\Models\Asrama;
use Illuminate\Http\Request;

class AsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.asrama.asrama', [
            'asrama' => Asrama::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Asrama::create([
            'nama' => $request->nama,
            'nomor_asrama' => $request->nomor_asrama,
            'pengasuh' => $request->pengasuh,
            'jumlah_santri' => $request->jumlah_santri,
            'deskripsi' => $request->deskripsi,
            'biaya_pendaftaran' => $request->biaya_pendaftaran,
            'biaya_perbulan' => $request->biaya_perbulan,
            'kuota_pendaftaran' => $request->kuota_pendaftaran,
        ]);

        return redirect('asrama');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function show(Asrama $asrama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function edit(Asrama $asrama)
    {
        return view('crud.asrama.edit', [
            'asrama' => $asrama
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asrama $asrama)
    {
        Asrama::find($asrama['id'])->update([
            'nama' => $request->nama,
            'nomor_asrama' => $request->nomor_asrama,
            'pengasuh' => $request->pengasuh,
            'jumlah_santri' => $request->jumlah_santri,
            'deskripsi' => $request->deskripsi,
            'biaya_pendaftaran' => $request->biaya_pendaftaran,
            'biaya_perbulan' => $request->biaya_perbulan,
            'kuota_pendaftaran' => $request->kuota_pendaftaran,
        ]);

        return redirect('asrama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asrama $asrama)
    {
        Asrama::find($asrama['id'])->delete();

        return redirect()->back();
    }
}
