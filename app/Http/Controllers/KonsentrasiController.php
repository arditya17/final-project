<?php

namespace App\Http\Controllers;

use App\Konsentrasi;
use Illuminate\Http\Request;

class KonsentrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsentrasi = Konsentrasi::all();
        return view('konsentrasi.index', ['judul' => 'Konsentrasi', 'konsentrasi' => $konsentrasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsentrasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Konsentrasi::create($request->all());
        return redirect('/konsentrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Konsentrasi  $konsentrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konsentrasi $konsentrasi)
    {
        return view('konsentrasi.detail', ['detail' => 'Detail Konsentrasi','konsentrasi' => $konsentrasi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Konsentrasi  $konsentrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsentrasi $konsentrasi)
    {
        return view('konsentrasi.edit', ['konsentrasi' => $konsentrasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Konsentrasi  $konsentrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konsentrasi $konsentrasi)
    {
        $konsentrasi::where('id', $konsentrasi->id)
        ->update([
            'judul' => $request->judul,
            'deskripsi_1' => $request->deskripsi_1,
            'deskripsi_2' => $request->deskripsi_2
        ]);
        return redirect('/konsentrasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Konsentrasi  $konsentrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsentrasi $konsentrasi)
    {
        Konsentrasi::destroy($konsentrasi->id);
        return redirect('/konsentrasi');
    }
}
