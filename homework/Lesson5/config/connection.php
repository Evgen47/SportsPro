<?php
$host = 'localhost'; // адрес сервера 
$database = 'host1729498_sportpro'; // имя базы данных
$user = 'host1729498_admin'; // имя пользователя
$pass = '7717417'; // пароль пользователя

try {
    $dbh = new PDO("mysql:host=$host;dbname=host1729498_sportpro", $user, $pass);
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

?>