<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pen = Pendaftaran::all();
        return view('admin.datasiswa.index',compact('nomor','pen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pen = Pendaftaran::all();
        return view('admin.datasiswa.form',compact('pen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pen = new Pendaftaran;
        $pen->nisn = $request->nisn;
        $pen->nik = $request->nik;
        $pen->nama = $request->nama;
        $pen->tempat = $request->tempat;
        $pen->tgl_lahir = $request->tgl_lahir;
        $pen->agama = $request->agama;
        $pen->alamat = $request->alamat;
        $pen->tempat_tinggal = $request->tempat_tinggal;
        $pen->transportasi = $request->transportasi;
        $pen->no_kps = $request->no_kps;
        $pen->asal_sek = $request->asal_sek;

        $pen->nm_ayah = $request->nm_ayah;
        $pen->tgl_ayah = $request->tgl_ayah;
        $pen->pendidikan_ayah = $request->pendidikan_ayah;
        $pen->pekerjaan_ayah = $request->pekerjaan_ayah;
        $pen->penghasilan_ayah = $request->penghasilan_ayah;
        $pen->ket_ayah = $request->ket_ayah;
        $pen->nm_ibu= $request->nm_ibu;
        $pen->tgl_ibu= $request->tgl_ibu;
        $pen->pendidikan_ibu= $request->pendidikan_ibu;
        $pen->pekerjaan_ibu= $request->pekerjaan_ibu;
        $pen->penghasilan_ibu= $request->penghasilan_ibu;
        $pen->ket_ibu= $request->ket_ibu;

        $pen->tinggi = $request->tinggi;
        $pen->berat = $request->berat;
        $pen->jarak = $request->jarak;
        $pen->waktu_tempuh = $request->waktu_tempuh;
        $pen->anak_ke = $request->anak_ke;
        $pen->jumlah_saudara = $request->jumlah_saudara;

        $pen->ijazah = $request->ijazah->getClientOriginalName();
        $pen->foto = $request->foto->getClientOriginalName();
        $pen->kk = $request->kk->getClientOriginalName();
        $pen->kps = $request->kps->getClientOriginalName();
        $pen->password = bcrypt($request->password);
        $pen->save();

        $request->foto->move('foto',$request->foto->getClientOriginalName());
        $request->ijazah->move('ijazah',$request->ijazah->getClientOriginalName());
        $request->kk->move('kk',$request->kk->getClientOriginalName());
        $request->kps->move('kps',$request->kps->getClientOriginalName());

        return redirect('/pendaftaran')->with('success','Data Berhasil Ditambahkan');

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
        $pen = Pendaftaran::find($id);
        return view('admin.datasiswa.edit',compact('pen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pen = Pendaftaran::find($id);
        $pen->nisn = $request->nisn;
        $pen->nik = $request->nik;
        $pen->nama = $request->nama;
        $pen->tempat = $request->tempat;
        $pen->tgl_lahir = $request->tgl_lahir;
        $pen->agama = $request->agama;
        $pen->alamat = $request->alamat;
        $pen->tempat_tinggal = $request->tempat_tinggal;
        $pen->transportasi = $request->transportasi;
        $pen->no_kps = $request->no_kps;
        $pen->asal_sek = $request->asal_sek;

        $pen->nm_ayah = $request->nm_ayah;
        $pen->tgl_ayah = $request->tgl_ayah;
        $pen->pendidikan_ayah = $request->pendidikan_ayah;
        $pen->pekerjaan_ayah = $request->pekerjaan_ayah;
        $pen->penghasilan_ayah = $request->penghasilan_ayah;
        $pen->ket_ayah = $request->ket_ayah;
        $pen->nm_ibu= $request->nm_ibu;
        $pen->tgl_ibu= $request->tgl_ibu;
        $pen->pendidikan_ibu= $request->pendidikan_ibu;
        $pen->pekerjaan_ibu= $request->pekerjaan_ibu;
        $pen->penghasilan_ibu= $request->penghasilan_ibu;
        $pen->kat_ibu= $request->ket_ibu;

        $pen->tinggi = $request->tinggi;
        $pen->berat = $request->berat;
        $pen->jarak = $request->jarak;
        $pen->waktu_tempuh = $request->waktu_tempuh;
        $pen->anak_ke = $request->anak_ke;
        $pen->jumlah_saudara = $request->jumlah_saudara;

        $pen->ijazah = $request->ijazah->getClientOriginalName();
        $pen->foto = $request->foto->getClientOriginalName();
        $pen->kk = $request->kk->getClientOriginalName();
        $pen->kps = $request->kps->getClientOriginalName();
        $pen->password = bcrypt($request->password);
        $pen->save();

        $request->foto->move('foto',$request->foto->getClientOriginalName());
        $request->ijazah->move('ijazah',$request->ijazah->getClientOriginalName());
        $request->kk->move('kk',$request->kk->getClientOriginalName());
        $request->kk->move('kps',$request->kps->getClientOriginalName());

        return redirect('/pendaftaran');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pen = Pendaftaran::find($id);
        $pen->delete();

        return redirect('/pendaftaran');
    }
}
