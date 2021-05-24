<?php

function swap($num0,$num1){

    echo"firsr number : ".$num0;
    echo"<br>";
    echo"second number : ".$num1;
    echo"<br> <br>";

    $temp=$num0;
     
    $num0=$num1;

    $num1=$temp;
    

    echo"firsr number : ".$num0;
    echo"<br>";
    echo"second number : ".$num1;
}


swap(24,45);

?>