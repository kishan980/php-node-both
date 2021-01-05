<?php
  $connection = mysqli_connect('localhost','root','','lenskart_it_project_core_php');

if(isset($_POST["stateSubmit"])){
    $state          = $_POST["stateName"];
    $country        = $_POST["countryName"];
    $queryState     ="insert into tbl_state(countryId,stateName) values('$country','$state')";
    $queryResutl    = mysqli_query($connection,$queryState);
    if($queryResutl >0){
        $msg        ="Insert State successful.....";
    }else{
        $msg        ="Not insert Data For....";
    }
}

if(isset($_POST["update"])){
    $stateId        = $_POST["stateid"];
    $state          = $_POST["stateName"];
    $country        = $_POST["countryName"];
    $updateQuery    = "update tbl_state set stateName='$state', countryId='$country' where stateId='$stateId'";
    $mysqlUpdate    = mysqli_query($connection,$updateQuery);
    if($mysqlUpdate){
        $msg ="Update.....";
    }else{
        $msg ="Not Update.....";
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
                        <h1>State Model</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Country/stateTable.php">State Listing</a></li>
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
                                <h3 class="card-title"><?php echo isset($msg)? $msg : ""; ?> <small>jQuery Validation</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <?php
                                    if(isset($_GET["edit"])){
                                       $edit       = $_GET["edit"];
                                      $selectEdit = "SELECT
                                        state.stateId,
                                        state.stateName,
                                        state.stateStatus,
                                        country.countryName,
                                        country.countryId
                                    FROM
                                        tbl_state AS state
                                    LEFT JOIN tbl_county AS country
                                    ON
                                        state.countryId = country.countryId
                                    WHERE
                                        stateId = '$edit'"; 
                                        ;
                                       $editrow    = mysqli_query($connection,$selectEdit);
                                       $rowedit    = mysqli_fetch_assoc($editrow);
                                ?>
                                <form role="form" id="stateForm" method="post" action="stateForm.php">
                                    <br>
                                    <input type="hidden" name="stateid"  value="<?php echo @$rowedit['stateId']?>">
                                <div class="card-body">
                                
                                    <div class="form-group">
                                        <label for="exampleInputCountryName">Country Select </label>
                                          <select name="countryName" id="countryName" class="form-control">
                                         <option   value="Select For country">select country</option>
                                         <?php
                                        
                                        $query = "select * from tbl_county";
                                        $row = mysqli_query($connection,$query);
                                        while($rowResult = mysqli_fetch_assoc($row))
                                        {
                                             if($rowedit['countryId']==$rowResult['countryId']){
                                        ?>
                                    
                                         <option   value="<?php echo $rowResult['countryId']?>" selected="selected"><?= $rowResult['countryName']?></option>

                                           <?php  } else { ?>

                                                 <option   value="<?php echo $rowResult['countryId']?>"><?= $rowResult['countryName']?></option>

                                    <?php } } ?>
 
                                </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputStateName">State Name</label>
                                        <input type="text" name="stateName" class="form-control" id="exampleInputStateName" placeholder="Enter State Name"  value="<?php echo $rowedit['stateName']?>">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="update" id="update" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                                <?php } else { ?>
                            <form role="form" id="stateForm" method="post" action="stateForm.php"> 
                                <div class="card-body">
                                
                                    <div class="form-group">
                                        <label for="exampleInputCountryName">Country Select </label>
                                       
                                        <select name="countryName" id="countryName" class="form-control">
                                                <option   value="Select For country">select country</option>
                                        <?php
                                        $query = "select * from tbl_county";
                                        $row = mysqli_query($connection,$query);
                                        while($rowResult = mysqli_fetch_array($row))
                                        {
                                        ?>
                                            <option   value="<?php echo $rowResult['countryId']?>"><?= $rowResult['countryName']?></option>
                                         <?php } ?>
                                        </select>
                                    
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputStateName">State Name</label>
                                        <input type="text" name="stateName" class="form-control" id="exampleInputStateName" placeholder="Enter State Name">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="stateSubmit" id="stateSubmit" class="btn btn-primary">Submit</button>
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
        $('#stateForm').validate({
            rules: {
                stateName: {
                    required: true,
                    stateName: true,
                },
                // countryName:{
                //     required:true,
                //     countryName:true,
                // },
            },
            messages: {
                stateName: {
                    required: "Please enter a stateName",
                    stateName: "Please enter a vaild stateName"
                },
                // countryName:{
                //     required: "Please Select a countryName",
                //     countryName: "Please Select a vaild countryName"
                // },
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
