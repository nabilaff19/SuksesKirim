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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Pesanan</title>
    <link rel="stylesheet" href="rincianpesanan2.css">
</head>

<body>
    <div class="container">
        <div class="section">
            <h1>Rincian Pesanan</h1>
            <div class="sender-receiver">
                <p><strong>Pengirim</strong></p>
                <p>New Balance Store (081234567892)</p>
                <p><i class="icon-location"></i> Jl. Ahmad Yani</p>
                <p><strong>Penerima</strong></p>
                <p>Susanti (081234567894)</p>
                <p><i class="icon-location"></i> Jl. Semarang no.41</p>
            </div>
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
            <p><strong>Total Pesanan:</strong> Rp 3.600.000,00</p>
        </div>

        <div class="tracking-section">
            <h2>Tracking Pengiriman</h2>
            <ul class="tracking-steps">
                <li class="step completed">
                    <div class="step-content">
                        <span class="step-icon">✔</span>
                        <div class="step-text">
                            <p class="step-info">Pesanan tiba di alamat tujuan</p>
                            <p class="step-date">14 Desember 2024</p>
                        </div>
                    </div>
                </li>
                <li class="step completed">
                    <div class="step-content">
                        <span class="step-icon">✔</span>
                        <div class="step-text">
                            <p class="step-info">Pesanan tiba di lokasi transit</p>
                            <p class="step-date">13 Desember 2024</p>
                        </div>
                    </div>
                </li>
                <li class="step completed">
                    <div class="step-content">
                        <span class="step-icon">✔</span>
                        <div class="step-text">
                            <p class="step-info">Pesanan dibuat</p>
                            <p class="step-date">12 Desember 2024</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resi-box">
            <p><strong>No. Resi:</strong> 1001</p>
            <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
            <p><strong>Waktu Pemesanan:</strong> 11-11-2024 09:00</p>
            <p><strong>Waktu Pengiriman:</strong> 12-11-2024 09:00</p>
            <p><strong>Waktu Pesanan Selesai:</strong> 13-11-2024 07:54</p>
        </div>
        <div class="button-container">
            <a href="beranda.php" class="back-button">Kembali</a>
        </div>

    </div>
</body>

</html>