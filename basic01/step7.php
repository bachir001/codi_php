<?php

function check($current_year,$birth_year){

if($current_year-$birth_year>18) {echo "you can drive";}
else{
echo "you can't";
}
}

check(2020,1970);

?>