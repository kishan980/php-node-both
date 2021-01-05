<?php
$Age =21;
if($Age >=18 && $Age <=25){
    echo "condtion true";
}else{
    echo "Not true";
}

echo "<br>";

if($Age >=18 || $Age <=25){
    echo "condtion true";
}else{
    echo "Not true";
}

echo "<br>";

if(!($Age <=18)){
    echo "Yes";
}