<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
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
        Transaksi::create([
            'santri_id' => $request->santri_id,
            'asrama_id' => $request->asrama_id,
            'detail_pembayaran' => $request->detail_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'bukti_pembayaran' => $request->bukti_pembayaran,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        Transaksi::find($transaksi['id'])->update([
            'santri_id' => $request->santri_id,
            'asrama_id' => $request->asrama_id,
            'detail_pembayaran' => $request->detail_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'bukti_pembayaran' => $request->bukti_pembayaran,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        Transaksi::find($transaksi['id'])->delete();
    }
}
