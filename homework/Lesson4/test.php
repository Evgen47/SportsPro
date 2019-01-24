<?php $id = $_GET['id']; ?>

<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Просмотр изображения № <?php echo $id; ?></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<h2>Галерея</h2>
<?php 
	for ($i=1; $i <= 5; $i++) { 
		echo '<a href="img/' . $i . '.jpg" target="_blank"><img src=\"img/$id.jpg\" alt=\"Pic\" width=\"100\">Картинка №' . $i . '</a><br>';		
	}
	if ($id > 0 && $id <= 5) {
		echo "<img src=\"img/$id.jpg\" alt=\"Pic\" width=\"400\">";
	}
?>