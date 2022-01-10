<?php

namespace App\Http\Controllers;

use App\Models\Asrama;
use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.santri.santri', [
            'santri' => Santri::all(),
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
        Santri::create([
            'nama_santri' => $request->nama_santri,
            'asrama_id' => $request->asrama_id,
            'alamat' => $request->alamat,
            'unit_pendidikan' => $request->unit_pendidikan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu
        ]);

        return redirect('santri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(Santri $santri)
    {
        return view('crud.santri.edit', [
            'santri' => $santri,
            'asrama' => Asrama::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Santri $santri)
    {
        Santri::find($santri['id'])->update([
            'nama_santri' => $request->nama_santri,
            'asrama_id' => $request->asrama_id,
            'alamat' => $request->alamat,
            'unit_pendidikan' => $request->unit_pendidikan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu
        ]);

        return redirect('santri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Santri $santri)
    {
        Santri::find($santri['id'])->delete();

        return redirect()->back();
    }
}
