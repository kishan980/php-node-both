 <?php
                                    include '../config.php';
                                    $sql ="select * from tbl_category";
                                    $result = mysqli_query($connection,$sql) or die("error select time");
                                    $output ='';

                                    if(mysqli_num_rows($result)>0){

                                        $output .='

                                        <thead>
                                            <tr>
                                                <th>CategoryId</th>
                                                <th>CatgeoryName</th>
                                          
                                            </tr>
                                        </thead>';
                                        while($row = mysqli_fetch_assoc($result)){
                                            $output .="
                                            <tbody>
                                               <tr>
                                                <td>".$row['categoryId']."</td>
                                                <td>".$row['categoryName']."</td>
                                               
                                            </tr>
                                            </tbody>";
                                        }
                                   
                                        // $output .=" </table>";
                                        echo $output;
                                      
                                     }else{
                                             echo "<h2>Not Found Data</h2>";
                                             }
    
                                                ?>   