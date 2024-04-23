<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Lab ICT Web Penjadwalan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('https://www.bhmpics.com/downloads/blue-landscape-wallpaper/38.vector-wallpaper-with-a-landscape-mountains-and-river-vector-id941103814.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
<<<<<<< HEAD
            display: flex;
            max-width: 1200px;
            margin: 50px auto;
=======
        }

        .sidebar {
            flex: 1;
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .sidebar h2 {
            color: #007BFF;
            margin-top: 0;
        }

        .sidebar img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .sidebar a:hover {
            color: #007BFF;
        }

        .content {
            flex: 3;
            background-color: #ffffff;
            padding: 30px;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
        }

        .content h2 {
            color: #007BFF;
            margin-top: 0;
        }

        .content p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-container input[type=text] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
        }

        .schedule-table th,
        .schedule-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .schedule-table th {
            background-color: #f2f2f2;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="https://via.placeholder.com/150" alt="Profil">
            <h2>Penjadwalan</h2>
            <ul>
                <li><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('profile') ?>">Profil</a></li>
                <li><a href="<?= site_url('penjadwalan') ?>">Penjadwalan</a></li>
                <li><a href="<?= site_url('logout') ?>">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="search-container">
                <input type="text" placeholder="Cari...">
            </div>
            <h2>Dashboard Overview</h2>
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Kode Matkul</th>
                        <th>Nama Dosen</th>
                        <th>Nama Matkul</th>
                        <th>Nama Kelompok</th>
                        <th>Ruangan</th>
                        <th>SKS</th>
                        <th>Hari</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan diisi disini -->
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
