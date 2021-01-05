<?php
function fill_category_list($connect)
{
	$query ="select * from tbl_category where category_status ='active' order by category_name ASC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$reuslt = $statement->fetchAll();
	$output ='';
	foreach($reuslt as $row)
	{
		$output .='<option value="'.$row["category_id"].'">'.$row["category_name"].'</option>';
	}
	return $output;
}

function fill_brand_list($connect,$category_id)
{

	$queryBrand ="select * from tbl_brand where 
				brand_status ='active' and 
				category_id='".$category_id." 
				ORDER BY brand_name ASC'";
	$statement = $connect->prepare($queryBrand);
	$statement->execute();
	$reuslt = $statement->fetchAll();
	$output ='<option value="">Select Brand</option>';
	foreach($reuslt as $row)
	{
		$output .='<option value="'.$row["brand_id"].'">'.$row["brand_name"].'</option>';
	}
	return $output;
}

function get_user_name($connect,$user_id)
{
	$query ="select * from tbl_users where user_id ='".$user_id."' ";
	$statement = $connect->prepare($query);
	$statement->execute();
	$reult = $statement->fetchAll();
	foreach($reult as $row)
	{
		return $row['user_name'];
	}
}
function fill_product_list($connect)
{
	 $query = "
	 SELECT * FROM product 
	 WHERE product_status = 'active' 
	 ORDER BY product_name ASC
	 ";
	 $statement = $connect->prepare($query);
	 $statement->execute();
	 $result = $statement->fetchAll();
	 $output = '';
	 foreach($result as $row)
	 {
	  $output .= '<option value="'.$row["product_id"].'">'.$row["product_name"].'</option>';
	 }
	 return $output;
}

function fetch_product_details($product_id, $connect)
{
	 $query = "
	 SELECT * FROM product 
	 WHERE product_id = '".$product_id."'";
	 $statement = $connect->prepare($query);
	 $statement->execute();
	 $result = $statement->fetchAll();
	 foreach($result as $row)
	 {
	  $output['product_name'] = $row["product_name"];
	  $output['quantity'] = $row["product_quantity"];
	  $output['price'] = $row['product_base_price'];
	  $output['tax'] = $row['product_tax'];
	 }
	 return $output;
}


?>