<?php
include "config.php";
if(empty($_FILES["new-image"]["name"])){
	$new_name = $_POST["old-image"];
}else{	
		$error      = array();
		$file_name  = $_FILES["new-image"]["name"];
		$file_size  = $_FILES["new-image"]["size"];  
		$file_tmp   = $_FILES["new-image"]["tmp_name"];
		$file_type  = $_FILES["new-image"]["type"];
		$file_ext   = end(explode('.',$file_name));
		$extension  = array("jpeg","jpg","png","gif");
		if(in_array($file_ext,$extension) === false){
			$error[] ="this extension file not allowed, please choose a jpg or png File.";
			}
		if($file_size >2097152){
			$error[] ="File size must be 2mb or lower"; 
		}
		$new_name =time(). "-".basename($file_name);
		$target = "upload/".$new_name;
		$image_name = $new_name;
		if(empty($error)){
			move_uploaded_file($file_tmp,$target);
		}else{
			print_r($error);
			die();
		}
	}
	
		$updateQuery ="update post set title='".$_POST["post_title"]."',
					  description='".$_POST["postdesc"]."',
					  category=".$_POST["category"].",
					  post_img='".$image_name."' where post_id='".$_POST["post_id"]."';";

				if($_POST["old-category"] != $_POST["category"]){
					$updateQuery.= "update category set post = post-1 where category_id='".$_POST['old-category']."';";
					$updateQuery.= "update category set post = post+1 where category_id='".$_POST['category']."';";
				}
					$result = mysqli_multi_query($conn,$updateQuery);

					if($result){
						header("location: $adminUrl/admin/post.php");
					}else{
						echo "Query Failed";
					}

?>