<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Client;
use App\konsentrasi;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // jaringan
        $judul1 = DB::table('konsentrasi')->where('id', '1')->get();
        $deskripsi_1 = DB::table('konsentrasi')->where('id', '1')->get();
        $deskripsi_2 = DB::table('konsentrasi')->where('id', '1')->get();

        // web
        $judul2 = DB::table('konsentrasi')->where('id', '3')->get();
        $deskripsi_3 = DB::table('konsentrasi')->where('id', '3')->get();
        $deskripsi_4 = DB::table('konsentrasi')->where('id', '3')->get();

        // Animasi
        $judul3 = DB::table('konsentrasi')->where('id', '4')->get();
        $deskripsi_5 = DB::table('konsentrasi')->where('id', '4')->get();
        $deskripsi_6 = DB::table('konsentrasi')->where('id', '4')->get();

        // Fasilitas
        $fasilitas_1 = DB::table('fasilitas')->where('id', '1')->get();
        $fasilitas_2 = DB::table('fasilitas')->where('id', '2')->get();
        $fasilitas_3 = DB::table('fasilitas')->where('id', '3')->get();
        $fasilitas_4 = DB::table('fasilitas')->where('id', '4')->get();

        // $judul1 = Konsentrasi::where('id', '1')->get();
        return view(
            'client.index',
            [
                'judul1' => $judul1, 'deskripsi_1' => $deskripsi_1, 'deskripsi_2' => $deskripsi_2,
                'judul2' => $judul2, 'deskripsi_3' => $deskripsi_3, 'deskripsi_4' => $deskripsi_4,
                'judul3' => $judul3, 'deskripsi_5' => $deskripsi_5, 'deskripsi_6' => $deskripsi_6,
                'fasilitas_1' => $fasilitas_1, 'fasilitas_2' => $fasilitas_2, 'fasilitas_3' => $fasilitas_3, 'fasilitas_4' => $fasilitas_4
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function konsentrasi()
    {
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
