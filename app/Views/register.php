<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab ICT Web Penjadwalan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            width: 300px;
            position: relative;
            text-align: center;
        }
        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .logo {
            margin-bottom: 10px;
            background-color: transparent;
        }
        .logo img {
            width: 80px;
            height: 80px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #808080;
            box-sizing: border-box;
            padding-left: 30px; /* Add left padding for the icon */
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #ffffff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .input-icon {
            position: relative;
        }
        .input-icon i {
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            color: #808080; /* Adjust icon color */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTadTQxsd060TxmyUJABZnog10LPYkEDeuqbkKOOCrPBg&s" alt="Logo">
        </div>
    
        <?php if (session()->has('error')): ?>
            <div class="alert alert-danger">
                <?= session('error') ?>
            </div>
        <?php endif; ?>
        <h1>Daftar Akun</h1>
        <form action="<?= site_url('register') ?>" method="post">
            <div class="input-icon">
                <i class="fas fa-user"></i> <!-- Icon "person" -->
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-icon">
                <i class="fas fa-lock"></i> <!-- Icon "lock" -->
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-icon">
                <i class="fas fa-lock"></i> <!-- Icon "lock" -->
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
            </div>
            <div>
                <input type="submit" value="Daftar">
            </div>
        </form>
    </div>
</body>
</html>
