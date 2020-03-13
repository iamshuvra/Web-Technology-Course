<?php
 $value1=15;
 $value2=100;
 $array= array(11,121,100,40,83,19,97,15,9,133,113);

  function search($value , $array)
  {
	  for($i=0;$i<count($array);$i++)
 {
	 if($value == $array[$i])
 {
	 echo $value." was found at : ".$i."<br>";
 }
 }
 } 
  search($value1,$array);
  search($value2,$array);
?>