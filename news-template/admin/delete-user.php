<?php
	
include 'config.php';
include "session-manage.php";

$userId =$_GET["delete"];
$delete = "delete from user where user_id='$userId'";

if(mysqli_query($conn,$delete)){
	header("location: $adminUrl/admin/users.php");
}else{
	echo "<p style='color:red;margin:10px 0'>Can't Delete the User Records</p>";
}

?>