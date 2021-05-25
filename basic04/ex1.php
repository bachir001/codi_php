<?php

class display
{

    private $word_display;

    public function __construct($word_display)
    {

        $this->word_display = $word_display;

    }

    public function Toprinting()
    {
        echo " " . $this->word_display . " ";

    }

}

$msg = new display('hello oop in php');

// var_dump($msg);

echo $msg->Toprinting();

?>