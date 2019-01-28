<?php
$i = 0;
do {
    if ($i == 0) {
        echo "$i" . ' - это просто ноль <br>' ;
    } elseif ($i % 2 != 0) {
        echo "$i" . ' - нечетное число <br>';
    } else {
        echo "$i" . ' - четное число <br>';
    }
} while ($i++ < 10);

?>
