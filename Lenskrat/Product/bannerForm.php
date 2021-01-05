<?php
$mysqli_connection = mysqli_connect("localhost","root","","lenskart_it_project_core_php");
   
    if(isset($_POST["bannerInsert"])){
    $bnnerName  = $_POST["fileName"];
    $fileBanner = $_FILES["fileBanner"];
    $fileName   = $_FILES["fileBanner"]['name'];
    $fileError  = $_FILES["fileBanner"]['error'];
    $filetmp    = $_FILES["fileBanner"]['tmp_name'];
    $fileExtion = explode('.',$fileName);
    $filecheck  = strtolower(end($fileExtion));
    $fileStore  = array('png','gif','jpg','jpeg');
    if($fileStore){
        $image = "Please Enter jpeg/Gif/png/jpg";
    }
    if(in_array($filecheck,$fileStore)){
        $destintion = '../uploads/'.$fileName;
        move_uploaded_file($filetmp, $destintion);
        $insertUpload = "insert into tbl_banner(bannerName,bannerImage)values('$bnnerName','$destintion')";
        $result = mysqli_query($mysqli_connection,$insertUpload);
        if($result>0){
            $msg = "File is Upload successfully....";
        }else{
            $msg = "File not upload.....";
        }
    }
}


if(isset($_POST["bannerUpdate"])){
    $id = $_POST["bannerID"];
    $bnnerName  = $_POST["fileName"];
    $fileBanner = $_FILES["fileBanner"];
    $fileName   = $_FILES["fileBanner"]['name'];
    $fileError  = $_FILES["fileBanner"]['error'];
    $filetmp    = $_FILES["fileBanner"]['tmp_name'];
    $fileExtion = explode('.',$fileName);
    $filecheck  = strtolower(end($fileExtion));
    $fileStore  = array('png','gif','jpg','jpeg');
     if($fileStore){
        $image = "Please Enter jpeg/Gif/png/jpg";
    }
    if(in_array($filecheck,$fileStore)){
        $destintion = '../uploads/'.$fileName;
        move_uploaded_file($filetmp, $destintion);
        if((!($_FILES['image']['name'])))
        {
             $insertUploadUpdate = "update tbl_banner set bannerName='$bannerName', bannerImage='$destintion' where bannerId='$id'";
            $result = mysqli_query($mysqli_connection,$insertUploadUpdate);
        }else{

            $insertUploadUpdate = "update tbl_banner set bannerName='$bannerName', bannerImage='$destintion' where bannerId='$id'";
            $result = mysqli_query($mysqli_connection,$insertUploadUpdate);
            if($result>0){
            $msg = "File is Upload successfully Update....";
            }else{
            $msg = "File not update.....";
            }
        }
    
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
                        <h1>Banner Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Product/bannerTable.php">Banner Listing</a></li>
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
                                <h3 class="card-title"><?php echo isset($msg)? $msg : ""; ?> <small><?php echo isset($image)? $image : ""; ?></small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <?php
                            if(isset($_GET["edit"])){
                                $edit = $_GET["edit"];
                                $queryEditSelect ="select * from tbl_banner where bannerId='$edit'";
                                $row = mysqli_query($mysqli_connection,$queryEditSelect);
                                $result = mysqli_fetch_assoc($row);
                            ?>
                         <form role="form" id="bannerForm" method="post" enctype="multipart/form-data" action="bannerForm.php">
                              <input type="hidden" name="bannerID" value="<?= $result['bannerId']; ?>">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="fileBanner">Banner File</label>
                                        <input type="file" name="fileBanner" class="form-control" id="fileBanner" > 
                                            <br>
                                        <img src="../uploads/<?php echo $result['bannerImage'];?>" heigth="50px" width="200px">
                                        <br>

                                    </div>

                                    <div class="form-group">
                                        <label for="fileName">Banner Name</label>
                                        <input type="text" name="fileName"  class="form-control" id="fileName" placeholder="Enter Banner Name" value="<?=  $result['bannerName'];?>">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="bannerUpdate" id="bannerUpdate">Update</button>
                                </div>
                            </form>
                        <?php } else { ?>
                             <form role="form" id="bannerForm" method="post" enctype="multipart/form-data" action="bannerForm.php">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="fileBanner">Banner File</label>
                                        <input type="file" name="fileBanner" class="form-control" id="fileBanner" >
                                    <br>
                                    <spna class="text-danger"><?php echo isset($image)? $image : ""; ?></spna>
                                    </div>

                                    <div class="form-group">
                                        <label for="fileName">Banner Name</label>
                                        <input type="text" name="fileName"  class="form-control" id="fileName" placeholder="Enter Banner Name">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="bannerInsert" id="bannerInsert">Submit</button>
                                </div>
                            </form>
                        <?php }?>
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
<!-- <script type="text/javascript">
    $(document).ready(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert( "Form successful submitted!" );
            }
        });
        $('#bannerForm').validate({
            rules: {
                fileBanner: {
                    required: true,
                    fileBanner: true,
                }, 
                fileName: {
                    required: true,
                    fileName: true,
                },
            },
            messages: {
                fileBanner: {
                    required: "Please Select File...",
                    fileBanner: "Please Select File..."
                }, 
                fileName: {
                    required: "Please a Enter File Name...",
                    fileName: "Please a Enter File Name..."
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
</script> -->
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:25:01 GMT -->
</html>
