<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Lab ICT Web Penjadwalan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://www.bhmpics.com/downloads/blue-landscape-wallpaper/38.vector-wallpaper-with-a-landscape-mountains-and-river-vector-id941103814.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        
        }
        .container {
            max-width: 950px;
            margin: 100px auto;
            background-color: #ffffff; 
            padding: 100px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }
        header h1 {
            color: #007BFF;
            font-size: 2.5em;
            margin: 0;
        }
        nav {
            display: flex;
            gap: 25px;
        }
        nav a {
            text-decoration: none;
            color: #007BFF;
            padding: 12px 25px;
            border-radius: 8px;
            background-color: #f0f0f0;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-weight: 500;
        }
        nav a:hover {
            background-color: #e0e0e0;
            color: #0056b3;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
            text-align: left;
        }
        .content h2 {
            color: #007BFF;
            margin-top: 0;
        }
        .content p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Selamat Datang di Dasbor Lab ICT Penjadwalan</h1>
            <nav>
                <a href="<?= site_url('dashboard') ?>">Dasbor</a>
                <a href="<?= site_url('profile') ?>">Profil</a>
                <a href="<?= site_url('penjadwalan') ?>">Penjadwalan</a>
                <a href="<?= site_url('logout') ?>">Logout</a>
            </nav>
        </header>

        <div class="content">
            <h2>Dashboard Overview</h2>
            <p>Selamat datang di dashboard penjadwalan Lab ICT. Di sini Anda dapat mengakses berbagai fitur penjadwalan, melihat profil Anda, dan mengelola sesi Anda. Silakan pilih menu di atas untuk memulai.</p>
            <!-- Anda dapat menambahkan lebih banyak konten atau informasi di sini -->
        </div>
    </div>
</body>
</html>