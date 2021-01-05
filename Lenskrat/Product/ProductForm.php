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
                        <h1>Product Model</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../Layout_Admin/Dashboad.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../Product/productTable.php">Product Listing</a></li>

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
                                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="productForm">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="menuName">Country Select </label>
                                        <select name="menuName" id="menuName" class="form-control">
                                            <option   value="Select For Menu">select Menu</option>
                                            <option   value="India">India</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="submenuName">State Select </label>
                                        <select name="submenuName" id="submenuName" class="form-control">
                                            <option   value="Select For country">select submenu</option>
                                            <option   value="gujarat">gujarat</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="productName">Product Name</label>
                                        <input type="text" name="productName" class="form-control" id="productName" placeholder="Enter Product Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="productPrice">Product Price</label>
                                        <input type="text" name="productPrice" class="form-control" id="productPrice" placeholder="Enter Product Price">
                                    </div>

                                    <div class="form-group">
                                        <label for="productDiscount">Product Discount</label>
                                        <input type="text" name="productDiscount" class="form-control" id="productDiscount" placeholder="Enter Product Discount">
                                    </div>
                                    <div class="form-group">
                                        <label for="productDescription">Product Description</label>
                                        <input type="text" name="productDescription" class="form-control" id="productDescription" placeholder="Enter Product Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="productImage">Product Image</label>
                                        <input type="file" name="productImage" class="form-control" id="productImage" placeholder="Enter Product Name">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="productSubmit">Submit</button>
                                </div>
                            </form>
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
