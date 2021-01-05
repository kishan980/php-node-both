<?php
include "config.php";
$page = basename($_SERVER['PHP_SELF']);

switch($page){
    case "single.php":
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sqlQueryCategory = "select * from post where post_id ='$id'";
        $resultTitle      = mysqli_query($conn,$sqlQueryCategory) or die("title Page error query");
        $rowTitle         = mysqli_fetch_assoc($resultTitle);
        $pageTitle        = $rowTitle['title'];
    }else{
        $pageTitle ="No Post Found....";
    }

    break;
    case "category.php":
     if(isset($_GET["cat"])){
        $id = $_GET["cat"];
        $sqlQueryCategory = "select * from category where category_id ='$id'";
        $resultTitle      = mysqli_query($conn,$sqlQueryCategory) or die("title Page error query");
        $rowTitle         = mysqli_fetch_assoc($resultTitle);
        $pageTitle        = $rowTitle['category_name'];
    }else{
        $pageTitle ="No Post Found....";
    }
    break;
    case "author.php":
      if(isset($_GET["aid"])){
        $id = $_GET["aid"];
        $sqlQueryCategory = "select * from user where user_id ='$id'";
        $resultTitle      = mysqli_query($conn,$sqlQueryCategory) or die("title Page error query");
        $rowTitle         = mysqli_fetch_assoc($resultTitle);
        $pageTitle        = $rowTitle['first_name']."".$rowTitle["last_name"];
    }else{
        $pageTitle ="No Post Found....";
    }
    break;
    case "search.php":
      if(isset($_GET["search"])){
         $pageTitle        = $_GET["search"];
    }else{
        $pageTitle ="No search Result Found....";
    }
    break;
    default:
        $pageTitle = "New technology";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo isset($pageTitle)? $pageTitle : ""; ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class=" col-md-offset-4 col-md-4">
                <a href="index.php" id="logo"><img src="images/news.jpg"></a>
            </div>
            <!-- /LOGO -->
        </div>
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                include "config.php";
                    if(isset($_GET["cat"])){
                     $cat   = $_GET["cat"];
                    }
                    $category       = "select * from category where post >0";
                    $resultcategory = mysqli_query($conn,$category);
                    if(mysqli_num_rows($resultcategory)>0){
                     $active ='';
                    ?>
                <ul class='menu'>
                 <li><a href="<?php echo $adminUrl;?>">Home</a></li>"
                    <?php 
                     while($rowCategory = mysqli_fetch_assoc($resultcategory)){
                        if(isset($_GET["cat"])){
                          if($rowCategory["category_id"] == $cat){
                            $active ="active";
                        }else{
                            $active ='';
                        }
                    }
                        echo "<li><a class='$active' href='category.php?cat=".$rowCategory['category_id']."'>".$rowCategory['category_name']."</a></li>";    
                      }
                    ?>
                    </ul>   
                
                    <?php } else {
                         echo "<div class='text-danger'>Category Not Found</div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
