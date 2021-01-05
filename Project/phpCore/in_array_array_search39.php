<?php

$food = array("kishan","yadav","shiya","rajesh");
$love = array("kishan","yadav","shiya","rajesh");
$ass =array(array("yadav","kishan","shiya","rajesh"),array("php","asp"),"rajkot");
echo in_array("suman",$food);
echo "<br>";
echo in_array("kishan",$food);
echo "<br>";
if(in_array("kishan",$food,true)){
    echo "Done...";
}else{
    echo "Not Done....";
}
echo "<br>";
if(in_array("suman",$food,true)){
    echo "Done...";
}else{
    echo "Not Done....";
}
echo "<br>";
echo in_array(array("yadav","kishan","shiya","rajesh"),$ass);
echo "<br>";
if(in_array(array("yadav","kishan","shiya","rajesh"),$ass)){
    echo "done Find...";
}else{
    echo "Not Done....";
}
echo "<br>";
$arrayIndex = array("php","asp","login");
echo array_search("php",$arrayIndex);


?>
