<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 03:20:22 GMT -->
<?php require('../AdminTemplateLayout/HeaderLink.php');?>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elegant admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <?php require('../AdminTemplateLayout/Header.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php require("../AdminTemplateLayout/Sidebar.php");?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <?php require("../AdminTemplateLayout/Dashpage.php");?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php require("../AdminTemplateLayout/Footer.php");?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
<?php require("../AdminTemplateLayout/Footerlink.php");?>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 03:21:29 GMT -->
</html>