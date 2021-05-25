<?php

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        if (($i == 1) || ($i == 10) || ($i == $j)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>