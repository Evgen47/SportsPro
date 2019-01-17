<?php

function mathOperation ($arg1, $arg2, $operation)
{
		switch ($operation) {
		case 'Сложить':
			return $arg1 + $arg2;
			break;			
		case 'Вычесть':
			return $arg1 - $arg2;
			break;
		case 'Умножить':
			return $arg1 * $arg2;
			break;
		case 'Разделить':
			return $arg1 / $arg2;
			break;		
	}
}

$result = mathOperation(5, 9, 'Вычесть');
echo $result;
echo "<br>";

?>