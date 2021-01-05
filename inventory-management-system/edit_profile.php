<?php
include('database-connection.php');
if(isset($_POST["user_name"])){
	if($_POST["user_new_password"] !=''){

	$queryPassword = "
	update tbl_users set user_name ='".$_POST["user_name"]."', user_email ='".$_POST["user_email"]."',user_password ='".password_hash($_POST["user_new_password"],PASSWORD_DEFAULT)."' 
		where user_id ='".$_SESSION["user_id"]."';
	
	";
	}else{
		$queryPassword = "update tbl_users set user_name='".$_POST["user_name"]."',
						  user_email = '".$_POST["user_email"]."'
						  where user_id ='".$_SESSION["user_id"]."' ";

	}
	$stastment = $connect->prepare($queryPassword);
	$stastment->execute();
	$result = $stastment->fetchAll();
	if(isset($result)){
		echo '<div class="alert alert-successProfile edited..."></div>';
	}
}

?>