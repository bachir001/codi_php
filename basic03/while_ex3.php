<?php



function  countword ($text, $TheWord) {

 if( is_string($text)==true & is_string($TheWord)){
    
    echo substr_count($text,$TheWord);
    
    }else{

    echo "isn't string";
    
    }

}           





countword("hello it's me , it's been a long day without you my freind ","hello");
echo"<br>";
countword("hello it's me , it's been a long day without you my freind ",3);


?>