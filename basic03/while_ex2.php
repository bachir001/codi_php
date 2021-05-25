<?php

function factorial($number)
{
    $i = 1;

    while ($number > 1) {
        $i *= $number;
        $number--;
    }
    return $i;

}

echo factorial(4);
?>