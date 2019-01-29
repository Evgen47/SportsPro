<?php

require_once '../config/config.php';

$gallery = showGallery(4);

echo "<div>";
echo "<h2>" . $gallery['name'] .  "</h2>";
echo '<img src="' . $gallery['link'] . '"';
echo "<div>" . $gallery['size'] .  "</div>";
echo "</div>";


$s = file ($gallery['link']); 
echo "Количество кликов: $s[0]"; 

?>
