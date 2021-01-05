<?php
$connection = mysqli_connect("localhost","root","","lenskart_it_project_core_php");

if(isset($_POST["cityInsert"])){
    $countryName = $_POST["countryName"];
    $stateName   = $_POST["stateName"];
    $cityName    = $_POST["cityName"];

   $cityInsert = "insert into tbl_city(countryId,stateId,cityName) values('$countryName','$stateName','$cityName')";
   $insertResult = mysqli_query($connection,$cityInsert);
   if($insertResult>0){
    $msg ="City Insert";
   }else{
    $msg ="City Not Insert";
   }
}


if(isset($_POST["cityupdate"])){
    $cityId      = $_POST["cityId"];
    $countryName = $_POST["countryName"];
    $stateName   = $_POST["stateName"];
    $cityName    = $_POST["cityName"];

    $updateCity ="update tbl_city set countryId ='$countryName', stateId ='$stateName', cityName='$cityName' where cityId='$cityId'";

   $updateResult = mysqli_query($connection,$updateCity);
   if($updateResult){
    $msg ="City Update";
   }else{
    $msg ="City Not Update";
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
                        <h1>City Model</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Country/cityTable.php">City Listing</a></li>
                                   
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
                                <h3 class="card-title"><?php echo isset($msg)? $msg: ""; ?> <small>jQuery Validation</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                     <?php
                                if(isset($_GET['edit'])){
                                    $edit = $_GET["edit"];
                                $selectCountry = "SELECT
                                                city.cityId,
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
                                            LEFT JOIN tbl_state AS state on state.stateId = city.stateId where cityId='$edit'";


                                $select = mysqli_query($connection,$selectCountry);

                                $editData = mysqli_fetch_assoc($select);

                                ?>
                            <form role="form" id="cityForm" action="cityForm.php" name="cityForm" method="post">
                                <input type="hidden" value="<?php echo @$editData['cityId']?>" name="cityId">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputStateName">Country Select </label>
                                
                                  <select name="countryName" id="countryName" class="form-control">
                                     <option   value="Select For country">select country</option>
                                       <?php 
                                            $selectCountry = "select * from tbl_county";
                                            $selectRow = mysqli_query($connection,$selectCountry);
                                            while($row = mysqli_fetch_assoc($selectRow))
                                            {
                                                 if($editData['countryId'] == $row['countryId']){
                                                ?>
                                                <option   value="<?php echo $row['countryId']?>" selected="selected"><?php echo $row['countryName']?></option>
                                        <?php } else{ ?>
                                             <option   value="<?php echo $row['countryId']?>"><?php echo $row['countryName']?></option>
                                        <?php } }?>
                                </select>
                                    </div>

                                <div class="form-group">
                                    <label for="exampleInputStateName">State Select </label>
                                    <select name="stateName" id="stateName" class="form-control">
                                    <option   value="Select For State">select State</option>
                                        <?php
                                        $selectState = "select * from tbl_state";
                                        $rowState  = mysqli_query($connection,$selectState);
                                        while($rowstateSingle = mysqli_fetch_assoc($rowState)){
                                            if($editData['stateId'] == $rowstateSingle['stateId'])
                                            {
                                        ?>
                                            <option   value="<?php echo $rowstateSingle['stateId'];?>" selected="selected"><?php echo $rowstateSingle["stateName"];?></option>
                                            <?php }  else  { ?>
                                                     <option   value="<?php echo $rowstateSingle['stateId'];?>"><?php echo $rowstateSingle["stateName"];?></option>
                                            <?php } } ?>
                                    </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputCityName">City Name</label>
                                        <input type="text" name="cityName" class="form-control" id="exampleInputCityName" placeholder="Enter City Name"
                                        value="<?php echo $editData["cityName"]; ?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="cityupdate" id="cityupdate">Update</button>
                                </div>
                            </form>
                             <?php } else { ?>
                             <form role="form" id="cityForm" action="cityForm.php" name="cityForm" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputStateName">Country Select </label>
                               
                        
                                
                                  <select name="countryName" id="countryName" class="form-control">
                                     <option   value="Select For country">select country</option>
                                       <?php 
                                            $selectCountry = "select * from tbl_county";
                                            $selectRow = mysqli_query($connection,$selectCountry);
                                            while($row = mysqli_fetch_assoc($selectRow))
                                            {
                                              ?>
                                             <option   value="<?php echo $row['countryId']?>"><?php echo $row['countryName']?></option>
                                        <?php } ?>
                                </select>
                                    </div>

                                <div class="form-group">
                                    <label for="exampleInputStateName">State Select </label>
                                    <select name="stateName" id="stateName" class="form-control">
                                    <option   value="Select For State">select State</option>
                                        <?php
                                        $selectState = "select * from tbl_state";
                                        $rowState  = mysqli_query($connection,$selectState);
                                        while($rowstateSingle = mysqli_fetch_assoc($rowState)){
                                        ?>
                                    
                                         <option   value="<?php echo $rowstateSingle['stateId'];?>"><?php echo $rowstateSingle["stateName"];?></option>
                                            <?php }  ?>
                                    </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputCityName">City Name</label>
                                        <input type="text" name="cityName" class="form-control" id="exampleInputCityName" placeholder="Enter City Name"
                                        value="<?php echo @$editData["cityName"]; ?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="cityInsert" id="cityInsert">Submit</button>
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
        $('#cityForm').validate({
            rules: {
                cityName: {
                    required: true,
                    cityName: true,
                },
            },
            messages: {
                cityName: {
                    required: "Please enter a cityName",
                    cityName: "Please enter a vaild cityName"
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
