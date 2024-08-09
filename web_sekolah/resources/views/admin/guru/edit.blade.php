@extends('layoutadmin.template')
@section('title', 'Edit Guru')
@section('judul', 'Edit Guru')
@section('bc')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
    <li class="breadcrumb-item active">Edit Guru</li>
</ol>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="/guru/{{$gur->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- DATA GURU --}}
            <fieldset class="border p-3 mb-3">
                <legend class="w-auto">Data Guru</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">NIP</label>
                            <input type="text" value="{{ old('nip', $gur->nip) }}" class="form-control @error('nip') is-invalid @enderror" name="nip">
                            @error('nip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Guru</label>
                            <input type="text" value="{{ old('nama_guru', $gur->nama_guru) }}" class="form-control @error('nama_guru') is-invalid @enderror" name="nama_guru">
                            @error('nama_guru')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" value="{{ old('alamat', $gur->alamat) }}" class="form-control @error('alamat') is-invalid @enderror" name="alamat">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Telpon</label>
                            <input type="text" value="{{ old('no_telp', $gur->no_telp) }}" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp">
                            @error('no_telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">email</label>
                            <input type="text" value="{{ old('email', $gur->email) }}" class="form-control @error('email') is-invalid @enderror" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/guru" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
