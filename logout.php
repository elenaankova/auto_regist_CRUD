<?php
session_start();

unset($_SESSION['user']); //удаляем переменную user чтобы никто чужой ее не использовал
header('Location: ../index.php');// переадрессация на страницу ...
?>
