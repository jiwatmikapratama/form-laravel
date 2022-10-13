<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswa_list' => $mahasiswas]);
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tempatlahir = $request->tempatlahir;
        $mahasiswa->tanggallahir = $request->tanggallahir;
        $mahasiswa->jeniskelamin = $request->jeniskelamin;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->hobi = json_encode($request->hobi) ;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect('/')->with('message', 'Data Berhasil Ditambahkan');
        // 'nama' => $request->nama,
        // 'tempatlahir' => $request->tempatlahir,
        // 'tanggallahir' => $request->tanggallahir,
        // 'jeniskelamin' => $request->jeniskelamin,
        // 'prodi' => $request->prodi,
        // 'hobi' => $request->hobi,
        // 'alamat' => $request->alamat,

    }

    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMahasiswaRequest  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
