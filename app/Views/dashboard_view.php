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
            display: flex;
            max-width: 1300px;
            margin: 40px auto;
        }

        .sidebar {
            flex: 0.5;
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h2 {
            color: #fff;
            margin-top: 15px;
        }

        .sidebar img {
            width: 100px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .sidebar p {
            color: #fff;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .sidebar a:hover {
            color: #0056b3;
        }

        .sidebar a img {
            margin-right: 10px;
            width: 40px;
            height: 40px;
        }

        .content {
            flex: 3;
            background-color: #ffffff;
            padding: 30px;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .content h2 {
            color: #007BFF;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .content p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .search-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-container label {
            margin-right: 10px;
        }

        .search-container input[type=text] {
            width: 300px;
            padding: 5px;
            border-radius: 20px;
            border: 2px solid #ccc;
            font-size: 16px;
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
        }

        .schedule-table th,
        .schedule-table td {
            border: 3px solid #ccc;
            padding: 15px;
            text-align: left;
            color: #333;
        }

        .schedule-table th {
            background-color: #007BFF;
            color: #fff;
        }

        .lab-ict-logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 30px;
            height: auto;
        }

        .edit-btn {
            background-color: #0056b3;
            color: #fff;
            border: none;
            padding: 5px 8px;
            text-align: center;
            font-size: 13px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 20px;
        }

        .edit-btn:hover {
            background-color: #003366;
        }

        .delete-btn {
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 5px 8px;
            text-align: center;
            font-size: 13px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 20px;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }


        .schedule-table td:nth-child(9) {
            width: 120px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4yiWC4VV-J-3heupPuDRYM4ANZapFf_8ZVU6sH76RTA&s" alt="Logo Lab ICT">
            <p>LAB ICT</p>
            <h2>Penjadwalan</h2>
            <ul>
                <li><a href="#"><img src="https://media.istockphoto.com/id/952981140/vector/home-icon.jpg?s=612x612&w=0&k=20&c=HEf3EQ89r53qeGhkCmyH27HCz_QbiosDW-zZWscnAtU=" class="dashboard-icon" alt="Dashboard">
                        <form action="<?= site_url('dashboard') ?>" method="post">Dashboard</form>
                    </a></li>
                <li><a href="<?= site_url('penjadwalan') ?>" method="get"><img src="https://st2.depositphotos.com/15813590/44817/v/450/depositphotos_448170874-stock-illustration-calendar-vector-icon-isolated-white.jpg" class="penjadwalan-icon" alt="Penjadwalan">Penjadwalan</a></li>
                <li><a href="<?= site_url('ruangan') ?>" method="get"><img src="https://previews.123rf.com/images/vectorhome/vectorhome1907/vectorhome190701283/127532618-coworking-space-icon.jpg" class="info-ruangan" alt="inforuangan"> Info ruangan</a></li>
                <li><a href="<?= site_url('logout') ?>"><img src="https://media.istockphoto.com/id/1383119801/vector/the-exit-icon-logout-and-output-outlet-out-symbol-flat-vector-illustration.jpg?s=612x612&w=0&k=20&c=vCeRAJcKZmjTfZHQlvq_-2Z-0EbA7gxXK5tmYxR27s8=" class="logout-icon" alt="Logout"> Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Dashboard Overview</h2>
            
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Nama Dosen</th>
                        <th>Mata Kuliah</th>
                        <th>Kelompok</th>
                        <th>Ruangan</th>
                        <th>SKS</th>
                        <th>Hari</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Tanggal</th> <!-- Ubah dari "Hari" menjadi "Tanggal" -->
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($jadwal) && is_array($jadwal)): ?>
                    <?php foreach ($jadwal as $row) : ?>
                        <tr>
                            <td><?= $row->nm_dosen ?></td>
                            <td><?= $row->nm_matkul ?></td>
                            <td><?= $row->kelompok ?></td>
                            <td><?= $row->lab ?></td>
                            <td><?= $row->sks ?></td>
                            <td><?= $row->hari ?></td>
                            <td><?= $row->waktu_mulai ?></td>
                            <td><?= $row->waktu_selesai ?></td>
                            <td><?= $row->tanggal ?></td>
                            <td><?= $row->status ?></td>
                            <td>
                                <a href="<?= site_url('dashboard/edit/' . $row->kd_jadwal) ?>" class="edit-btn">Edit</a>
                                <a href="<?= site_url('dashboard/delete/' . $row->kd_jadwal) ?>" class="delete-btn">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php else :?>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>