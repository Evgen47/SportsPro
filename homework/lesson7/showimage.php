<?php
include 'sqlconnect.php';

$sql = "SELECT id, name, path, seen, opened FROM $sqltable ORDER BY opened DESC";
$sqlnewseen = "UPDATE $sqltable SET seen = seen + 1 WHERE id=";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows ($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$sqlres = mysqli_query($connection, $sqlnewseen . $row["id"]);
		$thumb = $row["path"] . $row["name"];
		$fullimage = $row["path"] . 'img\\' . $row["name"];
		$seen = $row["seen"];
		$opened = $row["opened"];
		echo '<div class="imageinner">';
		echo '<div class="pic">';
		echo '<a href=showidpic.php?id=' . $row["id"] . '&db=' . $sqltable . ' target="_blank"><img src=' . $row["path"] . $row["name"] . ' alt="pic" style="width: 10%;"></a>';
		echo '</div>';
		echo '<div class="textlabel">';
		echo '<div class="seen">';
		echo '<i class="seen_icon">Просмотрено <span class="seen_count">' . $seen . '</span> раз</i></div>';
		echo '<div class="opened">';
		echo '<i class="opened_icon">Открыто <span class="opened_count">' . $opened . '</span> раз</i>';
		echo '</div></div></div>';
	}
} else {
	echo "Изображение в БД не найдено";
}

mysqli_close($connection);
?>