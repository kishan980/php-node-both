<?php include 'header.php'; ?>
<div id="main-content">
<div class="container">
<div class="row">
<div class="col-md-8">
  <!-- post-container -->
    <div class="post-container">
        <?php
        include "config.php";
        
        if(isset($_GET["id"])){
        $post_id= $_GET["id"];
        }
         $querySelect = "select p.post_id,p.title,p.description,p.category,p.author,
         p.post_date,cat.category_name,cat.category_id,p.post_img,
         u.username from post as p left join category as cat on 
         p.category=cat.category_id left join user as u on u.user_id=p.author   
         where p.post_id=$post_id";

         $result      = mysqli_query($conn,$querySelect);
         if(mysqli_num_rows($result )>0){
             while($rowResult = mysqli_fetch_assoc($result)){

        ?>

        <div class="post-content single-post">
            <h3><?php echo $rowResult["title"];?></h3>
            <div class="post-information">
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                  <a href="category.php?cat=<?php echo $rowResult["category"]?>"><?php echo $rowResult["category_name"];?></a>
                </span>
                <span>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href='author.php?aid=<?php echo $rowResult["author"]?>'><?php echo $rowResult["username"];?></a>
                </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                   <?php echo $rowResult["post_date"];?>
                </span>
            </div>
            <img class="single-feature-image" src="admin/upload/<?php echo $rowResult["post_img"]?>" alt=""/>
            <p class="description">
                 <?php echo $rowResult["description"];?>
            </p>
        </div>
          <?php } }else{
            echo "<h2>No Recoeds Found..</h2>";
            }
        ?>
    </div>
    <!-- /post-container -->
</div>
<?php include 'sidebar.php'; ?>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
