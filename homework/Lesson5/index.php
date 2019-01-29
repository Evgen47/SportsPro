<!DOCTYPE html>
<html>
<head>
	<title>Галерея</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<h3>Наша галерея</h3>
		<div class="list">
			<?php
			$sqltable = 'gallery';
			include '../lesson5/showimage.php';
			?>
		</div>
	</div>
	<div class="form">
		<form enctype="multipart/form-data" action="../lesson5/showidpic.php" method="GET">
			<p><b>Открыть фото с id:</b></p>
			<input type="number" name="id" value="1" style="width: 40px;"><br>
			<p><input type="submit" name="Показать">			
		</form>
	</div>
</body>
</html>