@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-success">Menu<span class="text-dark">GO</span></h2>
                        <p class="text-muted small">Silakan masuk ke akun Anda</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold small">Alamat Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="name@example.com">
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold small">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Masukkan password">
                            @error('password')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success fw-bold py-2 rounded-3">Masuk Sekarang</button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="mb-0 small text-muted">Belum punya akun? <a href="{{ route('register') }}" class="text-success fw-bold text-decoration-none">Daftar di sini</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center mt-4 text-muted small">&copy; 2025 MenuGO Project - Tugas Besar</p>
        </div>
    </div>
</div>

<style>
    .form-control { padding: 10px 15px; border-radius: 8px; border: 1px solid #dee2e6; }
    .form-control:focus { border-color: #198754; box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.1); }
    .btn-success { background-color: #198754; border: none; }
    .btn-success:hover { background-color: #146c43; }
</style>
@endsection
