<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Menampilkan form pendaftaran.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Menangani permintaan pendaftaran.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $this->create($request->all());

        return redirect()->route('home')->with('status', 'Pendaftaran berhasil!');
    }

    /**
     * Mendapatkan validator untuk permintaan pendaftaran.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nis' => ['required', 'string', 'max:255', 'unique:pendaftarans'],
            'nama' => ['required', 'string', 'max:255'],
            'jk' => ['required', 'string', 'max:1'],
            'agama' => ['required', 'string', 'max:255'],
            'tempat' => ['required', 'string', 'max:255'],
            'tgl' => ['required', 'date'],
            'alamat' => ['required', 'string', 'max:255'],
            'nm_ibu' => ['required', 'string', 'max:255'],
            'nm_ayah' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Membuat instance pengguna baru setelah pendaftaran valid.
     *
     * @param array $data
     * @return \App\Models\Pendaftaran
     */
    protected function create(array $data)
    {
        return Pendaftaran::create([
            'nis' => $data['nis'],
            'nama' => $data['nama'],
            'jk' => $data['jk'],
            'agama' => $data['agama'],
            'tempat' => $data['tempat'],
            'tgl' => $data['tgl'],
            'alamat' => $data['alamat'],
            'nm_ibu' => $data['nm_ibu'],
            'nm_ayah' => $data['nm_ayah'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
