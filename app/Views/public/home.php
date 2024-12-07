<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Penjualan Motor</title>
    <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Hero Section */
        .hero-section {
            background: url('https://via.placeholder.com/1920x500') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 80px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            margin-bottom: 50px;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.2rem;
        }

        /* Tombol Call-to-action */
        .cta-btns .btn {
            margin: 10px;
            padding: 12px 30px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .cta-btns .btn:hover {
            transform: translateY(-5px);
        }

        .cta-btns .btn-login {
            background-color: #007bff;
            color: white;
        }

        .cta-btns .btn-login:hover {
            background-color: #0056b3;
        }

        .cta-btns .btn-promo {
            background-color: #ff5722;
            color: white;
        }

        .cta-btns .btn-promo:hover {
            background-color: #e64a19;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
        }

        footer a {
            color: #f8f9fa;
        }

        footer a:hover {
            text-decoration: none;
        }

        /* Navigation Bar */
        nav .navbar-brand {
            font-weight: bold;
        }

        .nav-link {
            font-size: 1.1rem;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Penjualan Motor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/register') ?>">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/login') ?>">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section text-center">
        <div class="container">
            <h1>Selamat Datang di Penjualan Motor</h1>
            <p>Tempat terbaik untuk membeli sepeda motor impian Anda.</p>
            <div class="cta-btns">
                <a href="<?= base_url('about') ?>" class="btn btn-info btn-lg">Pelajari Lebih Lanjut Tentang Kami</a>
                <a href="<?= base_url('contact') ?>" class="btn btn-warning btn-lg">Hubungi Kami</a>
                <a href="<?= base_url('auth/login') ?>" class="btn btn-login btn-lg">Masuk</a>
                <a href="<?= base_url('promo') ?>" class="btn btn-promo btn-lg">Promo Motor</a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2024 Penjualan Motor. Semua hak cipta dilindungi.</p>
            <p>
                <a href="<?= base_url('privacy') ?>">Kebijakan Privasi</a> | <a href="<?= base_url('terms') ?>">Syarat dan Ketentuan</a>
            </p>
            <div>
                <a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-white ml-3"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="text-white ml-3"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
