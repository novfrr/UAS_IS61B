@extends('layouts.master')

@section('title','Tambah Siswa')
@section('judul','Formulir Pendaftaran Siswa Baru')

@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
        <li class="breadcrumb-item active">Tambah Siswa</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulir Pendaftaran Siswa Baru</h3>

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
            <form method="post" action="/pendaftaran/store/" enctype="multipart/form-data">
                @csrf

                {{-- Biodata Siswa --}}
                <h5 class="mb-3">Biodata Siswa</h5>

                <div class="mb-3">
                    <label class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn" placeholder="Nomor Induk Siswa Nasional" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Siswa" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki" required>
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-control" required>
                        <option value="">-Pilih Agama-</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Tinggal</label>
                    <select name="tempat_tinggal" class="form-control" required>
                        <option value="">-Pilih Tempat Tinggal-</option>
                        <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                        <option value="Kost">Kost</option>
                        <option value="Bersama Saudara">Bersama Saudara</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Handphone</label>
                    <input type="tel" class="form-control" name="no_hp" placeholder="Nomor Handphone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KKS/KPS</label>
                    <input type="text" class="form-control" name="no_kps" placeholder="Nomor KKS/KPS (jika ada)">
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sek" placeholder="Asal Sekolah" required>
                </div>

                {{-- Data Orang Tua --}}
                <h5 class="mt-4 mb-3">Data Orang Tua</h5>

                <div class="mb-3">
                    <label class="form-label">Nama Ayah</label>
                    <input type="text" class="form-control" name="nm_ayah" placeholder="Nama Ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penghasilan Ayah</label>
                    <select name="penghasilan_ayah" class="form-control" required>
                        <option value="">-Pilih Penghasilan-</option>
                        <option value="0-1.000.000">0-1.000.000</option>
                        <option value="1.000.000-3.000.000">1.000.000-3.000.000</option>
                        <option value="3.000.000-5.000.000">3.000.000-5.000.000</option>
                        <option value="5.000.000-20.000.000">5.000.000-20.000.000</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Ayah</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ayah" id="inlineRadio3" value="Masih Hidup" required>
                        <label class="form-check-label" for="inlineRadio3">Masih Hidup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ayah" id="inlineRadio4" value="Meninggal">
                        <label class="form-check-label" for="inlineRadio4">Meninggal</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur Ayah</label>
                    <input type="number" class="form-control" name="umur_ayah" placeholder="Umur Ayah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Ibu</label>
                    <input type="text" class="form-control" name="nm_ibu" placeholder="Nama Ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penghasilan Ibu</label>
                    <select name="penghasilan_ibu" class="form-control" required>
                        <option value="">-Pilih Penghasilan-</option>
                        <option value="0-1.000.000">0-1.000.000</option>
                        <option value="1.000.000-3.000.000">1.000.000-3.000.000</option>
                        <option value="3.000.000-5.000.000">3.000.000-5.000.000</option>
                        <option value="5.000.000-20.000.000">5.000.000-20.000.000</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Ibu</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ibu" id="inlineRadio5" value="Masih Hidup" required>
                        <label class="form-check-label" for="inlineRadio5">Masih Hidup</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ket_ibu" id="inlineRadio6" value="Meninggal">
                        <label class="form-check-label" for="inlineRadio6">Meninggal</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Umur Ibu</label>
                    <input type="number" class="form-control" name="umur_ibu" placeholder="Umur Ibu" required>
                </div>

                {{-- Data Periodik --}}
                <h5 class="mt-4 mb-3">Data Periodik</h5>

                <div class="mb-3">
                    <label class="form-label">Tinggi Badan (cm)</label>
                    <input type="number" class="form-control" name="tinggi" placeholder="Tinggi Badan" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Berat Badan (kg)</label>
                    <input type="number" class="form-control" name="berat" placeholder="Berat Badan" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jarak Tempuh ke Sekolah (km)</label>
                    <input type="number" class="form-control" name="jarak_tempuh" placeholder="Jarak Tempuh" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Anak Ke-</label>
                    <input type="number" class="form-control" name="anak_ke" placeholder="Anak Ke" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Saudara</label>
                    <input type="number" class="form-control" name="jumlah_saudara" placeholder="Jumlah Saudara" required>
                </div>

                {{-- Lampiran --}}
                <h5 class="mt-4 mb-3">Lampiran</h5>

                <div class="mb-3">
                    <label class="form-label">Ijazah</label>
                    <input type="file" class="form-control" name="ijazah" accept="application/pdf" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">KKS/KPS</label>
                    <input type="file" class="form-control" name="kks_kps" accept="application/pdf">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kartu Keluarga</label>
                    <input type="file" class="form-control" name="kk" accept="application/pdf" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
