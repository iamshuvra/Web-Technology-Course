<?php
  echo "Star Pattern : ";
  echo "<br>";
  
 for($i=0;$i<3;$i++)
 {
	 for($j=0;$j<=$i;$j++)
	 {
		 echo"*";
	 }
	 echo "<br>";
 }

  echo "Number Pattern : ";
  echo "<br>";

 
 
 for($i=3;$i>0;$i--)
 {
	 for($j=1;$j<=$i;$j++)
	 {
		 echo $j;
	 }
	 echo "<br>";
 }
 
 echo "Alphabet Pattern : ";
 echo "<br>";
 
 $n=0;
 for($i=0;$i<3;$i++)
 {
	 for($j=0;$j<=$i;$j++)
	 {
		 
		 echo (chr(65+$n));
		 $n=$n+1;
	 }
	 echo "<br>";
 }
?>