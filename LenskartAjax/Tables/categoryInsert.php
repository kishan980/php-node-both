<?php 

$conn = new mysqli("localhost","root","","test");

$name  = $_POST['categoryName'];

$sql   = "INSERT INTO tbl_category (categoryName) VALUES ('$name')";

$conn->query($sql);

echo json_encode("Ok");

?>