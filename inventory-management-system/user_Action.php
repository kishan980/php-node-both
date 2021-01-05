<?php
include('database-connection.php');

if(isset($_POST['btn_action']))
{
if($_POST["btn_action"] =="Add"){
  $query = "
  INSERT INTO tbl_users (user_email, user_password, user_name, user_type, user_status) 
  VALUES (:user_email, :user_password, :user_name, :user_type, :user_status)
  "; 
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':user_email'  => $_POST["user_email"],
    ':user_password' => password_hash($_POST["user_password"], PASSWORD_DEFAULT),
    ':user_name'  => $_POST["user_name"],
    ':user_type'  => 'user',
    ':user_status'  => 'active'
   )
  );
  $result = $statement->fetchAll();
  if(isset($result))
  {
   echo 'New User Added';
  }
}
 
if($_POST["btn_action"] =="fetch_single"){

	$selectEdit ="select * from tbl_users where user_id=:user_id";
	$statement =$connect->prepare($selectEdit);
	$statement->execute(
			array(':user_id'=> $_POST["user_id"]
		)
	);		
	$result = $statement->fetchAll();
	foreach($result as $row){
		$output['user_name'] = $row["user_name"];
		$output['user_email'] = $row["user_email"];
	}
	echo json_encode($output);
}
	
	if($_POST["btn_action"] =='Edit'){

		if($_POST["user_password"] !=''){

			$query ="update tbl_users set 
					user_name='".$_POST['user_name']."',
					user_email ='".$_POST['user_email']."',
					user_password ='".password_hash($_POST['user_password'],PASSWORD_DEFAULT)."'
					where user_id='".$_POST["user_id"]."' ";
		}
		else
		{
				$query ="update tbl_users set user_name='".$_POST['user_name']."',
					user_email ='".$_POST['user_email']."'
					where user_id='".$_POST["user_id"]."' ";
		}
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		if(isset($result)){
			echo "User Update ......";
		}
	}

	if($_POST["btn_action"] =='delete'){
			$status = 'Active';
			if($_POST["status"] == "Active"){
				$status ="Inactive";
			}
				$query ="update tbl_users set  
				user_status = :user_status where 					
				user_id = :user_id";
				$statement = $connect->prepare($query);
				$statement->execute(array(
								':user_status'=>$status,
								':user_id'=>$_POST['user_id']
							));	
				$result = $statement->fetchAll();
				if(isset($result)){
					echo 'User Status change To ' .$status;
				}
	}


 }	
?>  