<?php


function Palindrome($string){ 
    
    if (strrev($string) == $string){ 
      echo "is palindrome";
    }
    else{
        echo "not palindrome";
    }
} 
 

Palindrome("DAD");

echo "<br>";

Palindrome("Hello");


?> 