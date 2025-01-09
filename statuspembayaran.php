<?php
session_start();
if (!$_SESSION['login'] || $_SESSION['login'] == '') {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Status Pembayaran</title>
    <link rel="stylesheet" href="statuspembayaran2.css">
</head>

<body>
    <div class="status-container">
        <h1>Status Pembayaran</h1>
        <p><strong>Nama Toko: New Balance Indonesia</p></strong>
        <div class="status-box">
            <div class="status-info">
                <p><strong>Nama Pemesan:</strong> Susanti Fairy</p>
                <p><strong>Nomor Pesanan:</strong> #123456</p>
                <p><strong>Tanggal Pemesanan:</strong> 12 Desember 2024</p>
            </div>
            <div class="status-detail">
                <p><strong>Status Pembayaran:</strong> <span class="status">Berhasil!</span></p>
                <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
                <p><strong>Jumlah:</strong> Rp 3.600.000</p>
            </div>
            <div class="product-info">
                <h2>Detail Produk</h2>
                <div class="product-item">
                    <img src="WhatsApp_Image_2024-12-13_at_15.58.25_cb27401c-removebg-preview.png" alt="Foto Produk" class="product-image">
                    <div class="product-description">
                        <p><strong>Nama Produk:</strong> New Balance 530 MR530CF Stone Pink White</p>
                        <p><strong>Deskripsi:</strong> Stone Pink White, 38</p>
                        <p><strong>Harga:</strong> Rp 1.800.000</p>
                    </div>
                </div>
                <div class="product-item">
                    <img src="WhatsApp_Image_2024-12-13_at_17.41.27_5331656f-removebg-preview.png" alt="Foto Produk" class="product-image">
                    <div class="product-description">
                        <p><strong>Nama Produk:</strong> New Balance 530-43</p>
                        <p><strong>Deskripsi:</strong> Black White, 38</p>
                        <p><strong>Harga:</strong> Rp 1.800.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="action-buttons">
            <button onclick="window.location.href='beranda.php'">Kembali</button>
        </div>

        <!-- Tambahan Hyperlink di Bawah -->
        <div style="text-align: center; margin-top: 10px;">
            <a href="beranda.php" style="text-decoration: none; color: #ff69b4; font-size: 14px;">
            </a>
        </div>
    </div>
</body>

</html>