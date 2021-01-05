<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- Main content -->
    <section class="content">
    
          <!-- /.card -->
		<?php if($this->uri->segment(2) == "deleteMsg") { ?>
			<div class="alert alert-success alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> Delete Data.
			</div>
		<?php } ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url();?>Product"><?php echo isset($product)? $product : ""; ?></a></h3>
        
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product
					  ID</th>
                  <th>Category</th>
                  <th>sub
					  Category</th>
                  <th>Product
                      Name</th>
					<th>Product
                      Price</th>
                  <th>product
                      Image</th>
                  <th>Product
                      Price</th>
                  <th>Product
                    Description</th>
                  <th>Product
                      Descount</th>
                  <th>Product
                      Status</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($productShow->result_array() as $row) { ?>
                <tr>
                  <td><?= $row["productId"];?></td>
                  <td><?= $row["categoryName"];?></td>
                  <td><?= $row["subcategoryName"];?></td>
                  <td><?= $row["productName"];?></td>
                  <td><?= $row["ProductPrice"];?></td>
                  <td><?= $row["productDiscount"];?></td>
                  <td><img src="<?= base_url();?>ProductImage/<?= $row["productImage"];?>" width="100px"></td>
                  <td><?= $row["productTag"];?></td>
                  <td><?= $row["productDescription"];?></td>
                  <td><?= $row["ProductStatus"];?></td>
                  <td><a href="<?= base_url();?>Product/deleteForm/<?= $row["productId"]?>">Delete</td>
                  <td><a href="<?= base_url();?>Product/editForm/<?= $row["productId"]?>">Edit</td>
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
