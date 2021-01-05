<?php

$array =array(

		"fristName"=>"kishan",
		"lastName"=>"yadav",
		"rollNumber"=>2020,
		"phone"=>78436468643,
		"college"=>"MCA",
		"100"=>"bca",
		"mca",
		"12"=>"mcon",
		"lata"
	);
	
	echo $array['fristName']."<br>";
	echo $array['lastName']."<br>";
	echo $array['rollNumber']."<br>";
	echo $array['phone']."<br>";
	echo $array['college']."<br>";
	echo $array['101']."<br>";
	echo $array['12']."<br>";
	echo $array['102']."<br>";

	echo "<pre>";
	print_r($array);
	echo "<br>";
	echo "<pre>";
	var_dump($array);
	
	

?>