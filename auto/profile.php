
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="vendor/signin.php" method="post">
        <img src="<?= $_SESSION['user']['avatar']?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
        <a href="../index.php" class="logout">выход</a>
    </form>

</body>
</html>


