<?php
$a = 6;
$b = 9;

if (( $a > 0 ) AND ($b > 0)) {
  echo $a - $b;
} 
else if (( $a < 0 ) AND ($b < 0)) {
	echo $a * $b;
} else if (( $a > 0 ) AND ($b < 0)) {
	echo $a + $b;
}

?>