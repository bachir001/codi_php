<?php

function CountDigit($number){

    
$x=$number;

$i=0;

$length=strlen($x);

$sum=0;


while($i<$length){

    $rem=$x%10;
    $sum=$sum+$rem;
    $x=$x/10;
    $i++;

}
echo $sum;




// echo $length;

// echo $sum;




}



CountDigit(14597);


?>