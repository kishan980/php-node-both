<?php
function  hello()
{
    echo "yes karata hu mai"."<br>";
}
hello();
hello();
hello();
hello();
hello();
hello();

function sum($number,$number2)
{
   echo $number+$number2;
}
 sum(10,10);

function data($name){
    echo $name;
}

data("kishan");
echo "<br>";
function dataAsn($name,$lastName){
    echo $name,$lastName;
}
dataAsn("kishan","yadav");