<?php

namespace App\Http\Controllers;

use App\Direktorat;
use Illuminate\Http\Request;

class DirektoratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direktorat = Direktorat::all();
        return view('direktorat.index', ['judul' => 'direktorat', 'direktorat' => $direktorat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direktorat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->image;
        $file_name = $file->getClientOriginalName();

        $direktorat = Direktorat::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'image' => 'public/uploads' . $file_name
        ]);

        $file->move('public/uploads', $file_name);
        return redirect('/direktorat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Direktorat $direktorat)
    {
        return view('direktorat.detail', ['detail' => 'Detail direktorat', 'direktorat' => $direktorat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Direktorat $direktorat)
    {
        return view('direktorat.edit', ['direktorat' => $direktorat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direktorat $direktorat)
    {
        $file = $request->image;
        $file_name = $file->getClientOriginalName();

        $direktorat::where('id', $direktorat->id)
            ->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'image' => 'public/uploads' . $file_name
            ]);

        $file->move('public/uploads', $file_name);
        return redirect('/direktorat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direktorat $direktorat)
    {
        Direktorat::destroy($direktorat->id);
        return redirect('/direktorat');
    }
}
