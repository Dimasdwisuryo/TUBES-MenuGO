@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-success">Menu<span class="text-dark">GO</span></h2>
                        <p class="text-muted">Daftar akun untuk mulai mendigitalkan UMKM Anda</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan nama lengkap">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Alamat Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Minimal 8 karakter">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="form-label fw-semibold">Konfirmasi Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi password">
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-success btn-lg fw-bold rounded-pill">
                                Daftar Sekarang
                            </button>
                        </div>

                        <div class="text-center">
                            <p class="mb-0 text-muted">Sudah punya akun? <a href="{{ route('login') }}" class="text-success fw-bold text-decoration-none">Masuk di sini</a></p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-4 text-muted">
                <small>&copy; 2025 MenuGO Project - Tugas Besar</small>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: #f8f9fa; /* Warna background abu muda agar kartu putih terlihat menonjol */
        font-family: 'Poppins', sans-serif;
    }
    .card {
        transition: transform 0.3s ease;
    }
    .form-control {
        padding: 12px 15px;
        border-radius: 10px;
    }
    .form-control:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.1);
    }
    .btn-success {
        background-color: #198754;
        border: none;
        transition: 0.3s;
    }
    .btn-success:hover {
        background-color: #146c43;
        transform: translateY(-2px);
    }
</style>
@endsection
