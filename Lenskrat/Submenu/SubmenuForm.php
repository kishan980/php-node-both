<?php
 $myConnection = mysqli_connect("localhost","root","","lenskart_it_project_core_php");
 if(isset($_POST["submenuInsert"])){

      $menu          = $_POST["menu"];
      $submenu       = $_POST["Submenu"];
      $subMenuinsert ="insert into tbl_subcategory(categoryId,subcategoryName)values('$menu','$submenu')";
      $result        = mysqli_query($myConnection,$subMenuinsert);
      if($result>0){
        $msg ="Insert Submenu successfully";
      }else{
        $msg ="Not Insert ErrorSome.....";
      }
 }

 if(isset($_POST["submenuUpdate"])){

        $id                 =  $_POST["subcategoryid"];
        $categoryName       =  $_POST["menu"];
        $subcategoryName    =  $_POST["Submenu"];
        
        $updateQuery        = "update tbl_subcategory set categoryId='$categoryName',subcategoryName='$subcategoryName' where subcategoryId ='$id'";
        $reusltDtat = mysqli_query($myConnection,$updateQuery);

        if($reusltDtat)
        {
            $msg ="Update data for...... Subcategory .....";
        }
        else{
            $msg ="not update Subcategory.....";
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
                        <h1>SubMenu Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Submenu/submenuTable.php">Submenu Listing</a></li>
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
                                <h3 class="card-title"><?= isset($msg)? $msg :""; ?> <small>jQuery Validation</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <?php if(isset($_GET['edit']))
                                {
                                     $edit = $_GET["edit"];
                                     $editSelect ="SELECT
                                                        cat.categoryId,
                                                        cat.categoryName,
                                                        cat.categoryStatus,
                                                        subcat.subcategoryId,
                                                        subcat.subcategoryName,
                                                        subcat.subcategoryStatus
                                                    FROM
                                                        tbl_subcategory AS subcat
                                                    LEFT JOIN tbl_category AS cat
                                                    ON
                                                        subcat.categoryId = cat.categoryId
                                                    WHERE
                                                        subcategoryId = '$edit'";
                                    $resutl = mysqli_query($myConnection,$editSelect);
                                    $rowResult = mysqli_fetch_assoc($resutl);
                            ?>
                            <form role="form" id="submenuFormUpdate" method="post" action="SubmenuForm.php">
                                <div class="card-body">
                                    <input type="hidden" name="subcategoryid" value="<?php echo $rowResult["subcategoryId"]?>">
                                    <div class="form-group">
                                        <label for="menu">Menu Name</label>
                                       <select class="form-control" name="menu" id="menu">
                                        <option>select Menu</option>
                                         <?php 
                                            $selectMenu = "select * from tbl_category";
                                            $menuRow    = mysqli_query($myConnection,$selectMenu);
                                            while($row  = mysqli_fetch_assoc($menuRow)){ 
                                                   if($rowResult["categoryId"] == $row["categoryId"]){
                                                ?>
                                           <option value="<?php echo $row["categoryId"]?>" selected="selected"><?php echo $row["categoryName"];?></option>
                                       <?php } else { ?>
                                        <option value="<?php echo $row["categoryId"]?>"><?php echo $row["categoryName"];?></option>
                                       <?php }  } ?>
                                       </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Submenu">Submenu Name</label>
                                        <input type="text" name="Submenu" class="form-control" id="Submenu" placeholder="Enter SubMenu" value="<?php echo @$rowResult["subcategoryName"]?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submenuUpdate" id="submenuUpdate">Update</button>
                                </div>
                            </form>
                        <?php } else { ?>
                              <form role="form" id="submenuForm" method="post" action="SubmenuForm.php">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="menu">Menu Name</label>
                                       <select class="form-control" name="menu" id="menu">
                                        <option>select Menu</option>
                                         <?php 
                                            $selectMenu = "select * from tbl_category";
                                            $menuRow    = mysqli_query($myConnection,$selectMenu);
                                            while($row  = mysqli_fetch_assoc($menuRow)){ ?>
                                           <option value="<?php echo $row["categoryId"]?>"><?php echo $row["categoryName"];?></option>
                                       <?php } ?>
                                       </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Submenu">Submenu Name</label>
                                        <input type="text" name="Submenu" class="form-control" id="Submenu" placeholder="Enter SubMenu">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submenuInsert" id="submenuInsert">Submit</button>
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
        $('#submenuForm').validate({
            rules: {
                Submenu: {
                    required: true,
                    Submenu: true,
                },
            },
            messages: {
                Submenu: {
                    required: "Please enter a SubmenuName",
                    Submenu: "Please enter a vaild SubmenuName"
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
