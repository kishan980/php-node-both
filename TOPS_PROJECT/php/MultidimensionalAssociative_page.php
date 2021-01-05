<?php
	
	$emp = array(

			"class"=>array(1,"kishan","manager",50000),
			"bcom"=>array(2,"Riki","Assi-manager",50000),
			"mca"=>array(3,"riya","manager",50000),
			"bca"=>array(4,"shiya","manager",50000)
	);
	foreach($emp as $key=>$data)
	{
		echo $key;
		foreach($data as $row)
		{
			echo $row;
		}
		echo "<br>";
	}

?>