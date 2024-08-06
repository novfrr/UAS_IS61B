@extends('layouts.master')

@section('title', 'Login')
@section('judul', 'Login')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Login</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('login.perform') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn" placeholder="Masukkan NISN" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan kata sandi" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection
