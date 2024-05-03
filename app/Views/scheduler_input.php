
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Penjadwalan</title>
    <!-- Tautkan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            border-top: 3px solid #007bff; /* Warna batasan atas */
            border-radius: 5px; /* Bingkai bulat */
            padding: 20px; /* Ruang padding */
            margin-top: 20px; /* Jarak ke atas */
            background-color: #e9ecef; /* Warna latar belakang */
            background-image: url(''); /* URL gambar latar belakang */
            background-size: cover; /* Ukuran gambar latar belakang */
            background-repeat: no-repeat; /* Hindari pengulangan gambar */
            border-bottom: 3px solid #007bff; 
        }

        .form-group label {
            color: black; /* Warna teks */
            font-weight: bold; /* Ketebalan label */
        }

        .logo {
            width: 60px; 
            height: auto; 
            border-radius: 50%; 
            margin-bottom: 10px; /* Atur jarak kiri */
        }

        h2 {
            color: black; /* Warna teks hitam */
        }

        .btn-back {
            margin-top: 20px; /* Atur jarak atas */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4yiWC4VV-J-3heupPuDRYM4ANZapFf_8ZVU6sH76RTA&s" alt="Logo Lab ICT" class="logo">
            Form Input Penjadwalan
        </h2>
        <form action="<?= site_url('penjadwalan') ?>" method="post">
            <div class="row">
                <div class="form-group col-md-5 mt-3">
                    <label for="course_name">Mata Kuliah:</label>
                    <select class="form-control" name="kd_matkul" id="kd_matkul">
                <?php foreach($matkul as $row): ?>
                    <option value="<?= $row['kd_matkul'] ?>"><?= $row['nm_matkul'] ?></option>
                <?php endforeach; ?>
            </select>
                </div>
                <div class="form-group col-md-5 mt-3">
                    <label for="lecturer">Dosen:</label>
                    <select class="form-control" name="nip" id="nip">
                <?php foreach($dosen as $row): ?>
                    <option value="<?= $row['nip'] ?>"><?= $row['nm_dosen'] ?></option>
                <?php endforeach; ?>
            </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-1">
                    
                </div>
                <div class="form-group col-md-3">
                    <label for="room">Ruangan:</label>
                   
                    <select class="form-control" name="id_lab" id="id_lab">
                <?php foreach($ruangan as $row): ?>
                    <option value="<?= $row['id_lab'] ?>"><?= $row['lab'] ?></option>
                <?php endforeach; ?>
            </select>
                </div>
                <div class="form-group col-md-3">
                </div>
                <div class="form-group col-md-3">
                    <label for="day">Hari:</label>
                    <select class="form-control" name="hari" id="hari" required>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="start_time">Jam Masuk:</label>
                    <input type="time" name="waktu_mulai" id="waktu_mulai" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="end_time">Jam Keluar:</label>
                    <input type="time" name="waktu_selesai" id="waktu_selesai" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="date">Tanggal:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <!-- Tombol Back to Dashboard -->
        <a href="dashboard" class="btn btn-secondary btn-back">Back to Dashboard</a>
    </div>
</body>

</html>
