<?php

$k = "*";
for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $k . " ";
        $k++;
    }
    echo "<br>";
}

?>