<?php
	$conn = mysqli_connect("localhost","root","","study");

	if(isset($_POST["username"])){
				$sql = "select * from tbl_add where tweet_name ='".$_POST["username"]."'";
		$rsu = mysqli_query($conn,$sql);
		if(mysqli_num_rows($rsu)>0){
			echo '<span class="text-succcess">user Name Available<span>';
			
		}else{
			echo '<spna class="text-danger">User Not  Available<span>';
		}

	}

?>