<?php
 function odd_even($value)
 {
	 if($value%2!=0)
	 {
		 echo $value." is an odd number "."<br>";
	 }
}
  for($i=10;$i<=100;$i++)
  {
	  odd_even($i);
  }
?>