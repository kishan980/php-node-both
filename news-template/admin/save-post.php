<?php
	session_start();
	include "config.php";

if(isset($_FILES["fileToUpload"])){

		$error      = array();
		$file_name  = $_FILES["fileToUpload"]["name"];
		$file_size  = $_FILES["fileToUpload"]["size"];  
		$file_tmp   = $_FILES["fileToUpload"]["tmp_name"];
		$file_type  = $_FILES["fileToUpload"]["type"];
		$file_ext   = end(explode('.',$file_name));
		$extension  = array("jpeg","jpg","png","gif");
		if(in_array($file_ext,$extension) === false){
			$error[] ="this extension file not allowed, please choose a jpg or png File.";
			}
		if($file_size >2097152){
			$error[] ="File size must be 2mb or lower"; 
		}
		$new_name =time()."".basename($file_name);
		$target = "upload/".$new_name;
		if(empty($error)){
			move_uploaded_file($file_tmp,$target);
		}else{
			print_r($error);
			die();
		}
	}

		$post_title = mysqli_real_escape_string($conn,$_POST["post_title"]);	
		$postdesc   = mysqli_real_escape_string($conn,$_POST["postdesc"]);
		$category   = mysqli_real_escape_string($conn,$_POST["category"]);
		$data 		= date("d,M,Y");
		$author 	= $_SESSION["user_id"];

		$insertPost = "insert into post(title,description,category,post_date,author,post_img)
			values('$post_title','$postdesc','$category','$data',$author,'$new_name');";

		$insertPost.="update category set post = post + 1 where category_id='$category'";
		if(mysqli_multi_query($conn,$insertPost)){
			header("location: $adminUrl/admin/post.php");
		}else{
			echo "<div class='alert alert-danger'>Query Failed</div>";
		}
?>