<?php
	
	$emp = array(
				array(1,"kishan","yadav","manager","200000"),
				array(2,"ritu","yadav","manager","41000"),
				array(3,"yadav","yadab","manager",145236)

	);

	echo $emp[0][1];
	echo "<br>";
	echo $emp[1][1];
	echo "<br>";
	echo "<pre>";
	print_r($emp);
	var_dump($emp);	

	echo $emp[0][0] . " ";
	echo $emp[0][1] . " ";
	echo $emp[0][2] . " ";
	echo $emp[0][3] . " ";
	echo $emp[0][4] . " ";

	echo $emp[1][0] . " ";
	echo $emp[1][1] . " ";
	echo $emp[1][2] . " ";
	echo $emp[1][3] . " ";
	echo $emp[1][4] . " ";

?>