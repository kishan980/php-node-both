<?php
$fruit = array("orange","banana","apple","grapes");
$veggies =array('a'=>"carrot",'b'=>"pea");
$color =array("red","green","blue");

$newArray =array_replace($fruit,$veggies,$color);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";
