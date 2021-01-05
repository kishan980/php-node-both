<?php
include('database-connection.php');
if(isset($_POST["btn_action"])){

	if($_POST["btn_action"]=="Add"){
		$query ="insert into tbl_category(category_name)values(:category_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				'category_name'=>$_POST["category_name"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo "Category Name Added....";
		}
		
	}

	if($_POST["btn_action"] == "fetch_single"){
		$query ="SELECT * FROM tbl_category where category_id= :category_id";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				'category_id'=>$_POST['category_id']
				)
		);
		$result = $statement->fetchAll();
		foreach($result as $row) { 
			$output['category_name']=$row['category_name'];
		}
		echo json_encode($output);

	}

	if($_POST["btn_action"]=="Edit")
	{
		$query ="update tbl_category set category_name =:category_name where category_id=:category_id";
		$statement = $connect->prepare($query);
		$statement->execute(
				array(
					'category_name'=>$_POST['category_name'],
					'category_id'=>$_POST['category_id']
				)
			);
		$result = $statement->fetchAll();
		if(isset($result)){
			echo 'Update Category SuccessFully.....';
		}
	}

	if($_POST['btn_action']=="delete"){

		$status ='active';
		if($_POST['status'] == 'Active'){
			$status ='Deactive';
		}
		$query ='update tbl_category set category_status=:category_status where category_id=:category_id';
		$statement = $connect->prepare($query);

		$statement->execute(

			array(
				'category_status'=>$status,
				'category_id'=>$_POST['category_id']
			)
		);
		$result = $statement->fetchAll();
		if(isset($result)){
			echo 'category Status Change  ' .$status;
		}
	}


}
?>