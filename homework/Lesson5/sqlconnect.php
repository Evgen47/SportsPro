<?php
$sqlserver = "localhost";
$sqluser = "host1729498_gal";
$sqlpass = "123123";
$sqlbase = "host1729498_lesson5";

$connection = mysqli_connect($sqlserver, $sqluser, $sqlpass, $sqlbase);

if (!connection) {
	echo "Ошибка: Невозможно установить соединение с MySQL<br>";
	echo "<br>Код ошибки errno: " . mysqli_connect_errno;
	echo "<br>Текст ошибки error:" . mysqli_connect_error;
	exit;
}

?>