<?php


function IsPrime($n)
{

 for($i=2;$i<$n;$i++)
   {
      if($n%$i==0)
	      {
		   return 0;
		  }
    }
  return 1;

 
}



if(IsPrime(55)===0){
    echo "is  not prime ";
}else{
    echo "is prime ";
}

