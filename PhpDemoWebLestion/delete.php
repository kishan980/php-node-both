<?php
$con = mysqli_connect("localhost","root","","study");
$sql ="delete from tbl_add_new where  id='".$_POST["id"]."'";
 if(mysqli_query($con, $sql))  
 {  
      echo 'Data Deleted';  
 }  
?>