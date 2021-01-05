<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
                <?php
                include "config.php";
                 $limit =3;
                 if(isset($_GET["page"])){
                  $page = $_GET["page"];
               }else{
                  $page =1;
                }
                 $offset = ($page -1)*$limit;
                
                if($_SESSION["user_role"] == '1'){
                 $querySelect = "select p.post_id,p.title,p.description,p.post_date,cat.category_name,cat.category_id,
                  u.username from post as p left join category as cat on p.category=cat.category_id left join user as u on u.user_id=p.author order by p.post_id DESC limit $offset,$limit";
                  }elseif($_SESSION["user_role"] == '0'){
                    $querySelect = "select p.post_id,p.title,p.description,p.post_date,cat.category_name,cat.category_id,
                  u.username from post as p left join category as cat on p.category=cat.category_id left join user as u on u.user_id=p.author where p.author='".$_SESSION['user_id']."' order by p.post_id DESC limit $offset,$limit";
                  }
                
                $result      = mysqli_query($conn,$querySelect);
                if(mysqli_num_rows($result )>0){
                ?>
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php 
                        $serialNo = $offset+1;
                        while($rowResult = mysqli_fetch_assoc($result)){
                        ?>
                          <tr>
                              <td class='id'><?php echo $serialNo;?></td>
                              <td><?php echo $rowResult["title"];?></td>
                              <td><?php echo $rowResult["category_name"];?></td>
                              <td><?php echo $rowResult["post_date"];?></td>
                              <td><?php echo $rowResult["username"];?></td>
                              <td class='edit'><a href='update-post.php?edit=<?php echo $rowResult["post_id"];?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?delet=<?php echo $rowResult["post_id"];?>&cat=<?php echo $rowResult["category_id"]?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                        <?php
                        $serialNo++;
                         } ?>
                      </tbody>
                  </table>
                <?php }  

                  $pagination    =  "select * from post";
                  $resultPage    =  mysqli_query($conn,$pagination)or die("query Error");
                  if(mysqli_num_rows($resultPage) >0 ){

                    $totalRecoreds = mysqli_num_rows($resultPage);
                   // $limit =3;
                    $totatPage    = ceil($totalRecoreds/$limit);
                    echo "<ul class='pagination admin-pagination'>";
                    if($page >1){
                    echo '<li><a href="post.php?page='.($page-1).'">Prev</a></li>';
                    }
                    for($i=1;$i<=$totatPage;$i++){
                        if($i == $page){
                          $active ="active";
                        }else{
                          $active ='';
                        }
                        echo '<li class="'.$active.'"><a href="post.php?page='.$i.'">'.$i.'</a></li>';

                    }
                    if($totatPage >$page)
                    echo '<li><a href="post.php?page='.($page+1).'">next</a></li>';
                    echo "</ul>";
                ?>   
                     
                    
                <?php } ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
