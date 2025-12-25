<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenuGO - Solusi Digital UMKM Kuliner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            color: #198754 !important;
        }
        .hero-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        .btn-success {
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-outline-success {
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
        }
        .feature-card {
            border: none;
            padding: 30px;
            border-radius: 20px;
            transition: 0.3s;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .icon-box {
            width: 60px;
            height: 60px;
            background: #dcfce7;
            color: #198754;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            margin-bottom: 20px;
            font-size: 24px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">Menu<span class="text-dark">GO</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link mx-2" href="#">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link mx-2" href="#">Fitur</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a href="{{ url('/home') }}" class="btn btn-success ms-lg-3">Dashboard</a></li>
                        @else
                            <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-outline-success mx-2">Masuk</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="btn btn-success">Daftar Sekarang</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Digitalkan <span class="text-success">UMKM Kuliner</span> Anda Bersama MenuGO</h1>
                    <p class="lead text-muted mb-5">Kelola menu, pantau penjualan, dan jangkau lebih banyak pelanggan hanya dalam satu aplikasi yang mudah dan responsif.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('register') }}" class="btn btn-success shadow-lg">Mulai Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <img src="https://img.freepik.com/free-vector/delivery-service-with-mask-concept_23-2148505116.jpg" alt="Ilustrasi Kuliner" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 my-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Kenapa Harus Jual Beli di Aplikasi MenuGO?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-box mx-auto"><i class="bi bi-speedometer2"></i></div>
                        <h4 class="fw-bold">Pendaftaran Sangat Mudah</h4>
                        <p class="text-muted">Daftarkan usaha kuliner Anda secara online dengan cepat. Kelola profil toko dan bangun identitas digital UMKM Anda di sini.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-box mx-auto"><i class="bi bi-phone"></i></div>
                        <h4 class="fw-bold">Manajemen Menu Digital</h4>
                        <p class="text-muted">Kelola daftar menu makanan dan minuman secara real-time. Tambah, ubah, atau hapus item menu melalui dashboard yang mudah digunakan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card h-100">
                        <div class="icon-box mx-auto"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4 class="fw-bold">Laporan Real-time</h4>
                        <p class="text-muted">Pantau data UMKM dan performa penjualan secara akurat dengan dashboard yang intuitif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 MenuGO Project - Tugas Besar Pemrograman Web. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
