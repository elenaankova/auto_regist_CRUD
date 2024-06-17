
<?php
session_start();
//if(isset($_SESSION['user'])){//если переменная юзер существует, нас перекинет на стр profile
//    header('Location: ../index.php');
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <p>Тут будет форма регистрации:</p>

    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="">

    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">

    <label>Email</label>
    <input type="email" name="email" placeholder="">

    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">

    <label>Подтверждение пароля</label>
    <input type="password"name="password_confirm" placeholder="">

    <label>Изображение пользователя</label>
    <input type="file" name="avatar">
     <button type="submit"> Войти </button>
    <p>
        У вас есть аккаунт? - <a href="index.php"> авторизироваться </a>
    </p>

    <p class="msg">
        <?php
        if (isset($_SESSION['message'])) {
            echo ' <p class="msg"> ' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);

//            if(isset($_SESSION['message'])){
//                echo $_SESSION['message'];
//            }
//
//            unset($_SESSION['message']);
        ?>
    </p>
</form>

</body>
</html>


