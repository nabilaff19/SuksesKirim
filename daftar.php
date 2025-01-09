<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Sukses Kirim</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        .container {
            height: 100vh;
            background-color: #f8d7e8;
            max-width: 375px;
            margin: auto;
            padding: 20px;
            text-align: center;
            border: 2px solid #ffc9d6;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header img {
            width: 100px;
            margin: 20px auto;
            mix-blend-mode: multiply;
        }

        h1 {
            font-size: 24px;
            color: #7a3b3f;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 14px;
            color: #7a3b3f;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 2px solid #ffc9d6;
            border-radius: 20px;
            font-size: 16px;
            color: #7a3b3f;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px 0;
            margin-top: 10px;
            background-color: #ff6f91;
            color: #fff;
            border: none;
            border-radius: 20px;
            font-size: 18px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #ff4f70;
        }

        .footer {
            margin-top: 20px;
            color: #7a3b3f;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="logo.jpg" alt="Logo Sukses Kirim" style="width: 35%; height: auto;">
        </div>
        <h1>Daftar Akun</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button name="submit" type="submit">Daftar</button>
        </form>
        <div class="footer">
            <p>Sudah punya akun? <a href="login.php" style="color:#ff6f91; text-decoration:none;">Masuk</a></p>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    require "functions.php";
    if (daftar($_POST)) {
        echo "<script>alert('Berhasil Mendaftar, Anda akan dialihkan ke halaman login'); window.location.href = 'login.php'</script>";
    }
}
?>