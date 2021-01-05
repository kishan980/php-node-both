<?php
   $connection = mysqli_connect("localhost","root","","lenskart_it_project_core_php") or die("Error For Connection");

if(isset($_GET["del"])){
    //$del = $_GET["del"];

        $del = $_GET["del"];
        $se ="select bannerImage from tbl_banner where bannerId ='$del'";
        $select=mysqli_query($connection,$se);
        $image=mysqli_fetch_array($select);
        @unlink("../uploads/".$image['bannerImage']);
        $delete ="delete from tbl_banner where bannerId='$del'";
        $result=mysqli_query($connection,$delete    );
        //$queryDelete = "delete from tbl_banner where bannerId ='$del'";
            $deleteResutl = mysqli_query($connection,$result);
            if($deleteResutl)
            {
                $msg = "Delete Banner";
            }else{
                     $msg ="Not Delete Banner";
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
                        <h1>Banner Listing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Product/bannerForm.php">Banner Model</a></li>
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
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>banner ID</th>
                                    <th>Bnner Name</th>
                                    <th>Banner Image</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                $connection = mysqli_connect("localhost","root","","lenskart_it_project_core_php") or die("Error For Connection");

                                $selectBnner = "select * from tbl_banner";

                                $select = mysqli_query($connection,$selectBnner);

                                while($row = mysqli_fetch_assoc($select)){

                                    ?>
                                    <tr>
                                        <td><?php echo $row['bannerId']?></td>
                                        <td><?php echo $row["bannerName"]?></td>
                                        <td><img src="../uploads/<?php echo $row["bannerImage"];?>"hiegth="80px" width="80px"></td>
                                        <td><a href="../Product/bannerTable.php?del=<?php echo $row['bannerId']?>">Delete</a></td>
                                        <td><a href="../Product/bannerForm.php?edit=<?php echo $row['bannerId']?>">Edit</a></td>
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
