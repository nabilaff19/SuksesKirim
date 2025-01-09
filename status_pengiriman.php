<?php
session_start();
if (!$_SESSION['login'] || $_SESSION['login'] == '') {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pengiriman</title>
    <link rel="stylesheet" href="status_pengiriman.css">
</head>

<body>
    <div class="container">
        <p>
        <h1>Status Pengiriman</h1>
        </p>

        <div class="shipping-info-pengirim">
            <p><strong>Nama Pengirim:</strong> New Balance Store </p>
            <p><strong>Alamat Pengirim:</strong> Jl. Ahmad Yani </p>
        </div>

        <div class="product-box">
            <div class="product-header">
                <img src="WhatsApp_Image_2024-12-13_at_19.34.14_bd4986b6-removebg-preview.png" alt="New Balance Logo">
                <span>New Balance Store</span>
            </div>
            <div class="product-detail">
                <img src="WhatsApp_Image_2024-12-13_at_15.58.25_cb27401c-removebg-preview.png" alt="New Balance 530" class="product-image">
                <div class="product-info">
                    <p><strong>New Balance 530 MR530CF Stone Pink White</strong></p>
                    <p>Stone Pink White, 38</p>
                    <p>Rp 1.800.000,00</p>
                </div>
            </div>
            <div class="product-detail">
                <img src="WhatsApp_Image_2024-12-13_at_17.41.27_5331656f-removebg-preview.png" alt="New Balance 530-43" class="product-image">
                <div class="product-info">
                    <p><strong>New Balance 530-43</strong></p>
                    <p>Black White, 38</p>
                    <p>Rp 1.800.000,00</p>
                </div>
            </div>

            <!-- Informasi Pengiriman -->
            <div class="shipping-info">
                <p><strong>Nama Penerima:</strong> Susanti Fairy</p>
                <p><strong>Alamat Penerima:</strong> Jl. Semarang no.41 </p>
                <p><strong>Status Pengiriman:</strong> <span class="status-diterima">Diterima</span></p>
            </div>

            <!-- Tombol Kembali -->
            <a href="beranda.php" class="back-button">Kembali</a>
        </div>
</body>

</html>