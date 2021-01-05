<?php
     $connection = mysqli_connect('localhost','root','','lenskart_it_project_core_php');
     if(isset($_GET['del'])){
        $del = $_GET["del"];
        $deleteQuery ="delete from tbl_state where stateId='$del'";
        print_r($deleteQuery);
        $delereResult = mysqli_query($connection,$deleteQuery);
        if($delereResult){
            header('location:StateTable.php');
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
                        <h1>State Listing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Country/StateForm.php">State Model</a></li>
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
                                    <th>State ID</th>
                                    <th>Country Name</th>
                                    <th>State Name</th>
                                    <th>State Status</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>

                               <?php
                            
                                $queryStateSelect = "SELECT
                                    state.stateId,
                                    country.countryId,
                                    country.countryName,
                                    state.stateName,
                                    state.stateStatus
                                FROM
                                    tbl_state AS state
                                LEFT JOIN tbl_county AS country
                                ON
                                    state.countryId = country.countryId ";
                                $stateResultTable= mysqli_query($connection,$queryStateSelect);
                                while($row = mysqli_fetch_assoc($stateResultTable)){

                                
                                ?>
                                    <tr>
                                        <td><?php echo $row['stateId']?></td>
                                        <td><?php echo $row["countryName"]?></td>
                                        <td><?php echo $row["stateName"];?></td>
                                        <td><?php echo $row["stateStatus"];?></td>
                                        <td><a href="../country/StateTable.php?del=<?php echo $row['stateId']?>">Delete</a></td>
                                        <td><a href="../Country/StateForm.php?edit=<?php echo $row['stateId']?>">Edit</a></td>
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
