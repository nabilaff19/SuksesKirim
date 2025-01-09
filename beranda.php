<?php
session_start();

// Pastikan $_SESSION['login'] sudah diatur sebelum digunakan
if (!isset($_SESSION['login']) || $_SESSION['login'] == '') {
    header('location: login.php');
    exit; // Hentikan eksekusi setelah pengalihan
}

require 'functions.php';

// Ambil data pengguna berdasarkan ID yang disimpan di sesi
$user = getDataUserById($_SESSION['login']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Mobile</title>
    <link rel="stylesheet" href="desain_beranda.css">
</head>

<body>
    <!-- Header -->
    <div class="header">
        <a href="profil.php" class="profile-link">
            <img src="profile.jpg" alt="Profile">
            <h1><?= $user['name'] ?></h1>
        </a>
        <p><?= $user['email'] ?></p>
        <div class="header-icons">
            <!-- Tetap menyertakan hyperlink ke setting.php -->
            <img src="settings.jpg" alt="Settings" onclick="location.href='setting.php'">
        </div>
    </div>

    <!-- Menu -->
    <div class="menu">
        <button onclick="location.href='pesanansaya.php'" class="button-border" style="font-weight: bold;">Pesanan Saya</button>
        <button onclick="location.href='riwayatpesanan.php'" class="button-border" style="font-weight: bold;">Riwayat Pesanan</button>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="icon-circle" onclick="location.href='statuspembayaran.php'">
            <img src="statusPembayaran.jpg" alt="Status Pembayaran">
            <p>Status Pembayaran</p>
        </div>
        <div class="icon-circle" onclick="location.href='status_pengiriman.php'">
            <img src="statusPengiriman.jpg" alt="Status Pengiriman">
            <p>Status Pengiriman</p>
        </div>
        <div class="icon-circle" onclick="location.href='rincianpesanan.php'">
            <img src="rincianPesanan.jpg" alt="Rincian Pesanan">
            <p>Rincian Pesanan</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <!-- Kosong sesuai dengan permintaan -->
    </div>
</body>

</html>