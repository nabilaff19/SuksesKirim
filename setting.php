<?php
session_start();
if (!$_SESSION['login'] || $_SESSION['login'] == '') {
  header('location: login.php');
}

if (isset($_POST['logout'])) {
  $_SESSION['login'] = '';
  session_destroy();
  header('location: login.php');
}
require 'functions.php';
$user = getDataUserById($_SESSION['login']);

if (isset($_POST['update'])) {
  if (updateUserDataById($_SESSION['login'], $_POST)) {
    echo "<script>alert('Data berhasil diupdate')</script>";
    $user = getDataUserById($_SESSION['login']);
  } else {
    echo "<script>alert('Gagal mengupdate data!')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengaturan - Seluler</title>
  <style>
    /* Gaya Global */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #ffc0cb, #ffe4e1);
      width: 100%;
      max-width: 375px;
      /* Lebar layar iPhone */
      margin: 0 auto;
      border-left: 5px solid #f2819d;
      border-right: 5px solid #f2819d;
      box-sizing: border-box;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      /* Dibutuhkan untuk posisi elemen absolut */
    }

    /* Tombol Panah Kembali */
    .back-arrow {
      position: absolute;
      top: 6px;
      left: 8px;
      /* Geser lebih ke kiri */
      background: none;
      border: none;
      font-size: 26px;
      /* Ukuran panah */
      font-weight: bold;
      /* Penebalan */
      color: rgb(255, 255, 255);
      cursor: pointer;
      z-index: 10;
      /* Agar berada di atas elemen lain */
    }

    .back-arrow:hover {
      color: #ff69b4;
    }

    /* Header */
    .header {
      display: flex;
      flex-direction: column;
      align-items: center;
      background: #ff69b4;
      color: white;
      padding: 15px;
      text-align: center;
    }

    .header img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
    }

    .header h1 {
      margin: 10px 0 5px;
      font-size: 16px;
      cursor: default;
      /* Menghilangkan efek penunjuk pada nama */
    }

    .header p {
      margin: 0;
      font-size: 12px;
    }

    /* Konten - Mengatur Formulir */
    .content {
      flex: 1;
      /* Memastikan konten mengambil sisa ruang */
      padding: 20px;
    }

    .setting-form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .input-group {
      display: flex;
      flex-direction: column;
      font-size: 14px;
    }

    .input-group label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .input-group input {
      padding: 8px;
      border: 1px solid #f2819d;
      border-radius: 5px;
      font-size: 14px;
    }

    .save-button,
    .logout-button {
      display: block;
      width: 100%;
      background-color: #ff69b4;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
      transition: background 0.3s ease;
    }

    .save-button:hover,
    .logout-button:hover {
      background-color: #ff1493;
    }
  </style>
</head>

<body>
  <!-- Tombol Kembali -->
  <button class="back-arrow" onclick="location.href='beranda.php'">&#x2B05;</button>

  <!-- Header -->
  <div class="header">
    <img src="profile.jpg" alt="Profil">
    <h1><?= $user['name'] ?></h1>
    <p><?= $user['email'] ?></p>
  </div>

  <!-- Konten - Pengaturan Formulir -->
  <div class="content">
    <form action="" method="post" class="setting-form">
      <div class="input-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" required id="name" name="name" placeholder="Masukkan Nama" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" required id="email" name="email" placeholder="Masukkan Email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" required id="password" name="password" placeholder="Masukkan Password" required>
      </div>
      <div class="input-group">
        <button type="submit" name="update" class="save-button">Simpan</button>
      </div>
    </form>
    <!-- Tombol Logout -->
    <form action="" method="post">
      <button name="logout" type="submit" class="logout-button">Logout</button>
    </form>
  </div>
</body>

</html>