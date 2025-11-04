<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Universitas Bumigora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f0f0f;
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }
        .hero {
            text-align: center;
            margin-top: 40px;
        }
        .card {
            background-color: #1a1a1a;
            color: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            width: 320px;
        }
        .card img {
            width: 100%;
            height: auto; /* biar ukuran gambar asli */
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            text-align: center;
        }
        .card-title {
            color: #ffc107;
            font-weight: bold;
        }
        .members-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 40px;
        }
        footer {
            margin-top: 60px;
            border-top: 1px solid #444;
            padding: 20px 40px;
            color: #aaa;
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .hover-link {
            text-decoration: none;
            color: #aaa;
            transition: color 0.3s;
        }
        .hover-link:hover {
            color: #ffc107;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/">Home</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold active" href="/about">About</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">2301010087 Dewa Putu Ari Pramana Nida</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">2301010115 Muhammad Aryo Putradi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container hero">
        <h1 class="fw-bold text-warning">Tentang Universitas Bumigora</h1>
        <p class="text-light mt-3">
            Universitas Bumigora dikenal memiliki jurusan komputer terbaik di NTB,
            menghasilkan mahasiswa berbakat yang sering memenangkan lomba teknologi tingkat nasional.
        </p>

        <!-- Profil Anggota -->
        <div class="members-container">
            <!-- Dewa Putu Ari Pramana Nida -->
            <div class="card">
                <img src="/omen.jpg" alt="Dewa Putu Ari Pramana Nida">
                <div class="card-body">
                    <h5 class="card-title">Dewa Putu Ari Pramana Nida</h5>
                    <p class="card-text"><em>"Begadang is in my blood cause all the projects won't solve itself"</em></p>
                    <p class="text-secondary">NIM: 2301010087</p>
                </div>
            </div>

            <!-- Muhammad Aryo Putradi -->
            <div class="card">
                <img src="/clove.jpg" alt="Muhammad Aryo Putradi">
                <div class="card-body">
                    <h5 class="card-title">Muhammad Aryo Putradi</h5>
                    <p class="card-text"><em>"Professional Front-End Designer"</em></p>
                    <p class="text-secondary">NIM: 2301010115</p>
                </div>
            </div>
        </div>

        <a href="/" class="btn btn-outline-light mt-4">&larr; Kembali ke Home</a>
    </div>

    <!-- Footer -->
    <footer>
        <p class="mb-0">© 2025 Universitas Bumigora | About Page</p>
        <p class="mb-0 text-secondary small">
            <a href="/" class="hover-link">🏠 Home</a> |
            <a href="/about" class="hover-link">ℹ️ About</a> |
            2301010087 Dewa Putu Ari Pramana Nida Ft. 2301010115 Muhammad Aryo Putradi
        </p>
    </footer>

</body>
</html>
