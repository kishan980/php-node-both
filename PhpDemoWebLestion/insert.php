<?php
	$conn = mysqli_connect("localhost","root","","study");
	// if(isset($_POST["btn_tweet"])){
	// 	$tweet = $_POST["tweet"];
		$sql = "insert into tbl_add(tweet_name)values('".$_POST["tweet"]."')";
		mysqli_query($conn,$sql);
	// }
?>