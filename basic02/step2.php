<?php

function greaterFn($num){
    if($num<10)
    echo $num." less than 10"; 
    if($num>10 && $num <=20)
    echo $num." greater than 10";
    if($num>20 && $num<=30)
    echo $num." greater than 20";
    if($num>30 && $num<=40)
    echo $num." greater than 30";
    else $num." greater than 40"; 


    
  }


  greaterFn(2);



?>