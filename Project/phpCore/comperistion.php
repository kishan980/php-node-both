<?php
$row =100;
$row2 =100;
echo $row == $row2;
echo "<br>";

$a = 100;
$b = 100;
echo $a===$b;
echo "<br>";
$data1 =10;
$data2="22";
echo $data1===$data2;


$c = 10;
$d = 10;
echo $c!= $d;
echo "<br>";
$data =10;
$num1 =11;
echo $data!=$num1;
echo "<br>";

$reu = 100;
$reu1 = 200;
echo $reu >$reu1;
echo "<br>";

$dum =10;
$um  =10;
echo $dum >=$um;

echo "<br>";
$number =10;
$number1 =20;

if($number>$number1){
    echo "small";
}else{
    echo "large";
}

echo "<br>";
$old = 100;
$old2 =300;
if($old< $old2){
    echo "big";
}else{
    echo "Small";
}
echo "<br>";

$largedata =200;
$smallData =300;

if($largedata == $smallData){
    echo "same";
}else{
    echo "not same";
}

echo "<br>";
$notData =100;
$yesData =200;
if($notData != $yesData){
    echo "Not Same";
}else{
    echo "Same";
}
echo "<br>";

$dataType =300;
$dataTypeNot ="300";
if($dataType === $dataTypeNot){
    echo "data type note same";
}else{
    echo "Data Same";
}
echo "<br>";

if($dataType !== $dataTypeNot){
     echo "data type note same";
}else{
    echo "same";
}