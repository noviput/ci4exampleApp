<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Ruangan Lab ICT</title>
    <style>
        body {
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
            background-color: #FFFFFF; 
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            width: 700px; /* Lebar tabel */
            position: relative;
            text-align: center;
            overflow-x: auto; /* Mengaktifkan scroll horizontal pada container */
        }
        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .lab-table-container {
            overflow-x: auto; /* Mengaktifkan scroll horizontal */
        }
        .lab-table {
            width: 100%; /* Lebar tabel sesuai container */
            border-collapse: collapse;
        }
        .lab-table th,
        .lab-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd; /* Garis antar baris */
            text-align: left;
        }
        .occupied {
            background-color: #ff0000; /* Warna lab terisi */
            color: #fff;
        }
        .back-button {
            margin-top: 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Menghapus underline dari tautan */
            display: inline-block; /* Membuat tautan berperilaku seperti tombol */
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        /* Hapus gaya panah */
        .arrow-icon {
            display: none;
        }
        /* Mengatur posisi dan ukuran logo */
        .logo {
            float: left; /* Membuat logo berada di sebelah kiri */
            margin-right: 20px; /* Memberi jarak antara logo dan teks */
        }
        .logo img {
            width: 60px; /* Ukuran logo yang baru */
            height: auto; /* Biarkan tinggi logo disesuaikan secara otomatis */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTadTQxsd060TxmyUJABZnog10LPYkEDeuqbkKOOCrPBg&s" alt="Logo">
        </div>
        <h1>Info Ruangan Lab ICT</h1>
        <table class="lab-table">
            <thead>
            <tr>
                <th>Ruangan</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Tanggal</th> <!-- Ubah dari "Hari" menjadi "Tanggal" -->
                <th>Status</th> <!-- Kolom Status -->
            </tr>
            </thead>
            <!-- Data contoh ruangan lab -->
            <tbody>
            <?php if (isset($jadwal) && is_array($jadwal)): ?>
                    <?php foreach ($jadwal as $row) : ?>
                        <tr>
                        
                            
                            <td><?= $row->lab ?></td>
                            
                            
                            <td><?= $row->waktu_mulai ?></td>
                            <td><?= $row->waktu_selesai ?></td>
                            <td><?= $row->tanggal ?></td>
                            <td><?= $row->status ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                    <?php else :?>
                    <?php endif;?>
            <!-- Dan seterusnya -->
            </tbody>
        </table>
        <a href="<?= site_url('dashboard')  ?>" class="back-button">Back to dashboard</a>
    </div>
</body>
</html>
