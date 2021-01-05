<?php
$studentId = $_POST['id'];

$str = implode($studentId,",");

$conn = mysqli_connect("localhost","root","","test") or die("Error Die Connect");
$sql ="delete from student where id IN ($str)";
$result = mysqli_query($conn,$sql) or die("Error Query");
if($result){
    echo 1;
}else{
    echo 0;
}
