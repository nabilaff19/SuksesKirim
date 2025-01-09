<?php
// Display the HTML page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses Kirim</title>
    <link rel="stylesheet" href="desainthumb.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="store-banner"></div>
        </div>
        <div class="icon">
            <img src="logo.jpg" alt="WhatsApp Icon">
        </div>
        <div class="stars">
            <span><?php echo "&#9733; &#9733; &#9733; &#9733; &#9733;"; ?></span>
        </div>
        <div class="message">
            <p><?php echo "SELAMAT DATANG!"; ?></p>
        </div>
        <button class="login-btn" onclick="window.location.href='login.php'">
            <?php echo "LOGIN NOW"; ?>
        </button>
    </div>
</body>

</html>