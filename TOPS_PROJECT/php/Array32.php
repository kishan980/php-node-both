<?php

$array = array("red","blue","green","yellow","yes");


echo $array[1] . "<br>";
echo $array[2] . "<br>";
echo $array[3] . "<br>";
echo $array[0] . "<br>";
echo $array[4] . "<br>";


for($i =0;$i<=4; $i++)
{
	echo $array[$i];
}
echo "<br>";

echo $array[0]="red";
echo $array[1]="red1";
echo $array[2]="red2";
echo $array[3]="red3";
echo $array[4]="red4";
echo $array[5]="red5";

echo "<br>";
print_r($array);


?>