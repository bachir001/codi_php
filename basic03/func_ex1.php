<?php

$personal_details = array("name" => "Rajesh Rao", "occupation" => "Engineer", age => 39, "country" => "India");

function arrayvalue($arrayval)
{

    foreach ($arrayval as $key => $value) {
        echo "$key=$value";
        echo "<br>";

    }

}

echo arrayvalue($personal_details);

?>