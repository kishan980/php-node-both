<?php
$con = mysqli_connect("localhost","root","","study");

$sql ="insert into tbl_add_new(first_name,last_name)values('".$_POST['first_name']."','".$_POST['last_name']."')";
$reult = mysqli_query($con,$sql);
if($reult>0){
	echo "Data Done";
}
?>