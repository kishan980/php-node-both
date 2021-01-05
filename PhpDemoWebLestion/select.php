<?php

$con = mysqli_connect("localhost","root","","study");

$ouput ='';

$sql = "select * from tbl_add_new order by id desc";
$result = mysqli_query($con,$sql);
$ouput .='
			<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
				<th width="10%">ID</th>
				<th width="40%">Name</th>
				<th width="40%">Last</th>
				<th width="10%">Delete</th>
				</tr>';
		
if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_array($result)){

			  $ouput .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["first_name"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["last_name"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           '; 
			}
			  $ouput .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      '; 
}else{
	$ouput .= '
			<tr>
				<td colspan="4">Data Not Found</td>
			</tr>';
}

$ouput .='</table></div>';
echo $ouput;
?>