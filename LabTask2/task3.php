<?php
  
 $a=1;
 $b=20;
 $c=35;
 $d=40;
 function odd_even($value)
 {
	 if($value%2==0)
	 {
		 echo $value." is an even number "."<br>";
	 }
	 else
		 echo $value." is an odd number "."<br>";
 }
 odd_even($a);
 odd_even($b);
 odd_even($c);
 odd_even($d);
?>