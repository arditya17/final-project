<?php

namespace App\Http\Controllers;
use App\Magang;
use Illuminate\Http\Request;

class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magang = Magang::all();
        return view('magang.index', ['judul' => 'magang', 'magang' => $magang]);
    }
    public function index2()
    {
        $magang = Magang::all();
        return view('akun.perusahaan', ['judul' => 'magang', 'magang' => $magang]);
    }
    public function index3()
    {
        $magang = Magang::all();
        return view('akun.mahasiswa', ['judul' => 'magang', 'magang' => $magang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        magang::create($request->all());
        return redirect('/magang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function show(Magang $magang)
    {
        return view('magang.detail', ['detail' => 'Detail magang','magang' => $magang]);
    }

    public function show2(Magang $magang)
    {
        return view('akun.perusahaanDetail', ['detail' => 'Detail magang','magang' => $magang]);
    }

    public function show3(Magang $magang)
    {
        return view('akun.mahasiswaDetail', ['detail' => 'Detail magang','magang' => $magang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function edit(Magang $magang)
    {
        return view('magang.edit', ['magang' => $magang]);
    }

    public function edit2(Magang $magang)
    {
        return view('akun.perusahaanEdit', ['magang' => $magang]);
    }

    public function edit3(Magang $magang)
    {
        return view('akun.mahasiswaEdit', ['magang' => $magang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magang $magang)
    {
        $magang::where('id', $magang->id)
        ->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_mhs1' => $request->nama_mhs1,
            'nama_mhs2' => $request->nama_mhs2,
            'nama_mhs3' => $request->nama_mhs3,
            'nama_mhs4' => $request->nama_mhs4,
            'nama_mhs5' => $request->nama_mhs5
        ]);
        return redirect('/magang');
    }

    public function update2(Request $request, Magang $magang)
    {
        $magang::where('id', $magang->id)
        ->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_mhs1' => $request->nama_mhs1,
            'nama_mhs2' => $request->nama_mhs2,
            'nama_mhs3' => $request->nama_mhs3,
            'nama_mhs4' => $request->nama_mhs4,
            'nama_mhs5' => $request->nama_mhs5
        ]);
        return redirect('/berandaPerusahaan');
    }

    public function update3(Request $request, Magang $magang)
    {
        $magang::where('id', $magang->id)
        ->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_mhs1' => $request->nama_mhs1,
            'nama_mhs2' => $request->nama_mhs2,
            'nama_mhs3' => $request->nama_mhs3,
            'nama_mhs4' => $request->nama_mhs4,
            'nama_mhs5' => $request->nama_mhs5
        ]);
        return redirect('/berandaMahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function destroy(magang $magang)
    {
        Magang::destroy($magang->id);
        return redirect('/magang');
    }
}
