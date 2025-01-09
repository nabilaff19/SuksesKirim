<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses Kirim</title>
    <link rel="stylesheet" href="isi_data.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <img src="logo.jpg" alt="Sukses Kirim">
        </header>

        <form action="" method="POST" class="form">
            <div class="input-group">
                <label for="email">
                    <img src="gmail.jpg" alt="Email Icon">
                </label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <label for="password">
                    <img src="key.jpg" alt="Password Icon">
                </label>
                <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
            </div>

            <!-- Tambahkan hyperlink untuk "Lupa Sandi" -->
            <a href="lupasandi.php" class="forgot-password" style="text-decoration: none; color: rgb(233, 23, 128);">Lupa Sandi?</a>

            <button type="submit" name="submit" class="submit-btn">MASUK</button>
        </form>

        <div class="divider">OR</div>

        <!-- Tombol DAFTAR dengan Hyperlink -->
        <a href="daftar.php" class="submit-btn" style="text-decoration: none; display: block; text-align: center;">DAFTAR</a>
    </div>
</body>

</html>

<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header('location: beranda.php');
    exit;
}

if (isset($_POST['submit'])) {
    require 'functions.php';
    $id = login($_POST);
    if ($id) {
        $_SESSION['login'] = $id;
        header('location: beranda.php');
    } else {
        echo "<script>alert('Gagal Login, Mohon cek email dan password')</script>";
    }
}
?>