<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method ="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>
         <?php
            include "config.php";
            $limit =4;
             $querySelect = "select post.post_id,post.title,post.description,
             post.category,post.post_date,post.post_img,cat.category_name,cat.category_id
             from post left join category as cat on cat.category_id=post.category order by post.post_id limit $limit";

             $result      = mysqli_query($conn,$querySelect);
             if(mysqli_num_rows($result )>0){
                 while($rowResult = mysqli_fetch_assoc($result)){
            ?>
        <div class="recent-post">
            <a class="post-img" href="">
                <img src="admin/upload/<?php echo $rowResult["post_img"]?>" alt=""/>
            </a>
            <div class="post-content">
                <h5><a href="single.php?id=<?php echo $rowResult['post_id'];?>"><?php echo $rowResult["title"]?></a></h5>
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <a href='category.php?cat=<?php echo $rowResult["category"]?>'><?php echo $rowResult["category_name"]?></a>
                </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?php echo $rowResult["post_date"]?>
                </span>
                <a class="read-more" href="single.php?id=<?php echo $rowResult['post_id'];?>">read more</a>
            </div>
        </div>
    <?php } } else {?>
            <div class="text-danger">Not Found Recoreds</div>
    <?php } ?>
    </div>
    <!-- /recent posts box -->
</div>
