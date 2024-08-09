<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $gur = Guru::all();
        return view('admin.guru.index',compact('nomor','gur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gur = Guru::all();
        return view('admin.guru.form',compact('gur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gur = new Guru;
        $gur->nama_guru = $request->nama;
        $gur->nip = $request->nip;
        $gur->alamat = $request->alamat;
        $gur->no_telp = $request->no_telp;
        $gur->email = $request->email;
        $gur->save();

        return redirect('/guru')->with('success','Data Guru Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gur = Guru::find($id);
        return view('admin.guru.edit',compact('gur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gur = Guru::find($id);
        $gur->nama_guru = $request->nama;
        $gur->nip = $request->nip;
        $gur->alamat = $request->alamat;
        $gur->no_telp = $request->no_telp;
        $gur->email = $request->email;
        $gur->save();

        return redirect('/guru')->with('success','Data Guru Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gur = Guru::find($id);
        $gur->delete();
        return redirect('/guru')->with('success','Data Guru Berhasil Dihapus');
    }
}
