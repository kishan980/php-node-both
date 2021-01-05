<?php
$con = mysqli_connect("localhost","root","","study");

$id = $_POST["id"];
$text = $_POST["text"];
$column_name = $_POST["column_name"];

$sql ="update tbl_add_new set ".$column_name."='".$text."' where id='".$id."'";
 if(mysqli_query($con, $sql))  
 {  
      echo 'Data Updated';  
 }  
?>