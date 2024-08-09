@extends('layoutadmin.template')
@section('title', 'Edit Siswa')
@section('judul', 'Edit Siswa')
@section('bc')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
    <li class="breadcrumb-item active">Edit Siswa</li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="/pendaftaran/{{$pen->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- BIODATA SISWA --}}
            <fieldset class="border p-3 mb-3">
                <legend class="w-auto">BIODATA SISWA</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">NISN</label>
                            <input type="text" value="{{ old('nisn', $pen->nisn) }}" class="form-control @error('nisn') is-invalid @enderror" name="nisn">
                            @error('nisn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" value="{{ old('nik', $pen->nik) }}" class="form-control @error('nik') is-invalid @enderror" name="nik">
                            @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" value="{{ old('nama', $pen->nama) }}" class="form-control @error('nama') is-invalid @enderror" name="nama">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" value="{{ old('tempat', $pen->tempat) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir', $pen->tgl_lahir) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select name="agama" class="form-control">
                                <option value="">-Pilih Agama-</option>
                                <option value="Islam" {{ old('agama', $pen->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama', $pen->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama', $pen->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama', $pen->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budhha" {{ old('agama', $pen->agama) == 'Budhha' ? 'selected' : '' }}>Budhha</option>
                                <option value="Konghucu" {{ old('agama', $pen->agama) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $pen->alamat) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Tinggal</label>
                            <select name="tempat_tinggal" class="form-control">
                                <option value="">-Pilih Tempat Tinggal-</option>
                                <option value="Bersama Orang Tua" {{ old('tempat_tinggal', $pen->tempat_tinggal) == 'Bersama Orang Tua' ? 'selected' : '' }}>Bersama Orang Tua</option>
                                <option value="Kost" {{ old('tempat_tinggal', $pen->tempat_tinggal) == 'Kost' ? 'selected' : '' }}>Kost</option>
                                <option value="Bersama Saudara" {{ old('tempat_tinggal', $pen->tempat_tinggal) == 'Bersama Saudara' ? 'selected' : '' }}>Bersama Saudara</option>
                                <option value="Lainnya" {{ old('tempat_tinggal', $pen->tempat_tinggal) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mode Transportasi Ke Sekolah</label>
                            <select name="transportasi" class="form-control">
                                <option value="">-Pilih Transportasi-</option>
                                <option value="Mobil Pribadi" {{ old('transportasi', $pen->transportasi) == 'Mobil Pribadi' ? 'selected' : '' }}>Mobil Pribadi</option>
                                <option value="Sepeda Motor" {{ old('transportasi', $pen->transportasi) == 'Sepeda Motor' ? 'selected' : '' }}>Sepeda Motor</option>
                                <option value="Jalan Kaki" {{ old('transportasi', $pen->transportasi) == 'Jalan Kaki' ? 'selected' : '' }}>Jalan Kaki</option>
                                <option value="Lainnya" {{ old('transportasi', $pen->transportasi) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor KKS/KPS</label>
                            <input type="text" class="form-control" name="no_kps" value="{{ old('no_kps', $pen->no_kps) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sek" value="{{ old('asal_sek', $pen->asal_sek) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- DATA ORANG TUA --}}
                        <fieldset class="border p-3 mb-3">
                            <legend class="w-auto">DATA ORANG TUA</legend>
                            <div class="mb-3">
                                <label class="form-label">Nama Ayah</label>
                                <input type="text" class="form-control" name="nm_ayah" value="{{ old('nm_ayah', $pen->nm_ayah) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control" name="tgl_ayah" value="{{ old('tgl_ayah', $pen->tgl_ayah) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendidikan Terakhir Ayah</label>
                                <input type="text" class="form-control" name="pendidikan_ayah" value="{{ old('pendidikan_ayah', $pen->pendidikan_ayah) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $pen->pekerjaan_ayah) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Penghasilan Ayah</label>
                                <select name="penghasilan_ayah" class="form-control">
                                    <option value="">-Penghasilan Rata-Rata Perbulan(RP)-</option>
                                    <option value="0-1.000.000" {{ old('penghasilan_ayah', $pen->penghasilan_ayah) == '0-1.000.000' ? 'selected' : '' }}>0-1.000.000</option>
                                    <option value="1.000.000-2.000.000" {{ old('penghasilan_ayah', $pen->penghasilan_ayah) == '1.000.000-2.000.000' ? 'selected' : '' }}>1.000.000-2.000.000</option>
                                    <option value="2.000.000-4.000.000" {{ old('penghasilan_ayah', $pen->penghasilan_ayah) == '2.000.000-4.000.000' ? 'selected' : '' }}>2.000.000-4.000.000</option>
                                    <option value="5.000.000-20.000.000" {{ old('penghasilan_ayah', $pen->penghasilan_ayah) == '5.000.000-20.000.000' ? 'selected' : '' }}>5.000.000-20.000.000</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan Ayah</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ket_ayah" id="inlineRadio1" value="Hidup" {{ old('ket_ayah', $pen->ket_ayah) == 'Hidup' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio1">Hidup</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ket_ayah" id="inlineRadio2" value="Meninggal" {{ old('ket_ayah', $pen->ket_ayah) == 'Meninggal' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Meninggal</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" name="nm_ibu" value="{{ old('nm_ibu', $pen->nm_ibu) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control" name="tgl_ibu" value="{{ old('tgl_ibu', $pen->tgl_ibu) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendidikan Terakhir Ibu</label>
                                <input type="text" class="form-control" name="pendidikan_ibu" value="{{ old('pendidikan_ibu', $pen->pendidikan_ibu) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $pen->pekerjaan_ibu) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Penghasilan Ibu</label>
                                <select name="penghasilan_ibu" class="form-control">
                                    <option value="">-Penghasilan Rata-Rata Perbulan(RP)-</option>
                                    <option value="0-1.000.000" {{ old('penghasilan_ibu', $pen->penghasilan_ibu) == '0-1.000.000' ? 'selected' : '' }}>0-1.000.000</option>
                                    <option value="1.000.000-2.000.000" {{ old('penghasilan_ibu', $pen->penghasilan_ibu) == '1.000.000-2.000.000' ? 'selected' : '' }}>1.000.000-2.000.000</option>
                                    <option value="2.000.000-4.000.000" {{ old('penghasilan_ibu', $pen->penghasilan_ibu) == '2.000.000-4.000.000' ? 'selected' : '' }}>2.000.000-4.000.000</option>
                                    <option value="5.000.000-20.000.000" {{ old('penghasilan_ibu', $pen->penghasilan_ibu) == '5.000.000-20.000.000' ? 'selected' : '' }}>5.000.000-20.000.000</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan Ibu</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ket_ibu" id="inlineRadio3" value="Hidup" {{ old('ket_ibu', $pen->ket_ibu) == 'Hidup' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio3">Hidup</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ket_ibu" id="inlineRadio4" value="Meninggal" {{ old('ket_ibu', $pen->ket_ibu) == 'Meninggal' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio4">Meninggal</label>
                                </div>
                            </div>
                        </fieldset>

                        {{-- DATA PERIODIK CALON SISWA --}}
                        <fieldset class="border p-3 mb-3">
                            <legend class="w-auto">DATA PERIODIK CALON SISWA</legend>
                            <div class="mb-3">
                                <label class="form-label">Tinggi Badan</label>
                                <input type="text" class="form-control" name="tinggi" value="{{ old('tinggi', $pen->tinggi) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Berat Badan</label>
                                <input type="text" class="form-control" name="berat" value="{{ old('berat', $pen->berat) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jarak Rumah Ke Sekolah</label>
                                <input type="text" class="form-control" name="jarak" value="{{ old('jarak', $pen->jarak) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Waktu Tempuh Ke Sekolah</label>
                                <input type="text" class="form-control" name="waktu_tempuh" value="{{ old('waktu_tempuh', $pen->waktu_tempuh) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Anak Ke</label>
                                <input type="text" class="form-control" name="anak_ke" value="{{ old('anak_ke', $pen->anak_ke) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Saudara Kandung</label>
                                <input type="text" class="form-control" name="jumlah_saudara" value="{{ old('jumlah_saudara', $pen->jumlah_saudara) }}">
                            </div>
                        </fieldset>


                        {{-- LAMPIRAN --}}
                        <fieldset class="border p-3 mb-3">
                            <legend class="w-auto">LAMPIRAN</legend>
                            <div class="mb-3">
                                <label class="form-label">Ijazah</label>
                                <input type="file" class="form-control @error('ijazah') is-invalid @enderror" name="ijazah" accept="image/*">
                                @if ($pen->ijazah)
                                    <a href="{{ asset('storage/' . $pen->ijazah) }}" target="_blank">Lihat Ijazah Saat Ini</a>
                                @endif
                                @error('ijazah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" accept="image/*">
                                @if ($pen->foto)
                                    <a href="{{ asset('storage/' . $pen->foto) }}" target="_blank">Lihat Foto Saat Ini</a>
                                @endif
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kartu Keluarga</label>
                                <input type="file" class="form-control @error('kk') is-invalid @enderror" name="kk" accept="image/*">
                                @if ($pen->kk)
                                    <a href="{{ asset('storage/' . $pen->kk) }}" target="_blank">Lihat Kartu Keluarga Saat Ini</a>
                                @endif
                                @error('kk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">KPS/KKS</label>
                                <input type="file" class="form-control @error('kps') is-invalid @enderror" name="kps" accept="image/*">
                                @if ($pen->kps)
                                    <a href="{{ asset('storage/' . $pen->kps) }}" target="_blank">Lihat KKS Saat Ini</a>
                                @endif
                                @error('kps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </fieldset>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/pendaftaran" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
