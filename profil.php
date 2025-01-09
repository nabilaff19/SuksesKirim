<?php
session_start();
if (!$_SESSION['login'] || $_SESSION['login'] == '') {
  header('location: login.php');
}
require 'functions.php';
$user = getDataUserById($_SESSION['login']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>User Profile</title>
  <style>
    *,
    html {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

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

    .header {
      text-align: center;
      background: linear-gradient(to right, #ff9a9e, #fecfef);
      color: white;
      padding: 30px 20px;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .header img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      border: 3px solid white;
      margin-right: 15px;
    }

    .header .user-info {
      display: flex;
      align-items: center;
      text-align: left;
      flex-direction: row;
    }

    .header h1 {
      margin: 0;
      font-size: 28px;
      letter-spacing: 1px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    .header p {
      font-size: 16px;
      margin: 0;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    .content {
      width: 90%;
      max-width: 375px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      margin: 40px 0;
      padding: 20px;
      display: grid;
      gap: 20px;
    }

    .profile-item {
      display: flex;
      align-items: center;
      padding: 15px;
      background: linear-gradient(to right, #ffdde1, #ee9ca7);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .profile-item:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .profile-item p {
      margin: 0;
      font-size: 18px;
      color: #444;
      font-weight: bold;
      flex: 1;
    }

    .profile-item p span {
      font-size: 14px;
      color: #666;
      display: block;
    }

    .footer {
      padding: 20px;
      background: linear-gradient(to right, #ff9a9e, #fecfef);
      color: white;
      text-align: center;
      font-size: 14px;
      letter-spacing: 0.5px;
      width: 100%;
      box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.2);
    }

    .back-button {
      background: #ff9a9e;
      color: white;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: background 0.3s, transform 0.3s;
      cursor: pointer;
      text-align: center;
      margin: 0 0 40px 0;
    }

    .back-button:hover {
      background: #ff7a7a;
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Header -->
    <div class="header">
      <div class="user-info">
        <img src="profile.jpg" alt="Profile">
        <div>
          <h1><?= $user['name']?></h1>
          <p><?= $user['email']?></p>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="content">
      <div class="profile-item">
        <p>Nama: <?= $user['name']?></p>
      </div>
      <div class="profile-item">
        <p>Email: <?= $user['email']?></p>
      </div>
      <div class="profile-item">
        <p>Role: <?= $user['role']?></p>
      </div>
      <div class="profile-item">
        <p>Pengaturan Akun<span>Ubah pengaturan pribadi Anda</span></p>
      </div>
    </div>

    <!-- Back to Homepage Button -->
    <a href="beranda.php" style="text-decoration: none;">
      <button class="back-button">Kembali ke Beranda</button>
    </a>

    <!-- Footer -->
    <div class="footer">
      &copy; 2024. All rights reserved.
    </div>
  </div>
</body>

</html>