@extends('layoutadmin.template')
@section('title', 'Tambah Siswa')
@section('judul', 'Tambah Siswa')
@section('bc')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
    <li class="breadcrumb-item active">Tambah Siswa</li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="/pendaftaran/store/" enctype="multipart/form-data">
            @csrf

            {{-- BIODATA SISWA --}}
            <fieldset class="border p-3 mb-3">
                <legend class="w-auto">BIODATA SISWA</legend>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">NISN</label>
                            <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" placeholder="Masukkan NISN">
                            @error('nisn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK">
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" value="{{ old('tempat') }}" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select name="agama" class="form-control">
                                <option value="">-Pilih Agama-</option>
                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budhha" {{ old('agama') == 'Budhha' ? 'selected' : '' }}>Budhha</option>
                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tempat Tinggal</label>
                            <select name="tempat_tinggal" class="form-control">
                                <option value="">-Pilih Tempat Tinggal-</option>
                                <option value="Bersama Orang Tua" {{ old('tempat_tinggal') == 'Bersama Orang Tua' ? 'selected' : '' }}>Bersama Orang Tua</option>
                                <option value="Kost" {{ old('tempat_tinggal') == 'Kost' ? 'selected' : '' }}>Kost</option>
                                <option value="Bersama Saudara" {{ old('tempat_tinggal') == 'Bersama Saudara' ? 'selected' : '' }}>Bersama Saudara</option>
                                <option value="Lainnya" {{ old('tempat_tinggal') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mode Transportasi Ke Sekolah</label>
                            <select name="transportasi" class="form-control">
                                <option value="">-Pilih Transportasi-</option>
                                <option value="Mobil Pribadi" {{ old('transportasi') == 'Mobil Pribadi' ? 'selected' : '' }}>Mobil Pribadi</option>
                                <option value="Sepeda Motor" {{ old('transportasi') == 'Sepeda Motor' ? 'selected' : '' }}>Sepeda Motor</option>
                                <option value="Jalan Kaki" {{ old('transportasi') == 'Jalan Kaki' ? 'selected' : '' }}>Jalan Kaki</option>
                                <option value="Lainnya" {{ old('transportasi') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor KKS/KPS</label>
                            <input type="text" class="form-control" name="no_kps" value="{{ old('no_kps') }}" placeholder="Masukkan Nomor KKS/KPS">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sek" value="{{ old('asal_sek') }}" placeholder="Masukkan Asal Sekolah">
                        </div>
                    </div>
                </div>
            </fieldset>

            {{-- DATA ORANG TUA --}}
            <fieldset class="border p-3 mb-3">
                <legend class="w-auto">DATA ORANG TUA</legend>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Ayah</label>
                            <input type="text" class="form-control" name="nm_ayah" value="{{ old('nm_ayah') }}" placeholder="Masukkan Nama Ayah">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir Ayah</label>
                            <input type="date" class="form-control" name="tgl_ayah" value="{{ old('tgl_ayah') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pendidikan Terakhir Ayah</label>
                            <input type="text" class="form-control" name="pendidikan_ayah" value="{{ old('pendidikan_ayah') }}" placeholder="Masukkan Pendidikan Terakhir Ayah">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" placeholder="Masukkan Pekerjaan Ayah">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penghasilan Ayah</label>
                            <select name="penghasilan_ayah" class="form-control">
                                <option value="">-Penghasilan Rata-Rata Perbulan(RP)-</option>
                                <option value="0-1.000.000" {{ old('penghasilan_ayah') == '0-1.000.000' ? 'selected' : '' }}>0-1.000.000</option>
                                <option value="1.000.000-2.000.000" {{ old('penghasilan_ayah') == '1.000.000-2.000.000' ? 'selected' : '' }}>1.000.000-2.000.000</option>
                                <option value="2.000.000-4.000.000" {{ old('penghasilan_ayah') == '2.000.000-4.000.000' ? 'selected' : '' }}>2.000.000-4.000.000</option>
                                <option value="5.000.000-20.000.000" {{ old('penghasilan_ayah') == '5.000.000-20.000.000' ? 'selected' : '' }}>5.000.000-20.000.000</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan Ayah</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ket_ayah" id="ayahHidup" value="Hidup" {{ old('ket_ayah') == 'Hidup' ? 'checked' : '' }}>
                                <label class="form-check-label" for="ayahHidup">Hidup</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ket_ayah" id="ayahMeninggal" value="Meninggal" {{ old('ket_ayah') == 'Meninggal' ? 'checked' : '' }}>
                                <label class="form-check-label" for="ayahMeninggal">Meninggal</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" name="nm_ibu" value="{{ old('nm_ibu') }}" placeholder="Masukkan Nama Ibu">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir Ibu</label>
                            <input type="date" class="form-control" name="tgl_ibu" value="{{ old('tgl_ibu') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pendidikan Terakhir Ibu</label>
                            <input type="text" class="form-control" name="pendidikan_ibu" value="{{ old('pendidikan_ibu') }}" placeholder="Masukkan Pendidikan Terakhir Ibu">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" placeholder="Masukkan Pekerjaan Ibu">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penghasilan Ibu</label>
                            <select name="penghasilan_ibu" class="form-control">
                                <option value="">-Penghasilan Rata-Rata Perbulan(RP)-</option>
                                <option value="0-1.000.000" {{ old('penghasilan_ibu') == '0-1.000.000' ? 'selected' : '' }}>0-1.000.000</option>
                                <option value="1.000.000-2.000.000" {{ old('penghasilan_ibu') == '1.000.000-2.000.000' ? 'selected' : '' }}>1.000.000-2.000.000</option>
                                <option value="2.000.000-4.000.000" {{ old('penghasilan_ibu') == '2.000.000-4.000.000' ? 'selected' : '' }}>2.000.000-4.000.000</option>
                                <option value="5.000.000-20.000.000" {{ old('penghasilan_ibu') == '5.000.000-20.000.000' ? 'selected' : '' }}>5.000.000-20.000.000</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan Ibu</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ket_ibu" id="ibuHidup" value="Hidup" {{ old('ket_ibu') == 'Hidup' ? 'checked' : '' }}>
                                <label class="form-check-label" for="ibuHidup">Hidup</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ket_ibu" id="ibuMeninggal" value="Meninggal" {{ old('ket_ibu') == 'Meninggal' ? 'checked' : '' }}>
                                <label class="form-check-label" for="ibuMeninggal">Meninggal</label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            {{-- DATA PERIODIK CALON SISWA --}}
            <fieldset class="border p-3 mb-3">
                <legend class="w-auto">DATA PERIODIK CALON SISWA</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tinggi Badan</label>
                            <input type="text" class="form-control" name="tinggi" placeholder="Masukkan Tinggi Badan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Berat Badan</label>
                            <input type="text" class="form-control" name="berat" placeholder="Masukkan Berat Badan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jarak Rumah Ke Sekolah</label>
                            <input type="text" class="form-control" name="jarak" placeholder="Masukkan Jarak Rumah Ke Sekolah">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Waktu Tempuh Ke Sekolah</label>
                            <input type="text" class="form-control" name="waktu_tempuh" placeholder="Masukkan Waktu Tempuh Ke Sekolah">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Anak Ke</label>
                            <input type="text" class="form-control" name="anak_ke" placeholder="Masukkan Anak Ke">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Saudara Kandung</label>
                            <input type="text" class="form-control" name="jumlah_saudara" placeholder="Masukkan Jumlah Saudara Kandung">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                </div>
                </fieldset>

                {{-- LAMPIRAN --}}
            <fieldset class="border p-3 mb-3">
                <legend class="w-auto">LAMPIRAN</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Ijazah</label>
                            <input type="file" class="form-control @error('ijazah') is-invalid @enderror" name="ijazah" accept="image/*">
                            @error('ijazah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" accept="image/*">
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kartu Keluarga</label>
                            <input type="file" class="form-control @error('kk') is-invalid @enderror" name="kk" accept="image/*">
                            @error('kk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">KKS/KPS</label>
                            <input type="file" class="form-control @error('kps') is-invalid @enderror" name="kps" accept="image/*">
                            @error('kps')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
@endsection
