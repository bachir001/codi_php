<?php

class user_message
{

    private $message = " Hello All, I am ";

    public function printmess($name)
    {
        return $this->message . $name . " ";
    }

}

$msg = new user_message();

// var_dump($msg);

echo $msg->printmess("bachir");

?>