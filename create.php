<?php

// 1. подключение к бд
require 'connect.php';

// 2. написать запрос
$sql2 = 'INSERT INTO `post` (`title`, `content`) VALUES (:title, :content)';

// 3. выполнить его
$statement = $pdo -> prepare($sql2);
$statement -> execute($_POST);


// 4. перейти на стр просмотра статей
header('Location: ./index.php');

