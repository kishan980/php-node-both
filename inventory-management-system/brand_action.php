<?php

	include('database-connection.php');


	if(isset($_POST["btn_action"]))
	{
		if($_POST["btn_action"] =="add")
		{
			$query ="
			insert into tbl_brand(category_id,brand_name)values(:category_id,:brand_name)";
			$statement = $connect->prepare($query);
			$statement->execute(

				array(

						':category_id'=>$_POST['category_id'],
						':brand_name'=>$_POST['brand_name']
					)
			);

			$result = $statement->fetchAll();
			
			if(isset($result))
			{
					echo "Brand Name Is Added......";
			}
		 }
	}

	if($_POST["btn_action"] =="fetch_single")
	{
		$query = "select * from tbl_brand  where  brand_id =:brand_id";
		$statement =$connect->prepare($query);
		$statement->execute(
				array(
						'brand_id'=>$_POST["brand_id"]
					)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output["category_id"] =$row["category_id"];
			$output["brand_name"] =$row["brand_name"];
		}
		echo json_encode($output);
	}

	if($_POST['btn_action'] =="Edit")
	{
		$query ="
			update tbl_brand set category_id=:category_id,brand_name=:brand_name where brand_id=:brand_id";
			$statement = $connect->prepare($query);
			$statement->execute(
					array(
							':category_id'=>$_POST['category_id'],
							':brand_name'=>$_POST['brand_name'],
							':brand_id'=>$_POST['brand_id']
					)
			);
			$result = $statement->fetchAll();
			if(isset($result))
			{
				echo "Brand Name Edited...";
			}


	}

		if($_POST['btn_action']=="delete"){

		$status ='active';
		if($_POST['status'] == 'active'){
			$status ='deactive';
		}
		$query ='update tbl_brand set brand_status=:brand_status where brand_id=:brand_id';
		$statement = $connect->prepare($query);

		$statement->execute(

			array(
				'brand_status'=>$status,
				'brand_id'=>$_POST['brand_id']
			)
		);
		$result = $statement->fetchAll();
		if(isset($result)){
			echo 'Brand Status Change  ' .$status;
		}
	}

?>