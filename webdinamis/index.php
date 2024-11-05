<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Tech-Themed Website - Landing Page</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS for Tech Theme -->
    <style>
        body {
            background: url('assets/image/kotaku.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(33, 33, 33, 0.9);
        }

        .navbar-brand {
            color: #90caf9;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #b0bec5;
        }

        .navbar-nav .nav-link:hover {
            color: #90caf9;
        }

        /* Main Section */
        .main-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 2em; /* Mengurangi padding untuk tampilan lebih padat */
            background-color: rgba(19, 19, 19, 0.9);
            border-radius: 10px;
            margin-top: 3em;
        }

        /* Profile Card */
        .profile-card {
            background-color: #1c1c1c;
            color: #b0bec5;
            text-align: center;
            padding: 0.8em; /* Mengurangi padding */
            border: 5px solid #1e88e5;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
            flex: 0.8;
            margin-right: 5em;
        }

        .profile-card img {
            width: 100px; /* Mengurangi ukuran gambar */
            height: 100px;
            border-radius: 50%;
            margin-bottom: 0.5em;
            border: 2px solid #90caf9;
        }

        .profile-card h3 {
            font-size: 1em; /* Mengurangi ukuran font */
            margin: 0.3em 0;
        }

        .profile-card p {
            font-size: 0.85em;
            margin: 0.2em 0;
        }

        .social-icons a {
            color: #90caf9;
            margin: 0 4px;
            font-size: 2em; /* Mengurangi ukuran ikon */
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #1e88e5;
        }

        /* Welcome Message Section */
        .welcome-message {
            background-color: #1c1c1c;
            padding: 4.5em; /* Mengurangi padding */
            border-radius: 10px;
            border: 2px solid #424242;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
            color: #b0bec5;
            flex: 2;
        }

        .welcome-message h3 {
            font-size: 3em; /* Mengurangi ukuran font judul */
            margin-bottom: 0.5em;
        }

        .welcome-message p {
            font-size: 2em;
            line-height: 2;
        }

        /* Feature Cards */
        .feature-card {
            background-color: #1c1c1c;
            color: #b0bec5;
            text-align: center;
            border: 2px solid #424242;
            padding: 1.2em;
            border-radius: 10px;
            transition: transform 0.3s;
            margin-bottom: 1em;
        }

        .feature-card i {
            font-size: 3em; /* Mengurangi ukuran ikon */
            color: #90caf9;
            margin-bottom: 0.8em;
        }

        .feature-card h5 {
            font-size: 2.5em;
            margin: 0.5em 0;
        }

        .feature-card p {
            font-size: 0.85em;
            line-height: 1.3;
        }

        .feature-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(144, 202, 249, 0.4);
        }

        /* Footer */
        footer {
            background-color: #1c1c1c;
            padding: 2em;
            color: #b0bec5;
            text-align: center;
        }

        /* About Section */
        #about {
            padding: 3em 0; /* Mengurangi padding */
            background-color: rgba(28, 28, 28, 0.9);
            border-radius: 10px;
            margin-top: 1.5em;
        }

        .about-title {
            text-align: center;
            margin-bottom: 1.5em;
            color: #90caf9;
        }

        .about-text {
            text-align: center;
            color: #b0bec5;
            font-size: 1em;
        }
        /* Tambahkan padding dan background untuk tabel belajar */
        #learn {
            padding: 2em;
            background-color: rgba(28, 28, 28, 0.9);
            border-radius: 10px;
            margin-top: 2em;
        }

        .table-container {
            background-color: #1c1c1c;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
            color: #b0bec5;
        }
    
        /* Gaya untuk tabel */
        #belajarTable {
            width: 100%;
            border-collapse: collapse;
        }

        /* Gaya untuk header tabel */
        #belajarTable thead th {
            background-color: #0d6efd; /* Biru */
            color: white; /* Teks putih */
        }

        /* Gaya untuk isi tabel */
        #belajarTable tbody tr:nth-child(odd) {
            background-color: #212529; /* Hitam */
            color: white; /* Teks putih */
        }

        #belajarTable tbody tr:nth-child(even) {
            background-color: #343a40; /* Abu-abu gelap */
            color: white; /* Teks putih */
        }

        /* Gaya untuk sel */
        #belajarTable td {
            padding: 12px;
            border: 1px solid #dee2e6; /* Warna border */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">Kuro Tech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <!-- Dropdown Menu for Learning -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="learnDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Belajar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="learnDropdown">
                        <li><a class="dropdown-item" href="#learn">Data Tables</a></li>
                        <!-- Tambahkan menu lain jika perlu -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <!-- Dropdown Menu for Forms -->
                <!-- Menu for Login without Dropdown -->
                <li class="nav-item">
                    <a class="nav-link" href="#login">Form</a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Section -->
<section class="main-section" id="home">
    <!-- Profile Card Section -->
    <div class="profile-card text-center">
        <img src="assets/image/raja yunani.png" >
        <h3>Ariq Ibtihal</h3>
        <p>Umur: 19 | Bekasi</p>
        <p>Web Developer & Designer .</p>
        <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <!-- Welcome Message Section -->
    <div class="welcome-message">
        <h3>Selamat Datang Di Web Kami</h3>
    </div>
</section>

