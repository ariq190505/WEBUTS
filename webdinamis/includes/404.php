
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container-404 {
            text-align: center;
            max-width: 600px;
            padding: 2rem;
            background: rgba(18, 18, 18, 0.9);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .container-404 h1 {
            font-size: 6rem;
            font-weight: bold;
            color: #ff5722;
        }

        .container-404 p {
            font-size: 1.2rem;
            color: #bdbdbd;
        }

        .container-404 i {
            font-size: 8rem;
            color: #ff5722;
            margin-bottom: 1rem;
        }

        .btn-home {
            margin-top: 1.5rem;
            padding: 0.8rem 2rem;
            border-radius: 30px;
            font-size: 1rem;
            background-color: #ff5722;
            color: #121212;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #ff8a50;
            color: #ffffff;
        }

<body>

    <div class="container-404">
        <i class="fas fa-exclamation-triangle"></i>
        <h1>404</h1>
        <p>Oops! Halaman yang Anda cari tidak ditemukan.</p>
        <p>Sepertinya halaman ini telah dihapus atau tidak pernah ada.</p>
        <a href="?page=home" class="btn-home">Kembali ke Beranda</a>
    </div>

</body>
</html>
