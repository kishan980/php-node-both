<?php
include "config.php";

$post_id = $_GET["delet"];
$cat_id = $_GET["cat"];

$deletImage = "select  * from post where post_id='$post_id'";
$result  = mysqli_query($conn,$deletImage) or die("query Eorror images");
$row = mysqli_fetch_assoc($result);
unlink("upload/".$row["post_img"]);

$sqlDelete = "delete from post where post_id ='$post_id';";
$sqlDelete.= "update category set post = post+1 where category_id='$cat_id'";

if(mysqli_multi_query($conn,$sqlDelete))
{
	header("location: $adminUrl/admin/post.php");
}else{
	echo "Query Eroor";
}

?>