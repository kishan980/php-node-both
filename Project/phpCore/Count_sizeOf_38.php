<?php

$food = array("orange","banana","apple","grapes","orange");


$foodAssoc =array(
    "kishan"=>array("orange","banana","apple","grapes","orange"),
    "yadav"=>array("orange","banana","apple","grapes","orange")
);
echo count($food);
echo "<br>";
echo sizeOf($food);
echo "<br>";
echo "<pre";
print_r(array_count_values($food));
echo "<br>";
echo $data = count($foodAssoc["kishan"]);
echo "<br>";
print_r($data);
echo "<br>";
echo count($foodAssoc);
echo "<br>";
echo sizeOf($foodAssoc);