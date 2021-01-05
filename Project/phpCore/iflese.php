<?php
$number = 0;
if($number >=80 && $number <=100){
        echo "excelent";
}
else if($number >=60 && $number <=80){
        echo "dist";
}
else if($number >=50 && $number <=60){
        echo "second";
}
else if($number >=45 && $number <=50){
        echo "first";
}
else if($number >=33 && $number <=45){
        echo "pass";
}
if($number <33){
    echo "fail";
}