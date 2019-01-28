<?php

require_once '../config/config.php';

$gallery = getGallery();

foreach ($gallery as $img) {
	echo "<div>";
	echo "<h2>" . $img['name'] .  "</h2>";
	echo "<img src=\"" . $img['link'] . "\" alt=\"Pic\" width=\"200\">";
	echo "<div>" . $img['size'] .  "</div>";
	echo "</div>";
}
