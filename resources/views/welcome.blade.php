<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
            background-image: url('path_to_your_image.jpg');
            /* Ganti dengan path gambar jika ingin */
            background-size: cover;
            /* Menutupi seluruh latar belakang */
            background-position: center;
            /* Memusatkan gambar */
            opacity: 0.9;
            /* Membuat latar belakang sedikit transparan */
        }

        .container {
            text-align: center;
            margin-top: 100px;
        }

        .btn-custom {
            background-color: #17a2b8;
            border-color: #17a2b8;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #138496;
            border-color: #117a8b;
            transform: scale(1.05);
            /* Menambahkan efek pembesaran saat hover */
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Reporting</h1>
        <p>Silakan pilih salah satu halaman di bawah ini:</p>
        <div class="btn-group" role="group">
            <a href="{{ route('reports.index') }}" class="btn btn-custom btn-lg">
                <i class="fas fa-file-alt"></i> Halaman Report
            </a>
            <a href="{{ route('reports.analysis') }}" class="btn btn-custom btn-lg">
                <i class="fas fa-chart-line"></i> Halaman What-If Analysis
            </a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Aplikasi Reporting. Semua hak dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
