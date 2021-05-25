<?php

$transactions = array(

    $trans1 = array(
        "id" => 1,
        "debit" => 2,
        "credit" => 3,
    ),
    $trans2 = array(
        "id" => 2,
        "debit" => 15,
        "credit" => 10,
    ),
);

$i = 0;

while ($i <= 1) {

    foreach ($transactions[$i] as $key => $value) {

        if ($key == "debit") {

            $debit = $value;

        } elseif ($key == "credit") {

            $credit = $value;

        }

    }
    $operation = $debit - $credit;
    echo abs($operation);
    echo "<br>";
    $i++;

}

$users = array(
    array(
        "id" => 1,
        "name" => "Gaby",
        "email" => "gaby@codi.tech",
    ),
    array(
        "id" => 3,
        "name" => "Omar",
        "email" => "omar@codi.tech",
    ),
);

echo "<br>";

$j = 0;

while ($j <= 1) {

    foreach ($users[$j] as $key => $value) {

        echo "$key=$value";
        echo "<br>";
    }

    $j++;

    echo "<br>";
}
?>