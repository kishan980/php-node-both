<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">
                <?php 
                    if(isset($_GET["page"])){
                        $page = $_GET["page"];
                    }
                    else{
                        $page =1;
                    }
                    $totalLimit =3;
                    $offect =($page -1)*$totalLimit;
                    $categorySelect = "select * from category as cat left join post as postData on postData.post_id=cat.post order by category_id DESC limit $offect,$totalLimit";
                    $resultcategory = mysqli_query($conn,$categorySelect);
                    if(mysqli_num_rows($resultcategory)>0){
                ?>
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php  
                        while($row = mysqli_fetch_assoc($resultcategory)){
                        ?>
                        <tr>
                            <td class='id'><?php echo $row["category_id"];?></td>
                            <td><?php echo $row["category_name"];?></td>
                            <td><?php echo $row["post"];?></td>
                            <td class='edit'><a href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            <?php } 

                $selPag = "select * from category";
                $resultPag = mysqli_query($conn,$selPag);
                if(mysqli_num_rows($resultPag)){
                    $totalRecord = mysqli_num_rows($resultPag);
                    //$totalLimit =3;
                    $totalPage = ceil($totalRecord/$totalLimit);
                    echo "<ul class='pagination admin-pagination'>";
                    if($page>1){
                    echo '<li><a href="category.php?page='.($page -1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$totalPage;$i++){
                        if($i == $page){
                            $active ="active";
                        }else{
                            $active="";
                        }
                        echo '<li class="'.$active.'"><a href="category.php?page='.$i.'">'.$i.'</a></li>';
                   }
                   if($totalPage > $page){
                        echo '<li><a href="category.php?page='.($page+1).'">Next</a></li>';
                    }
                }
                  
                  echo '</ul>';
            ?>      
                
           
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
