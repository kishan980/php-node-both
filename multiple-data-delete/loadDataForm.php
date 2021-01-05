<?php
$conn = mysqli_connect("localhost","root","","test") or die("Error Die Connect");
$sql ="select * from student";
$result = mysqli_query($conn,$sql) or die("Error Query");

$output ="";
if(mysqli_num_rows($result)>0){

    $output .="<table border='0' width='100%' cellpadding='10px' cellspacing='2'>
              <tr>
                <th width='30px'> Delete</th>
                <th width='60px'>Id</th>
                <th>Name</th>
                <th width='90px'>lastName</th>
              
              </tr>";
    while($row = mysqli_fetch_assoc($result)){
        $output .="
                <tr>
                <td align='center'><input type='checkbox' value=".$row['id']."></td>
                <td align='center'>".$row['id']."</td>
                <td align='center'>".$row['first_name']."</td>
                <td align='center'>".$row['last_name']."</td>
                </tr>
            ";
    }
    $output .="</table>";
    echo $output;
}else{
    echo "<h2>Error Not Found data</h2>";
}
?>