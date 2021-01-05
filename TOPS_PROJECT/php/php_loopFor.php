<?php
   
	for($i=0;$i<=10;$i++)
	{
		echo $i;
		//echo "*";
		//
		for($k=0; $k < $i; $k++)
		{
			echo " a$i &nbsp";
		}
		echo "<br>";
		echo "<br>";
		echo "<br>";
		for($j=0; $j< $i; $j++)
		{
			echo "*";
		}
		
	}

?>