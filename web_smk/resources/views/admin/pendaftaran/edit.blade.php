@extends('layouts.master')
@section('title','Edit Formulir')
@section('judul','Edit Formulir')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
        <li class="breadcrumb-item active">Edit formulir</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Formulir Pendaftaran Siswa</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="/pendaftaran/{{$pen->id}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                {{-- Biodata Siswa --}}
                <h5 class="mb-3">Biodata Siswa</h5>

                <div class="mb-3">
                    <label class="form-label">NISN</label>
                    <input type="text" readonly value="{{$pen->nisn}}" class="form-control" name="nisn">
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input type="text" readonly value="{{$pen->nik}}" class="form-control" name="nik">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" value="{{$pen->nama}}" class="form-control" name="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" value="{{$pen->tempat_lahir}}" class="form-control" name="tempat_lahir" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" value="{{$pen->tgl_lahir}}" class="form-control" name="tgl_lahir" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" required>{{$pen->alamat}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki" {{ $pen->jk == 'Laki-laki' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan" {{ $pen->jk == 'Perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-control" required>
                        <option value="Islam" {{ $pen->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen" {{ $pen->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katolik" {{ $pen->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                        <option value="Hindu" {{ $pen->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Buddha" {{ $pen->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Konghucu" {{ $pen->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Tinggal</label>
                    <select name="tempat_tinggal" class="form-control" required>
                        <option value="Bersama Orang Tua" {{ $pen->tempat_tinggal == 'Bersama Orang Tua' ? 'selected' : '' }}>Bersama Orang Tua</option>
                        <option value="Kost" {{ $pen->tempat_tinggal == 'Kost' ? 'selected' : '' }}>Kost</option>
                        <option value="Bersama Saudara" {{ $pen->tempat_tinggal == 'Bersama Saudara' ? 'selected' : '' }}>Bersama Saudara</option>
                        <option value="Lainnya" {{ $pen->tempat_tinggal == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Handphone</label>
                    <input type="tel" value="{{$pen->no_hp}}" class="form-control" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KKS/KPS</label>
                    <input type="text" value="{{$pen->no_kps}}" class="form-control" name="no_kps">
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Sekolah</label>
                    <input type="text" value="{{$pen->asal_sek}}" class="form-control" name="asal_sek" required>
                </div>

                {{-- Data Orang Tua --}}
                <h5 class="mt-4 mb-3">Data Orang Tua</h5>

                <div class="mb-3">
                    <label class="form-label">Nama Ayah</label>
                    <input type="text" value="{{$pen->nm_ayah}}" class="form-control" name="nm_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan Ayah</label>
                    <input type="text" value="{{$pen->pekerjaan_ayah}}" class="form-control" name="pekerjaan_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penghasilan Ayah</label>
                    <select name="penghasilan_ayah" class="form-control" required>
                        <option value="0-1.000.000" {{ $pen->penghasilan_ayah == '0-1.000.000' ? 'selected' : '' }}>0-1.000.000</option>
                        <option value="1.000.000-3.000.000" {{ $pen->penghasilan_ayah == '1.000.000-3.000.000' ? 'selected' : '' }}>1.000.000-3.000.000</option>
                        <option value="3.000.000-5.000.000" {{ $pen->penghasilan_ayah == '3.000.000-5.000.000' ? 'selected' : '' }}>3.000.000-5.000.000</option>
                        <option value="5.000.000-20.000.000" {{ $pen->penghasilan_ayah == '5.000.000-20.000.000' ? 'selected' : '' }}>5.000.000-20.000.000</option>
                        <option value="Lainnya" {{ $pen->penghasilan_ayah == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Ayah</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ayah" id="inlineRadio3" value="Masih Hidup" {{ $pen->ket_ayah == 'Masih Hidup' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="inlineRadio3">Masih Hidup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ayah" id="inlineRadio4" value="Meninggal" {{ $pen->ket_ayah == 'Meninggal' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio4">Meninggal</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur Ayah</label>
                    <input type="number" value="{{$pen->umur_ayah}}" class="form-control" name="umur_ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Ibu</label>
                    <input type="text" value="{{$pen->nm_ibu}}" class="form-control" name="nm_ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan Ibu</label>
                    <input type="text" value="{{$pen->pekerjaan_ibu}}" class="form-control" name="pekerjaan_ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penghasilan Ibu</label>
                    <select name="penghasilan_ibu" class="form-control" required>
                        <option value="0-1.000.000" {{ $pen->penghasilan_ibu == '0-1.000.000' ? 'selected' : '' }}>0-1.000.000</option>
                        <option value="1.000.000-3.000.000" {{ $pen->penghasilan_ibu == '1.000.000-3.000.000' ? 'selected' : '' }}>1.000.000-3.000.000</option>
                        <option value="3.000.000-5.000.000" {{ $pen->penghasilan_ibu == '3.000.000-5.000.000' ? 'selected' : '' }}>3.000.000-5.000.000</option>
                        <option value="5.000.000-20.000.000" {{ $pen->penghasilan_ibu == '5.000.000-20.000.000' ? 'selected' : '' }}>5.000.000-20.000.000</option>
                        <option value="Lainnya" {{ $pen->penghasilan_ibu == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Ibu</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ibu" id="inlineRadio5" value="Masih Hidup" {{ $pen->ket_ibu == 'Masih Hidup' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="inlineRadio5">Masih Hidup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ibu" id="inlineRadio6" value="Meninggal" {{ $pen->ket_ibu == 'Meninggal' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio6">Meninggal</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur Ibu</label>
                    <input type="number" value="{{$pen->umur_ibu}}" class="form-control" name="umur_ibu" required>
                </div>

                {{-- Data Periodik --}}
                <h5 class="mt-4 mb-3">Data Periodik</h5>

                <div class="mb-3">
                    <label class="form-label">Tinggi Badan (cm)</label>
                    <input type="number" value="{{$pen->tinggi}}" class="form-control" name="tinggi" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Berat Badan (kg)</label>
                    <input type="number" value="{{$pen->berat}}" class="form-control" name="berat" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jarak Tempuh ke Sekolah (km)</label>
                    <input type="number" value="{{$pen->jarak_tempuh}}" class="form-control" name="jarak_tempuh" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Anak Ke-</label>
                    <input type="number" value="{{$pen->anak_ke}}" class="form-control" name="anak_ke" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Saudara</label>
                    <input type="number" value="{{$pen->jumlah_saudara}}" class="form-control" name="jumlah_saudara" required>
                </div>

                {{-- Lampiran --}}
                <h5 class="mt-4 mb-3">Lampiran</h5>

                <div class="mb-3">
                    <label class="form-label">Ijazah</label>
                    <input type="file" class="form-control" name="ijazah" accept="application/pdf">
                </div>
                <div class="mb-3">
                    <label class="form-label">KKS/KPS</label>
                    <input type="file" class="form-control" name="kks_kps" accept="application/pdf">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kartu Keluarga</label>
                    <input type="file" class="form-control" name="kk" accept="application/pdf">
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
