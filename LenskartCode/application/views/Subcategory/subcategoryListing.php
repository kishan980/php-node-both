<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- Main content -->
    <section class="content">
    
          <!-- /.card -->
		<?php
		if($this->uri->segment(2)== "deleteMegSub"){?>
			<div class="alert alert-info alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Category!</strong> Delete SuccessFully.
			</div>
		<?php } ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url();?>Subcategory"><?= isset($subcategoryListing)?
              $subcategoryListing : ""; ?></a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CategoryID</th>
                  <th>Category</th>
                  <th>SubCategory</th>
                  <th>CategoryStatus</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($listingSub->result_array() as $row) { ?>
                <tr>
                  <td><?= $row["subcategoryId"];?></td>
                  <td><?= $row["categoryName"];?></td>
                  <td><?= $row["subcategoryName"];?></td>
                  <td><?= $row["subcategoryStatus"];?></td>
					<td><a href="<?= base_url();?>Subcategory/deleteSubcategory/<?= $row["subcategoryId"];?>">Delete</a></td>
					<td><a href="<?= base_url();?>Subcategory/formEditSubcategory/<?= $row["subcategoryId"];?>">Edit</a></td>
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

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:25:02 GMT -->
</html>
