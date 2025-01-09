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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Pesanan Saya</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Global Styles */
    .container {
      font-family: 'Poppins', sans-serif;
      margin: auto;
      background: linear-gradient(to bottom, #ffafbd, #ffc3a0);
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 375px;
      height: 100vh;
      overflow: auto;
      scrollbar-width: none;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #fff8f8;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .header {
      width: 100%;
      text-align: center;
      background: #ffb6c1;
      padding: 15px 0;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .header h1 {
      font-size: 24px;
      color: #ff5a82;
      font-weight: bold;
    }

    .order-container {
      width: 90%;
      max-width: 375px;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      margin-top: 60px;
      padding: 20px;
      height: 28em;
      overflow-y: scroll;
      scrollbar-width: none;
    }

    .order-item {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      border-bottom: 1px solid #ffc1c1;
      padding: 10px 0;
    }

    .order-item:last-child {
      border-bottom: none;
    }

    .order-item h4 {
      margin: 0;
      font-size: 1.1em;
      color: #ff5a82;
    }

    .order-item span {
      color: #333;
      font-size: 0.9em;
    }

    .order-details {
      margin-top: 10px;
      padding: 10px;
      background: #fff8f8;
      border: 1px solid #ffc1c1;
      border-radius: 8px;
      font-size: 0.9em;
    }

    .order-details p {
      margin: 5px 0;
    }

    .back-btn {
      margin-top: 18px;
      background-color: #ff5a82;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease;
    }

    .back-btn:hover {
      background-color: #FF1493;
    }

    @media (max-width: 375px) {
      .header h1 {
        font-size: 20px;
      }

      .order-container {
        width: 95%;
      }

      .back-btn {
        font-size: 14px;
        padding: 8px 16px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1>Pesanan Saya</h1>
    </div>

    <div class="order-container">
      <div class="order-item">
        <h4>Pesanan #001</h4>
        <span>Status: Diproses</span>
        <div class="order-details">
          <p><strong>Nama Pemesan:</strong> Susanti Fairy</p>
          <p><strong>Nomor Pesanan:</strong> #001</p>
          <p><strong>Tanggal Pemesanan:</strong> 10 Desember 2024</p>
          <p><strong>Status Pembayaran:</strong> <span class="status">Menunggu Pembayaran</span></p>
          <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
          <p><strong>Jumlah:</strong> Rp 2.500.000</p>
        </div>
      </div>
      <div class="order-item">
        <h4>Pesanan #002</h4>
        <span>Status: Dikirim</span>
        <div class="order-details">
          <p><strong>Nama Pemesan:</strong> Susanti Fairy</p>
          <p><strong>Nomor Pesanan:</strong> #002</p>
          <p><strong>Tanggal Pemesanan:</strong> 12 Desember 2024</p>
          <p><strong>Status Pembayaran:</strong> <span class="status">Berhasil</span></p>
          <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
          <p><strong>Jumlah:</strong> Rp 3.600.000</p>
        </div>
      </div>
      <div class="order-item">
        <h4>Pesanan #003</h4>
        <span>Status: Selesai</span>
        <div class="order-details">
          <p><strong>Nama Pemesan:</strong> Susanti Fairy</p>
          <p><strong>Nomor Pesanan:</strong> #003</p>
          <p><strong>Tanggal Pemesanan:</strong> 15 Desember 2024</p>
          <p><strong>Status Pembayaran:</strong> <span class="status">Berhasil</span></p>
          <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
          <p><strong>Jumlah:</strong> Rp 4.200.000</p>
        </div>
      </div>
    </div>
    <button class="back-btn" onclick="window.location.href='beranda.php'">Kembali ke Beranda</button>
  </div>
</body>

</html>