<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1 - Halaman Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .hero { background: linear-gradient(to right, #0d6efd, #6610f2); color: white; text-align: center; padding: 60px 20px; border-radius: 0 0 40px 40px; }
        .card img { height: 250px; object-fit: cover; border-radius: 10px; }
        .card { transition: transform 0.2s; }
        .card:hover { transform: scale(1.02); }
        footer { margin-top: 50px; text-align: center; padding: 20px; border-top: 1px solid #ccc; color: #666; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/">Home</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">2301010087 Dewa Putu Ari Pramana Nida</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">2301010115 Muhammad Aryo Putradi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <h1 class="fw-bold">Universitas Bumigora</h1>
        <p class="lead">Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB 🥇</p>
    </div>

    <!-- Daftar Kampus (Vertikal) -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Daftar Kampus di Nusa Tenggara Barat</h3>
        <div class="row g-4 d-flex flex-column align-items-center">

            <!-- UNIZAR -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <img src="/unizar.webp" class="card-img-top" alt="Unizar">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Universitas Islam Al-Azhar (UNIZAR)</h5>
                        <p class="text-muted small">
                            Kampus dengan fokus pengembangan ilmu keislaman dan sains modern di Mataram.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- UNW -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <img src="/unw.jpg" class="card-img-top" alt="UNW">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Universitas Nahdlatul Wathan (UNW)</h5>
                        <p class="text-muted small">
                            Dikenal sebagai kampus berbasis pesantren yang memadukan pendidikan agama dan umum.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- UNDIKMA -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <img src="/undikma.jpg" class="card-img-top" alt="Undikma">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Universitas Pendidikan Mandalika (Undikma)</h5>
                        <p class="text-muted small">
                            Fokus pada bidang pendidikan dan pelatihan tenaga pendidik profesional di NTB.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- UIN -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <img src="/uin.jpg" class="card-img-top" alt="UIN">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">UIN Mataram</h5>
                        <p class="text-muted small">
                            Kampus Islam negeri unggulan dengan program studi beragam dari syariah hingga teknologi.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- UNRAM -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <img src="/unram.jpeg" class="card-img-top" alt="Unram">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Universitas Mataram (Unram)</h5>
                        <p class="text-muted small">
                            Universitas negeri terbesar di NTB yang memiliki reputasi nasional dan internasional.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- UBG -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <img src="/ubgg.jpg" class="card-img-top" alt="UBG">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Universitas Bumigora (UBG)</h5>
                        <p class="text-muted small">
                            Kampus unggulan berbasis teknologi dan digital yang terus berkembang di NTB.
                        </p>
                        <a href="/about" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer><p>© 2025 Universitas Bumigora | Tugas Soal 1 Halaman Beranda</p></footer>
</body>
</html>
