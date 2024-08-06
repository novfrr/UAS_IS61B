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
        $nomor = 1 ;
        $pen = Pendaftaran::all();
        return view('admin.pendaftaran.index', compact('pen', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pendaftaran.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pen = new Pendaftaran;
        $pen->nama = $request->nama;
        $pen->jk = $request->jk;
        $pen->nisn = $request->nisn;
        $pen->nik = $request->nik;
        $pen->tempat_lahir = $request->tempat_lahir;
        $pen->tgl_lahir = $request->tgl_lahir;
        $pen->agama = $request->agama;
        $pen->alamat = $request->alamat;
        $pen->tempat_tinggal = $request->tempat_tinggal;
        $pen->no_hp = $request->no_hp;
        $pen->no_kps = $request->no_kps;
        $pen->asal_sek = $request->asal_sek;

        $pen->nm_ayah = $request->nm_ayah;
        $pen->nm_ibu = $request->nm_ibu;
        $pen->umur_ayah = $request->umur_ayah;
        $pen->umur_ibu = $request->umur_ibu;
        $pen->pekerjaan_ayah = $request->pekerjaan_ayah;
        $pen->pekerjaan_ibu = $request->pekerjaan_ibu;
        $pen->penghasilan_ayah = $request->penghasilan_ayah;
        $pen->penghasilan_ibu = $request->penghasilan_ibu;
        $pen->ket_ayah = $request->ket_ayah;
        $pen->ket_ibu = $request->ket_ibu;

        $pen->tinggi = $request->tinggi;
        $pen->berat = $request->berat;
        $pen->jarak_tempuh = $request->jarak_tempuh;
        $pen->anak_ke = $request->anak_ke;
        $pen->jumlah_saudara = $request->jumlah_saudara;

        $pen->ijazah = $request->ijazah;
        $pen->kks_kps = $request->kks_kps;
        $pen->kk = $request->kk;
        $pen->foto = $request->foto;
        $pen->save();

        $request->ijazah->move('ijazah',$request->ijazah->getClientOriginalName());
        $request->kks_kps->move('kks_kps',$request->kks_kps->getClientOriginalName());
        $request->kk->move('kk',$request->kk->getClientOriginalName());
        $request->foto->move('foto',$request->foto->getClientOriginalName());

        return Redirect::route('register.show', ['nisn' => $siswa->nisn]);

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
        return view('admin.pendaftaran.edit',compact('pen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pen = Pendaftaran::find($id);
        $pen->nama = $request->nama;
        $pen->jk = $request->jk;
        $pen->nisn = $request->nisn;
        $pen->nik = $request->nik;
        $pen->tempat_lahir = $request->tempat_lahir;
        $pen->tgl_lahir = $request->tgl_lahir;
        $pen->agama = $request->agama;
        $pen->alamat = $request->alamat;
        $pen->tempat_tinggal = $request->tempat_tinggal;
        $pen->no_hp = $request->no_hp;
        $pen->no_kps = $request->no_kps;
        $pen->asal_sek = $request->asal_sek;

        $pen->nm_ayah = $request->nm_ayah;
        $pen->nm_ibu = $request->nm_ibu;
        $pen->umur_ayah = $request->umur_ayah;
        $pen->umur_ibu = $request->umur_ibu;
        $pen->pekerjaan_ayah = $request->pekerjaan_ayah;
        $pen->pekerjaan_ibu = $request->pekerjaan_ibu;
        $pen->penghasilan_ayah = $request->penghasilan_ayah;
        $pen->penghasilan_ibu = $request->penghasilan_ibu;
        $pen->ket_ayah = $request->ket_ayah;
        $pen->ket_ibu = $request->ket_ibu;

        $pen->tinggi = $request->tinggi;
        $pen->berat = $request->berat;
        $pen->jarak_tempuh = $request->jarak_tempuh;
        $pen->anak_ke = $request->anak_ke;
        $pen->jumlah_saudara = $request->jumlah_saudara;

        $pen->ijazah = $request->ijazah;
        $pen->kks_kps = $request->kks_kps;
        $pen->kk = $request->kk;
        $pen->foto = $request->foto;
        $pen->save();

        $request->ijazah->move('ijazah',$request->ijazah->getClientOriginalName());
        $request->kks_kps->move('kks_kps',$request->kks_kps->getClientOriginalName());
        $request->kk->move('kk',$request->kk->getClientOriginalName());
        $request->foto->move('foto',$request->foto->getClientOriginalName());

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
