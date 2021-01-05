<?php
   $connection = mysqli_connect("localhost","root","","lenskart_it_project_core_php") or die("Error For Connection");

if(isset($_GET["del"])){
    $del = $_GET["del"];
    $queryDelete = "delete from tbl_city where cityId='$del'";
    $deleteResutl = mysqli_query($connection,$queryDelete);
    if($deleteResutl)
    {
        $msg = "Delete City";
    }else{
       $msg ="Not Delete City";
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
                        <h1>City Listing</h1>
                        <h1 class="text-danger"><?php echo isset($msg)? $msg : ""; ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Country/cityForm.php">City Model</a></li>
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
                                    <th>City ID</th>
                                    <th>Country Name</th>
                                    <th>State Name</th>
                                    <th>CityName</th>
                                    <th>CityStatus</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                             
                                $selectCountry = "SELECT
                                                city.cityid,
                                                city.cityName,
                                                city.cityStatus,
                                                country.countryId,
                                                country.countryName,
                                                state.stateId,
                                                state.stateName
                                            FROM
                                                tbl_city AS city
                                            LEFT JOIN tbl_county AS country
                                            ON
                                                city.countryId = country.countryId
                                            LEFT JOIN tbl_state AS state on state.stateId = city.stateId";

                                $select = mysqli_query($connection,$selectCountry);

                                while($row = mysqli_fetch_assoc($select)){

                                    ?>
                                    <tr>
                                        <td><?php echo $row['cityid']?></td>
                                        <td><?php echo $row["countryName"]?></td>
                                        <td><?php echo $row["stateName"]?></td>
                                        <td><?php echo $row["cityName"]?></td>
                                        <td><?php echo $row["cityStatus"];?></td>
                                        <td><a href="../Country/cityTable.php?del=<?php echo $row['cityid']?>">Delete</a></td>
                                        <td><a href="../Country/cityForm.php?edit=<?php echo $row['cityid']?>">Edit</a></td>
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
