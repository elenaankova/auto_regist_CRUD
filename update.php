<?php

// 1. подключение к бд
require 'connect.php';

// 2. написать запрос
$sql = 'UPDATE `post` SET title =:title, content =:content WHERE id =:id';

// 3. выполнить его
$statement = $pdo -> prepare($sql);
$statement -> execute($_POST);


// 4. перейти на стр просмотра статей
header('Location: ./index.php');

