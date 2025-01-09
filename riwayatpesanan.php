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
    <title>Riwayat Pesanan</title>
    <style>
        /* Umum: Gaya dasar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            font-size: 16px;
            /* Ukuran dasar font */
        }

        .container {
            width: 90%;
            /* Lebar fleksibel untuk layar kecil */
            margin: 20px auto;
            padding: 20px;
            height: 100vh;
            background-color:rgb(255, 223, 223);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-left: 4px solid #ff8383;
            /* Garis tepi kiri */
            border-right: 4px solid #ff8383;
            /* Garis tepi kanan */
            max-width: 375px;
            /* Disesuaikan untuk lebar iPhone 11 */
        }


        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        .order-history {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .order-item {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            background-color: #fafafa;
        }

        .order-item h2 {
            margin: 0 0 10px 0;
            color: #555555;
            font-size: 18px;
            /* Heading default */
        }

        .order-item p {
            margin: 5px 0;
            color: #666666;
            font-size: 14px;
            /* Deskripsi default */
        }

        .btn {
            display: inline-block;
            background-color: #ff69b4;
            color: white;
            text-align: center;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 14px;
            /* Ukuran tombol */
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #ff4081;
            color: #ffffff;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        /* Responsif khusus untuk iPhone 11 */
        @media screen and (max-width: 375px) {
            .order-item h2 {
                font-size: 16px;
                /* Heading lebih kecil untuk layar kecil */
                height: 100%;
            }

            .order-item p {
                font-size: 12px;
                /* Deskripsi lebih kecil */
            }

            .btn {
                padding: 8px 16px;
                /* Kurangi padding tombol */
                font-size: 12px;
                /* Ukuran font tombol lebih kecil */
            }

            .container {
                padding: 15px;
                /* Kurangi padding kontainer untuk layar kecil */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Riwayat Pesanan</h1>
        <div class="order-history">
            <div class="order-item">
                <h2>Pesanan #1001</h2>
                <p><strong>Tanggal Pemesanan:</strong> 11-11-2024</p>
                <p><strong>Status:</strong> Selesai</p>
                <p><strong>Total:</strong> Rp 3.600.000,00</p>
                <a href="rincianpesanan.php?order=1001" class="btn">Lihat Rincian</a>
            </div>
        </div>
        <div class="back-button">
            <a href="beranda.php" class="btn">Kembali ke Beranda</a>
        </div>
    </div>
</body>

</html>