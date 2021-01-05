<?php include 'header.php'; ?>
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                <?php
                    if(isset($_GET["search"])){
                        $search = $_GET["search"];
                        }
                ?>
                  <h2 class="page-heading"> Search :<?php echo $search; ?></h2>;
        <?php
        include "config.php";
        if(isset($_GET["aid"])){
            $author     = $_GET["aid"];
            }
            $limits=3;
            if(isset($_GET["page"])){
                $page = $_GET["page"];
            }else{
                $page =1;
            }
         $offest = ($page -1)*$limits;
        $querySelect = "select p.post_id,p.title,p.description,p.category,p.author,
            p.post_date,cat.category_name,cat.category_id,p.post_img,
            u.username from post as p left join category as cat on p.category=cat.category_id left join user as u on u.user_id=p.author 
            where p.title like '%$search%' or p.description like '%$search %'  order by p.post_id DESC limit $offest,$limits";
         $result      = mysqli_query($conn,$querySelect);
         if(mysqli_num_rows($result )>0){
             while($rowResult = mysqli_fetch_assoc($result)){

        ?>
         <div class="post-content">

        <div class="row">
            <div class="col-md-4">
                <a class="post-img" href="single.php?id=<?php echo $rowResult['post_id'];?>"><img src="admin/upload/<?php echo $rowResult["post_img"]?>" alt=""/></a>

            </div>
            <div class="col-md-8">
                <div class="inner-content clearfix">
                    <h3><a href='single.php?id=<?php echo $rowResult['post_id'];?>'><?php echo $rowResult["title"];?></a></h3>
                    <div class="post-information">
                        <span>
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <a href='category.php'><?php echo 
                                $rowResult["category_name"];?></a>
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
                    <p class="description">
                        <?php echo substr($rowResult["description"],0,100) ."....";?>
                    </p>
                    <a class='read-more pull-right' href='single.php?id=<?php echo $rowResult['post_id'];?>'>read more</a>
                </div>
            </div>
        </div>
        </div>
            <?php } }else{
                echo "<h2>No Recoeds Found..</h2>";
                }
                 $pagenation = "select * from post 
                                    where post.title like '%$search%'";
           
                    $resultPage = mysqli_query($conn,$pagenation) or die("error Query");
                    if(mysqli_num_rows($resultPage)){

                   $totalRecoreds = mysqli_num_rows($resultPage);
                    $totalPage     = ceil($totalRecoreds/$limits);
                    echo "<ul class='pagination admin-pagination'>";
                    if($page >1){
                    echo '<li><a href="index.php?search='.$search.'&page='.($page -1).'">Prev</a></li>';    
                    }
                   
                    for($i=1;$i<=$totalPage;$i++){
                        if($i == $page){
                            $active ="active";
                        }else{
                            $active = "";
                        }
                       echo '<li class="'.$active.'"><a href="index.php?serach='.$search.'&page='.$i.'">'.$i.'</a></li>';
                       if($totalPage > $page){
                       echo '<li><a href="index.php?search='.$search.'&page='.($page+1).'">Next</a></li>';
                       }  
                       
                    }
                    echo "</ul>"; 
        ?>
            
        <?php } ?><!-- /post-container -->
            </div>
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
