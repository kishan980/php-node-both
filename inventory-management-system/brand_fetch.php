<?php

//brand_fetch.php

include('database-connection.php');

$query = '';
$output = array();
$query .= "
SELECT * FROM tbl_brand as tb
INNER JOIN tbl_category as tc ON tc.category_id = tb.category_id 
";

if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE tb.brand_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR tc.category_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR tb.brand_status LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY tb.brand_id DESC ';
}

if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$filtered_rows = $statement->rowCount();

foreach($result as $row)
{
 $status = '';
 if($row['brand_status'] == 'active')
 {
  $status = '<span class="label label-success">Active</span>';
 }
 else
 {
  $status = '<span class="label label-danger">Inactive</span>';
 }
 $subArray = array();
 $subArray[] = $row['brand_id'];
 $subArray[] = $row['category_name'];
 $subArray[] = $row['brand_name'];
 $subArray[] = $status;
 $subArray[] = '<button type="button" name="update" id="'.$row["brand_id"].'" class="btn btn-warning btn-xs update">Update</button>';
 $subArray[] = '<button type="button" name="delete" id="'.$row["brand_id"].'" class="btn btn-danger btn-xs delete" data-status="'.$row["brand_status"].'">Delete</button>';
 $data[] = $subArray;
}

function get_total_all_records($connect)
{
 $statement = $connect->prepare('SELECT * FROM tbl_brand');
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  => $filtered_rows,
 "recordsFiltered" => get_total_all_records($connect),
 "data"    => $data
);

echo json_encode($output);

?>