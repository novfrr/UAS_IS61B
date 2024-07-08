<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $pen = Pendaftaran::all();
        return view('pendaftaran.index',compact('nomor','pen'));
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:pendaftarans,nis',
            'nama' => 'required',
            'password' => 'required|min:6',
            'jk' => 'required',
            'agama' => 'required',
            'tempat' => 'required',
            'tgl' => 'required|date',
            'alamat' => 'required',
            'nm_ibu' => 'required',
            'nm_ayah' => 'required'
        ]);

        Pendaftaran::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'jk' => $request->jk,
            'agama' => $request->agama,
            'tempat' => $request->tempat,
            'tgl' => $request->tgl,
            'alamat' => $request->alamat,
            'nm_ibu' => $request->nm_ibu,
            'nm_ayah' => $request->nm_ayah
        ]);

        return redirect('/pendaftaran')->with('success', 'Data pendaftaran berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $pen = Pendaftaran::find($id);
        if ($pen) {
            return view('pendaftaran.edit', compact('pen'));
        } else {
            return redirect('/pendaftaran/')->withErrors('Data tidak ditemukan');
        }
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nis' => 'required|unique:pendaftarans,nis,'.$id,
            'nama' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tempat' => 'required',
            'tgl' => 'required|date',
            'alamat' => 'required',
            'nm_ibu' => 'required',
            'nm_ayah' => 'required'
        ]);

        $pen = Pendaftaran::find($id);
        if ($pen) {
            $pen->nis = $request->nis;
            $pen->nama = $request->nama;
            $pen->jk = $request->jk;
            $pen->agama = $request->agama;
            $pen->tempat = $request->tempat;
            $pen->tgl = $request->tgl;
            $pen->alamat = $request->alamat;
            $pen->nm_ibu = $request->nm_ibu;
            $pen->nm_ayah = $request->nm_ayah;
            $pen->save();
        } else {
            return redirect('/pendaftaran/')->withErrors('Data tidak ditemukan');
        }

        return redirect('/pendaftaran/');
    }

    public function destroy(string $id)
    {
        $pen = Pendaftaran::find($id);
        $pen->delete();

        return redirect('/pendaftaran/');
    }
}