<!-- Features Section -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="feature-card">
                <i class="fas fa-laptop-code"></i>
                <h5>Web Development</h5>
                <p>Spesialisasi dalam situs web modern dan responsif yang memberikan pengalaman pengguna yang lancar.</p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="feature-card">
                <i class="fas fa-mobile-alt"></i>
                <h5>Mobile-First Design</h5>
                <p>Memastikan aksesibilitas dan fungsionalitas di semua perangkat, mulai dari perangkat seluler.</p>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section id="about">
    <h2 class="about-title">About Me</h2>
    <p class="about-text">Saya seorang pengembang yang bersemangat dan berfokus pada pembuatan aplikasi web yang efisien dan inovatif. Pengalaman saya meliputi bekerja dengan teknologi modern untuk memberikan solusi berkualitas tinggi yang memenuhi kebutuhan pengguna.</p>
    <p class="about-text">Saya senang mempelajari keterampilan baru dan mengikuti perkembangan tren industri. Tujuan saya adalah membangun aplikasi yang tidak hanya berfungsi dengan baik tetapi juga memberikan pengalaman pengguna yang luar biasa.</p>
</section>

<!-- Contact Section -->
<section id="contact" class="mt-4">
    <div class="container" style="background-color: rgba(28, 28, 28, 0.9); padding: 20px; border-radius: 8px; max-width: 500px; margin: 0 auto;">
        <h2 class="text-center" style="color: #90caf9;">Contact Me</h2>
        <p class="text-center" style="color: #90caf9;">Jika Anda memiliki pertanyaan atau ingin bekerja sama, silakan hubungi saya melalui formulir di bawah ini.</p>
        
        <div class="container mt-3">
            <form action="contact.php" method="post" style="max-width: 500px; margin: 0 auto; border: 3px solid #90caf9; border-radius: 8px; padding: 40px;">
                <div class="mb-3">
                    <label for="name" class="form-label" style="color: #90caf9;">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="color: #90caf9;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label" style="color: #90caf9;">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>

    <!-- Login Section -->
<section id="login" class="mt-4">
    <div class="container" style="background-color: rgba(28, 28, 28, 0.9); padding: 20px; border-radius: 8px; max-width: 500px; margin: 0 auto;">
        <h2 class="text-center" style="color: #90caf9;">Login</h2>
        <p class="text-center" style="color: #90caf9;">Silakan masukkan email dan kata sandi Anda untuk masuk.</p>
        
        <div class="container mt-3">
            <form action="login.php" method="post" style="max-width: 500px; margin: 0 auto; border: 3px solid #90caf9; padding: 40px; border-radius: 8px;">
                <div class="mb-3">
                    <label for="loginEmail" class="form-label" style="color: #90caf9;">Email</label>
                    <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label" style="color: #90caf9;">Kata Sandi</label>
                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</section>



<!-- Belajar Section dengan DataTables -->
<section id="learn">
    <h2 class="text-center" style="color: #90caf9;">Data Table</h2>
    <p class="text-center" style="color: #b0bec5;">Informasi data belajar ditampilkan di tabel di bawah ini.</p>

    <!-- Tabel DataTables -->
    <div class="container">
        <table id="belajarTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Tiger Nixon</td><td>System Architect</td><td>Edinburgh</td><td>61</td><td>2011-04-25</td><td>$320,800</td></tr>
                <tr><td>Garrett Winters</td><td>Accountant</td><td>Tokyo</td><td>63</td><td>2011-07-25</td><td>$170,750</td></tr>
                <tr><td>Ashton Cox</td><td>Junior Technical Author</td><td>San Francisco</td><td>66</td><td>2009-01-12</td><td>$86,000</td></tr>
                <tr><td>Cedric Kelly</td><td>Senior Javascript Developer</td><td>Edinburgh</td><td>22</td><td>2012-03-29</td><td>$433,060</td></tr>
                <tr><td>Airi Satou</td><td>Accountant</td><td>Tokyo</td><td>33</td><td>2008-11-28</td><td>$162,700</td></tr>
                <tr><td>Brielle Williamson</td><td>Integration Specialist</td><td>New York</td><td>61</td><td>2012-12-02</td><td>$372,000</td></tr>
                <tr><td>Herrod Chandler</td><td>Sales Assistant</td><td>San Francisco</td><td>59</td><td>2012-08-06</td><td>$137,500</td></tr>
                <tr><td>Rhona Davidson</td><td>Integration Specialist</td><td>Tokyo</td><td>55</td><td>2010-10-14</td><td>$327,900</td></tr>
                <tr><td>Colleen Hurst</td><td>Javascript Developer</td><td>San Francisco</td><td>39</td><td>2009-09-15</td><td>$205,500</td></tr>
                <tr><td>Sonya Frost</td><td>Software Engineer</td><td>Edinburgh</td><td>23</td><td>2008-12-13</td><td>$103,600</td></tr>
                <!-- Tambahkan lebih banyak data jika perlu -->
            </tbody>
        </table>
    </div>
</section>
<!-- Footer -->
<footer class="mt-4">
    <p>&copy; 2024 Tech-Themed Portfolio. All rights reserved.</p>
</footer>

<!-- Scripts -->
<script src="assets/jquery/jquery-3.7.1.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
