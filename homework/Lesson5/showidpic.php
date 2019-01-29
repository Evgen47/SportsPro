<?php
include 'sqlconnect.php';

$tpl = file_get_contents('showidpic.tpl');
$id = $_GET['id'];
$db = $_GET['db'];
if (!empty($id)) {
	$sql = "SELECT * FROM `gallery` WHERE `id` =$id";
	$result = mysqli_query($connection, $sql);
	
	$sqlnewopened = "UPDATE $db SET opened = opened + 1 WHERE id=";
	if (mysqli_num_rows ($result) > 0) {
		$sqlresult = mysqli_query($connection, $sqlnewopened . $id);
		$row = mysqli_fetch_assoc($result);
		$fullimage = $row["path"] . $row["name"];
		$contents = '<img src="/lesson5/' . $fullimage . '"alt="pic" style="width: 850px;">';
		$content = "<br>Просмотров фото: " . ($row["opened"]+1);
		$title = 'picture id=' . $id;
	} 
	else {
		echo "<h3>В базе $db нет изображения с id=" . $id . "!</h3>";
		echo '<br><a href="index.php">Вернуться на главную страницу</a>';
	}
mysqli_close($connection);
}

echo $contents;
echo $content;
?>