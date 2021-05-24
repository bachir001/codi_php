<?php


function armstrongCheck($number){


    $sum = 0; 

    $length=strlen($number);

    // echo $length;

    $x = $number; 

    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem**$length; 
        $x = $x / 10; 
    } 
     
    // if true then armstrong number
    if ($number == $sum){
        echo "is armstrong " ;
    }else{
    // not an armstrong number   
        echo "not armstrong " ;
    }
}





armstrongCheck(153);

echo "<br>";

armstrongCheck(13);

?>