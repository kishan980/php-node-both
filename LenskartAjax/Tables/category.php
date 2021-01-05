
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/main/table-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 03:22:50 GMT -->
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
        <?php require('../AdminTemplateLayout/Sidebar.php');?>
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
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h4 class="text-themecolor">Footable</h4>
</div>
<div class="col-md-7 align-self-center text-right">
<div class="d-flex justify-content-end align-items-center">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">Footable</li>
</ol>
<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
    <h4 class="card-title"> Catgeory list</h4>
    <h6 class="card-subtitle"></h6>
     <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-left" id="load-button">Load Data</button>
    <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right" data-toggle="modal" data-target="#add-category">Add New Catgeory</button>
    <!-- Add Contact Popup Model -->
    <div id="add-category" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Category Model</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <from class="form-horizontal form-material" id="formId"  method="post">
                        <div class="form-group">
                              <div class="col-md-12 m-b-10">
                                    <input type="text" class="form-control" placeholder="Category" id="categoryName" name="categoryName"> </div>
                         </div>
                    </from>
                </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-info waves-effect" data-dismiss="modal" id="categoryButton">Save</button>
                           <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" id="categoryClear">Cancel</button>
                            </div>
                             </div>
                              <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <div class="table-responsive" id="demo-foo-addrow">
                                    <table id="categoryTable" class="table table-bordered m-t-30 table-hover contact-list" data-paging="true" data-paging-size="7">
                                     <?php
                                    include '../config.php';
                                    $sql ="select * from tbl_category";
                                    $result = mysqli_query($connection,$sql) or die("error select time");
                                    $output ='';

                                    if(mysqli_num_rows($result)>0){

                                        $output .='

                                        <thead>
                                            <tr>
                                                <th>CategoryId</th>
                                                <th>CatgeoryName</th>
                                          
                                            </tr>
                                        </thead>';
                                        while($row = mysqli_fetch_assoc($result)){
                                            $output .="
                                            <tbody>
                                               <tr>
                                                <td>".$row['categoryId']."</td>
                                                <td>".$row['categoryName']."</td>
                                               
                                            </tr>
                                            </tbody>";
                                        }
                                   
                                        // $output .=" </table>";
                                        echo $output;
                                      
                                     }else{
                                             echo "<h2>Not Found Data</h2>";
                                             }
    
                                                ?>   

                                     </table>      
                               
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                     
                    </div>
                </div>
            </div>
        </div>

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
    <?php
        require('../AdminTemplateLayout/footer.php');
    ?>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
    <?php require('../AdminTemplateLayout/FooterLink.php');?>
</body>

<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/main/table-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 03:22:50 GMT -->
</html>


   
 <script>
 $(document).ready(function(){
    function Fetch_data(){
        $.ajax({
             url:"../category-insert.php",
            //url:"../Tables/category.php",
            type:"POST",
            sucess:function(data){
              $("#demo-foo-addrow").html(data);
             
            }
        });
        }
        Fetch_data();

        $("#categoryButton").on('click',function(e){
            e.preventDefault();
            var categoryName = $("#categoryName").val();
            
            $ajax({
                url:""
            });
        });
    });


</script>
