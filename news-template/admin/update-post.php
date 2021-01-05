<?php include "header.php"; ?>
<?php

  if($_SESSION["user_role"] == 0){
    include "config.php";
    $post_id = $_GET["edit"];
    $sess = "select author from post where post_id=$post_id";
    $sessionResutl = mysqli_query($conn,$sess)or die("query Failed");
    $rowSession = mysqli_fetch_assoc($sessionResutl);
    if($rowSession["author"] != $_SESSION["user_id"]){
      header("location: $adminUrl/admin/post.php");
    }
  }
?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <?php 
            //  include 'config.php';
            $post_id = $_GET["edit"];
              $querySelect = "select p.post_id,p.title,p.post_img,p.description,p.post_date,
                                p.category,cat.category_name,u.username from post as p left join category as cat on p.category=cat.category_id left join user as u on u.user_id=p.author where 
                                    p.post_id ='".$post_id."'";
                  $resultPost = mysqli_query($conn,$querySelect) or die("Query Error");
                 if(mysqli_num_rows($resultPost)>0){
                    while($row = mysqli_fetch_assoc($resultPost)){
        ?>
        <!-- Form for show edit-->
        <form action="save-post-update.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row["post_id"]?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="post_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row["title"]?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="postdesc" class="form-control"  required rows="5">
                    <?php echo $row["description"]?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                     <option disabled> Select Category</option>
                   <?php
                                $queryCategory = "select * from category";
                                $result = mysqli_query($conn,$queryCategory)or die("error");
                                if(mysqli_num_rows($result)>0){
                                    while($rowcategory = mysqli_fetch_assoc($result)){
                                        if($row["category"] == $rowcategory["category_id"]){
                                        
                                         echo '<option value='.$rowcategory['category_id'].' selected>'.$rowcategory['category_name'].'</option>';
                                     }
                                     else{
                                         echo '<option value='.$rowcategory['category_id'].' >'.$rowcategory['category_name'].'</option>';
                                        }
                                    }
                                }
                              ?>
                </select>
                   <input type="hidden" name="old-category" value="<?php echo $row["category"];?>">
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="new-image">
                <br>
                <img  src="upload/<?php echo $row['post_img']?>" height="150px">
                <input type="hidden" name="old-image" value="<?php echo $row['post_img']?>">
                <br>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
    <?php } }else
                {
                    echo "Result not found";
                }
     ?>
        <!-- Form End -->
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
