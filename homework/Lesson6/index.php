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
			include 'showimage.php';
			?>
		</div>
	</div>
	<div class="form">
		<form enctype="multipart/form-data" action="showidpic.php" method="GET">
			<p><b>Открыть фото с id:</b></p>
			<input type="number" name="id" value="1" style="width: 40px;"><br>
			<p><input type="submit" name="Показать">			
		</form>
		<form name="comment" action="comment.php" method="post">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="20" rows="5"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="150" />
    <input type="submit" value="Отправить" />
  </p>
</form>
	</div>

<?php
  // include 'sqlconnect.php';// Подключается к базе данных
  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "host1729498_gal", "123123", "host1729498_lesson5");
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = mysqli_fetch_assoc($result_set)) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>

</body>
</html>