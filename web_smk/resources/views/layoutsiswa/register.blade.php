@extends('layouts.master')

@section('title', 'Daftar Akun')
@section('judul', 'Daftar Akun Baru')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Akun Baru</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('register.save') }}">
                @csrf
                <input type="hidden" name="nisn" value="{{ $nisn }}">
                <div class="mb-3">
                    <label class="form-label">Kata Sandi Baru</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan kata sandi baru" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi kata sandi" required>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
@endsection
