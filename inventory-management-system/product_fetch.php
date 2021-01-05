<?php
include('database-connection.php');


$query ="";
$output =array();

$query .="
 SELECT * FROM tbl_product as tp
INNER JOIN tbl_brand as tb ON tb.brand_id = tp.brand_id
INNER JOIN tbl_category as tc ON tc.category_id = tp.category_id 
INNER JOIN tbl_users as tu ON tu.user_id = tp.product_enter_by 
";


if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE tb.brand_name LIKE "%'.$_POST["search"]["value"].'%" ';
 
 $query .= 'OR tc.category_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR tp.product_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR tp.product_quantity LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR tu.user_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR tp.product_id LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY product_id DESC ';
}

if($_POST['length'] != -1)
{
	$query .= 'limit ' .$_POST['start'] .','.$_POST['length'];
}


$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$filtered_rows = $statement->rowCount();

$data =array();

foreach($result as $row)
{

	$status ='';
	if($row["product_status"] =="active")
	{
		$status ='<span class="label label-success">Active</span>';
	}
	else
	{
		$status ='<span class="label label-danger">Deactive</span>';
	}

	$subArray =array();
	$subArray[] =$row["product_id"];
	$subArray[] =$row["category_name"];
	$subArray[] =$row["brand_name"];
	$subArray[] =$row["product_name"];
	$subArray[] =$row["product_quantity"].' - '.$row['product_unit'];
	$subArray[] =$row["user_name"];
	$subArray[] =$status;
	 $subArray[] = '<button type="button" name="view" id="'.$row["product_id"].'" class="btn btn-info btn-xs view">View</button>';
	 $subArray[] = '<button type="button" name="update" id="'.$row["product_id"].'" class="btn btn-warning btn-xs update">Update</button>';
 	$subArray[] = '<button type="button" name="delete" id="'.$row["product_id"].'							" class="btn btn-danger btn-xs delete" data-status="'.$row["product_status"].'">Delete</button>';
 	$data[] = $subArray;

}

function get_total_all_records($connect)
{
	$queryPro = "select * from tbl_product";
	$statement =$connect->prepare($queryPro);
	$statement->execute();
	return $statement->rowCount();
}

$output =array(

	"draw" => intval($_POST["draw"]),
	"recordsTotal" =>$filtered_rows,
	"recordsFiltered" =>get_total_all_records($connect),
	"data"=>$data
);

echo json_encode($output);






?>