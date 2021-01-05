<?php

$connection = mysqli_connect('localhost','root','','lenskart_it_project_core_php') or die("Database Not Connection");

if(isset($_POST["countrysubmit"])){
    $countryname = $_POST["countryName"];

    $insertQuery = "insert into tbl_county (countryName) values('$countryname')";

    $insert = mysqli_query($connection,$insertQuery) or die("Error...");
    if($insert>0){
       // echo "Insert Country succefully.....";
        $msg ="Insert Country succefully.....";
    }else{
        //echo "Not succefully Insert";
        $msg ="Not succefully Insert";
    }
}

if(isset($_GET['del'])){

    $del = $_GET['del'];
    $deleteQuery = "delete from tbl_county where countryId ='$del'";
    $delResult   = mysqli_query($connection,$deleteQuery) or die("Error Delete");
    header("location:../Country/countryTable.php");
}

 if(isset($_POST['edit'])){
      $edit = $_POST['id'];
      $countryName = $_POST['countryName'];
      $update      = "update tbl_county set countryName ='$countryName' where countryId='$edit'"; 
      $msg         = mysqli_query($connection,$update);
      header("location:../Country/countryTable.php");
}

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/v3/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:25:01 GMT -->
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
                        <h1>Country Model</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Country/countryTable.php"> Country List</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo isset($msg)? $msg : "" ?><small>jQuery Validation</small></h3>
                            </div>

                            <?php

                            if(isset($_GET['edit'])){

                                $edit = $_GET['edit'];
                                $editQuery = "select * from tbl_county where countryId='$edit'"; 
                                $editData  = mysqli_query($connection,$editQuery);
                                $row = mysqli_fetch_assoc($editData);


                            ?>
                                 <form role="form" id="quickForm" method="post" action="CountryForm.php">
                                <br><input type="hidden" name="id" value="<?php echo @$row['countryId']?>">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputCountryName">Country Name</label>
                                        <input type="text" name="countryName" class="form-control" id="exampleInputCountryName" placeholder="Enter Country Name" value="<?php echo @$row['countryName']?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="edit">Submit</button>
                                </div>
                            </form>
                            <?php 

                            }else{
                             
                            ?>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="CountryForm.php">
                               
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputCountryName">Country Name</label>
                                        <input type="text" name="countryName" class="form-control" id="exampleInputCountryName" placeholder="Enter Country Name">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="countrysubmit">Submit</button>
                                </div>
                            </form>
                        <?php } ?>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
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

<!-- jQuery -->
<?php include("../Layout_Admin/FooterLink.php");?>
<script type="text/javascript">
    $(document).ready(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert( "Form successful submitted!" );
            }
        });
        $('#quickForm').validate({
            rules: {
                countryName: {
                    required: true,
                    countryName: true,
                },
            },
            messages: {
                countryName: {
                    required: "Please enter a countryName",
                    countryName: "Please enter a vaild countryName"
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:25:01 GMT -->
</html>
