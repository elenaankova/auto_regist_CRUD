<?php


require 'connect.php';

// 2. написать запрос
$sql = 'DELETE FROM post WHERE id =:id';

// 3. выполнить его
$statement = $pdo -> prepare($sql);
$statement -> execute($_GET);


// 4. перейти на стр просмотра статей
header('Location: ./index.php');

