<?php
	
	$age =20;
	if($age >=18 && $age <=21)
	{
		echo "yes you are oting";
	}
	else
	{
		echo "No";
	}

	echo "<br>";

	$number  =20;

	if($number >=18 || $number <=20)
	{
		echo "yes";
	}
	else
	{
		echo "no...";
	}
	echo "<br>";
	$age =25;
	if(!($age>=18))
	{
		echo "18 Up";
	}
	echo "<br>";
	$age =25;
	if(!($age<=18))
	{
		echo "18 Up";
	}
?>