<?php
$con = mysqli_connect("localhost","root","","study");

$number = count($_POST["name"]);
if($number>0){
	for($i=0;$i<$number;$i++){
		if(trim($_POST["name"][$i]!='')){
			   $sql = "INSERT INTO tbl_input_d(name) VALUES('".mysqli_real_escape_string($con, $_POST["name"][$i])."')";  
                mysqli_query($con, $sql);  
		}
		  echo "Data Inserted";
	}
}else{
	echo "Please Enter the name";
}

?>