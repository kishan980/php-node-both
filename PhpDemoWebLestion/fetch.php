<?php
	$conn = mysqli_connect("localhost","root","","study");
		$sql = "select * from tbl_add order by tweet_id desc";
		$rsu = mysqli_query($conn,$sql);
	if(mysqli_num_rows($rsu)>0){
			while($row = mysqli_fetch_array($rsu)){
				echo '<p>'.$row["tweet_name"].'</p>';
			}
	}
?>