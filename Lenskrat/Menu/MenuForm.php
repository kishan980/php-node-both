<?php

$myConnection = mysqli_connect("localhost","root","","lenskart_it_project_core_php") or die("error");

    if(isset($_POST["menuSubmit"])){
          $menuName    = $_POST["menuName"];
          $insertQuery ="insert into tbl_category(categoryName) values('$menuName')";
          $resultMenu  = mysqli_query($myConnection,$insertQuery);
          if($resultMenu>0){
            $msg ="Insert Menu Succesful...";
          }else{
            $msg ="Not insert ........";
          }
    }

    if(isset($_POST["menuUpdate"])){
          $menuid      = $_POST["menuid"];
          $menuName    = $_POST["menuName"];
          $updateQuery ="update tbl_category set categoryName='$menuName' where categoryId='$menuid'";
          $result  = mysqli_query($myConnection,$updateQuery);
         
           if($result){
            $msg ="Update Menu Succesful...";
          }else{
            $msg ="Not Update ........";
          }
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
                        <h1>Menu Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Menu/menuTable.php">Menu Listing</a></li>
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
                                <h3 class="card-title"><?php echo isset($msg)? $msg :""; ?> 
                                <small>jQuery Validation</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <?php
                               if(isset($_GET["edit"])){
                                $edit       = $_GET["edit"];

                                $editSelect = "select * from tbl_category where categoryId='$edit'";
                                $row        = mysqli_query($myConnection,$editSelect);
                                $selectResult =mysqli_fetch_assoc($row);
                                ?>
                                <form role="form" id="menuUpdate" action="menuForm.php" method="post">
                                <div class="card-body">
                                    <input type="hidden" name="menuid" value="<?php echo  $selectResult['categoryId']?>">
                                    <div class="form-group">
                                        <label for="exampleInputMenuName">Menu Name</label>
                                        <input type="text" name="menuName" class="form-control" id="exampleInputMenuName" placeholder="Enter Menu Name"
                                        value="<?= @$selectResult['categoryName'];?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="menuUpdate" id="menuUpdate">Update</button>
                                </div>
                            </form>
                            <?php } else {   ?>
                            <form role="form" id="menuForm" action="menuForm.php" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputMenuName">Menu Name</label>
                                        <input type="text" name="menuName" class="form-control" id="exampleInputMenuName" placeholder="Enter Menu Name">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="menuSubmit" id="menuSubmit">Submit</button>
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
        $('#menuForm').validate({
            rules: {
                menuName: {
                    required: true,
                    menuName: true,
                },
            },
            messages: {
                cityName: {
                    required: "Please enter a menuName",
                    menuName: "Please enter a vaild menuName"
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
