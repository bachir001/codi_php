<?php



class mycalc{

private $first_num;
private $second_num;

public function __construct($first_num,$second_num)
    {
        $this->first_num = $first_num;
        $this->second_num = $second_num;

    }


    public function add()
    {
        $sum=$this->first_num+$this->second_num;
        return "result is : ".$sum." ";
        
    }

    public function multiply()
    {
        $multp=$this->first_num*$this->second_num ;
        return "result is : ".$multp." ";
    }



}




$MyCalculator = new mycalc( 12, 6 );
echo $MyCalculator->multiply(); // 72
echo "<br>";
echo $MyCalculator->add(); // 18



?>