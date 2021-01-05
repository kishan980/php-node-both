<?php

$food =array(
		'fruits'=>array("orange","banana","apple"),
		'veggies'=>array("carrot","collard","pea")
	);
echo count($food);
echo "<br>";
echo count($food,1);
echo "<br>";
echo count($food['fruits'],1);
echo "<br>";
echo sizeof($food);

$food1 =array("orange","banana","apple");

$len = count($food1);

for($i=0;$i < $len;$i++)
{
	echo $food1	[$i];
}

print_r(array_count_values($food1));
?>