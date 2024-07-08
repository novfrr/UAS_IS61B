@extends('layouts.app')

@section('title', 'Tambah Data Pendaftaran')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header">{{ __('Tambah Data Pendaftaran') }}</div>
                <div class="card-body">
                    <form method="POST" action="/pendaftaran/store/">
                        @csrf
                        <div class="row mb-3">
                            <label for="nis" class="col-md-4 col-form-label text-md-end">{{ __('NISN') }}</label>
                            <div class="col-md-6">
                                <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" required autofocus>
                                @error('nis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jk" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>
                            <div class="col-md-6">
                                <input id="jk" type="text" class="form-control @error('jk') is-invalid @enderror" name="jk" value="{{ old('jk') }}" required>
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="agama" class="col-md-4 col-form-label text-md-end">{{ __('Agama') }}</label>
                            <div class="col-md-6">
                                <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tempat" class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>
                            <div class="col-md-6">
                                <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}" required>
                                @error('tempat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tgl" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>
                            <div class="col-md-6">
                                <input id="tgl" type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl" value="{{ old('tgl') }}" required>
                                @error('tgl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>
                            <div class="col-md-6">
                                <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nm_ibu" class="col-md-4 col-form-label text-md-end">{{ __('Nama Ibu Kandung') }}</label>
                            <div class="col-md-6">
                                <input id="nm_ibu" type="text" class="form-control @error('nm_ibu') is-invalid @enderror" name="nm_ibu" value="{{ old('nm_ibu') }}" required>
                                @error('nm_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nm_ayah" class="col-md-4 col-form-label text-md-end">{{ __('Nama Ayah Kandung') }}</label>
                            <div class="col-md-6">
                                <input id="nm_ayah" type="text" class="form-control @error('nm_ayah') is-invalid @enderror" name="nm_ayah" value="{{ old('nm_ayah') }}" required>
                                @error('nm_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
