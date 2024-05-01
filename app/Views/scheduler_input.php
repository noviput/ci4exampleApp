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
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4yiWC4VV-J-3heupPuDRYM4ANZapFf_8ZVU6sH76RTA&s" alt="Logo Lab ICT" class="logo">
            Form Input Penjadwalan
        </h2>
        <form action="<?= site_url('jadwal') ?>" method="post">
            <div class="row">
                <div class="form-group col-md-5 mt-3">
                    <label for="course_name">Mata Kuliah:</label>
                    <input type="text" class="form-control" id="course_name" name="course_name" required>
                </div>
                <div class="form-group col-md-5 mt-3">
                    <label for="lecturer">Dosen:</label>
                    <input type="text" class="form-control" id="lecturer" name="lecturer" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-1">
                    <label for="sks">SKS:</label>
                    <input type="number" class="form-control" id="sks" name="sks" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="room">Ruangan:</label>
                    <select class="form-control" id="room" name="room" required>
                        <option value="lab-2">LAB 02</option>
                        <option value="lab-4">LAB 04</option>
                        <option value="lab-5">LAB 05</option>
                        <option value="lab-6">LAB 06</option>
                        <option value="lab-7">LAB 07</option>
                        <option value="lab-8">LAB 08</option>
                        <option value="lab-9">LAB 09</option>
                        <option value="lab-10">LAB 10</option>
                        <option value="lab-11">LAB 11</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="day">Hari:</label>
                    <select class="form-control" id="day" name="day" required>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="start_time">Jam Masuk:</label>
                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="end_time">Jam Keluar:</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="date">Tanggal:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>
