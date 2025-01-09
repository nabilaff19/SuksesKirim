<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Sandi</title>
    <style>
        body {
            font-family: 'Georgia', sans-serif;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            width: 100%;
            max-width: 375px;
            text-align: center;
            padding: 10px;
            border-left: 4px solid #f3c0c0;
            border-right: 4px solid #f3c0c0;
            background-color: #fcd6e9;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .header img {
            width: 90%;
            margin-top: 10px;
            border-radius: 50%;
            margin-bottom: 1rem;
            mix-blend-mode: multiply;
        }

        .input-group {
            position: relative;
            margin-bottom: 10px;
        }

        .input-group label img {
            position: absolute;
            top: 50%;
            left: 40px;
            transform: translateY(-50%);
            width: 20px;
            mix-blend-mode: multiply;
        }

        .input-group input {
            width: calc(80% - 40px);
            padding: 10px 15px 10px 40px;
            border: 2px solid #fff;
            border-radius: 20px;
            background-color: #ffc0cb;
            font-size: 16px;
        }

        .submit-btn {
            display: block;
            width: auto;
            padding: 8px 20px;
            background-color: #ff6f91;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            margin: 10px auto;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .submit-btn:hover {
            background-color: #e55b80;
        }

        .forgot-password-message {
            color: rgb(233, 23, 128);
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <img src="logo.jpg" alt="Lupa Sandi">
        </header>

        <form action="" method="post" class="forgot-password-form">
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
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="submit" class="submit-btn">Reset Sandi</button>
        </form>

        <div class="forgot-password-message">
            <p>Masukkan alamat email Anda, dan kami akan mengirimkan instruksi untuk mereset kata sandi.</p>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    require "functions.php";
    if (resetPassword($_POST)) {
        echo "<script>alert('Berhasil mengubah password, Anda akan diarahkan ke halaman login'); window.location.href = 'login.php'</script>";
    } else {
        echo "<script>alert('Gagal mengubah password, Mohon cek kembali email anda')</script>";
    }
}

?>