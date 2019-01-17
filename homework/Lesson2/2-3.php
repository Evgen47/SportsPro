<?php

function math_operation($a, $b, $znak)
{
	switch ($znak) {
		case '+':
			return $a + $b;			
		case '-':
			return $a - $b;
		case '*':
			return $a * $b;
		case '/':
			return $a / $b;
			break;		
	}

}

$result = math_operation(5, 9, '-');
echo $result;
echo "<br>";
$result = math_operation(5, 9, '+');
echo $result;
echo "<br>";
$result = math_operation(5, 9, '*');
echo $result;
echo "<br>";
$result = math_operation(5, 9, '/');
echo $result;

?>