<?php
$myConnection = mysqli_connect("localhost","root","","lenskart_it_project_core_php") or die("error");

if(isset($_GET["del"])){
    $del        = $_GET["del"];
    $deleteMenu = "delete from tbl_category where categoryId ='$del'";
    $delete     = mysqli_query($myConnection,$deleteMenu);
    if($delete>0){
        $msg ="Delete Menu succefully...";
    }else{
        $msg ="not Delete Menu...";
    }
}
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/v3/pages/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:25:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<?php include("../Layout_Admin/HeaderLink.php");?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <?php include("../Layout_Admin/Header.php");?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("../Layout_Admin/Sidebar.php");?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menu Listing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="MenuForm.php">Menu Model</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-danger"><?= isset($msg)? $msg : ""; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Country ID</th>
                                    <th>Country Name</th>
                                    <th>Country Status</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php

                                $connection = mysqli_connect("localhost","root","","lenskart_it_project_core_php") or die("Error For Connection");

                                $selectCategory = "select * from tbl_category";

                                $select = mysqli_query($connection,$selectCategory);

                                while($row = mysqli_fetch_assoc($select)){

                                    ?>
                                    <tr>
                                        <td><?php echo $row['categoryId']?></td>
                                        <td><?php echo $row["categoryName"]?></td>
                                        <td><?php echo $row["categoryStatus"];?></td>
                                        <td><a href="../Menu/menuTable.php?del=<?php echo $row['categoryId']?>">Delete</a></td>
                                        <td><a href="../Menu/menuForm.php?edit=<?php echo $row['categoryId']?>">Edit</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("../Layout_Admin/Footer.php"); ?>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include("../Layout_Admin/FooterLink.php");?>
<!-- jQuery -->

</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:25:02 GMT -->
</html>
