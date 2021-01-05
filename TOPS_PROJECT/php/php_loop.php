
<?php

$number = 0;
while($number <=10)
{
	echo "test";
	$number++;
	echo "<br>";
}
	echo "<br>";

$array = array("a","b","c");
foreach($array as $key=>$value)
{
	echo $value;
	echo "<br>";
}


for($i =0;$i< 10; $i++)
{
	//echo 5+5;
	for($j=0; $j<$i; $j++)
	{
		echo "$i";
	}
	echo "<br>";
}

echo "<br>";
$douwhile = 50;
do{
	echo "do while";
}while($douwhile <=10)

?>