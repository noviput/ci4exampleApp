<!-- Contoh view untuk form edit dengan dropdown/select -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal</title>
</head>
<body>
    <h1>Edit Jadwal</h1>
    <?php if(session()->get('success')): ?>
        <div><?= session()->get('success') ?></div>
    <?php endif; ?>
    <?php if(session()->get('error')): ?>
        <div><?= session()->get('error') ?></div>
    <?php endif; ?>
    <form action="<?= base_url('scheduler/update/'.$jadwal['id']) ?>" method="post">
        <label for="nip">Dosen:</label><br>
        <select name="nip" id="nip">
            <?php foreach ($dosen as $d): ?>
                <option value="<?= $d['nip'] ?>" <?= ($d['nip'] == $jadwal['nip']) ? 'selected' : '' ?>>
                    <?= $d['nama'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <label for="kd_matkul">Mata Kuliah:</label><br>
        <select name="kd_matkul" id="kd_matkul">
            <?php foreach ($matkul as $m): ?>
                <option value="<?= $m['kd_matkul'] ?>" <?= ($m['kd_matkul'] == $jadwal['kd_matkul']) ? 'selected' : '' ?>>
                    <?= $m['nama_matkul'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <label for="id_lab">Ruangan:</label><br> 
        <select name="id_lab" id="id_lab">
            <?php foreach ($ruangan as $r): ?>
                <option value="<?= $r['id_lab'] ?>" <?= ($r['id_lab'] == $jadwal['id_lab']) ? 'selected' : '' ?>>
                    <?= $r['nama_lab'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <label for="waktu_mulai">Waktu Mulai:</label><br>
        <input type="text" id="waktu_mulai" name="waktu_mulai" value="<?= $jadwal['waktu_mulai'] ?>"><br>
        <label for="waktu_selesai">Waktu Selesai:</label><br>
        <input type="text" id="waktu_selesai" name="waktu_selesai" value="<?= $jadwal['waktu_selesai'] ?>"><br>
        <label for="hari">Hari:</label><br>
        <input type="text" id="hari" name="hari" value="<?= $jadwal['hari'] ?>"><br>
        <label for="tanggal">Tanggal:</label><br>
        <input type="text" id="tanggal" name="tanggal" value="<?= $jadwal['tanggal'] ?>"><br><br>
        <button type="submit">Update Jadwal</button>
    </form>
</body>
</html>
