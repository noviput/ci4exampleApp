<!-- app/Views/logout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1>Logout</h1>
    <p>Anda telah berhasil logout.</p>
    <form action="logout" method="post">
        <button type="submit">Logout</button>
    </form>
    <button onclick="history.back()">Batal</button>
    <a href="submit">Kembali ke Halaman Login</a>
</body>
</html>
