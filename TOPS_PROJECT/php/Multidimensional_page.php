<?php
	
	$emp =array(

			array(1,"kishan","manager",50000),
			array(2,"Riki","Assi-manager",50000),
			array(3,"riya","manager",50000),
			array(4,"shiya","manager",50000)
	);
	echo $emp[0][1];
	echo  "<br>";
	echo $emp[1][1];
	echo "<pre>";
	print_r($emp);

	for($row =0;$row<4;$row++)
	{
		for($col =0;$col<4; $col++)
		{
			echo $emp[$row][$col];

		}
			echo "<br>";
	}

	echo "<br>";
	
	foreach($emp as $value)
	{
		foreach($value as $row)
		{
			echo $row;
		}
		echo "<br>";
	}

?>