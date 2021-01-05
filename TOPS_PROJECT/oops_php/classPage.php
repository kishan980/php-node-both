<?php

class classPage
{
	// public  $name,$email;
	function sum($a,$b)
	{
		return $c = $a +$b;
	}

	function sub($a,$b)
	{
		return $c = $a - $b;
	}
}

 $obj = new classPage();
 echo $obj->sum(10,10);
 echo "<br>";
 echo $obj->sub(10,10);
?>