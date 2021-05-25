<?php


function reverse ($str){
$i = 0;
while( $d = $str[$i] )
{
    if( $d == " "){

        $out = " ".$temp.$out;
        $temp = "";
    }else{
        $temp.=$d;
    }
    $i++;
}

echo $temp.$out;


}

reverse("My Name is Fred");


?>