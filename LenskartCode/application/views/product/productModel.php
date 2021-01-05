  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo isset($product)? $product :""; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashpge">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Product/productListing">Product Listing</a></li>
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
<!--                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>-->
              </div>
				<?php if($this->uri->segment(2) == "ProductInsertMsg") { ?>
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Success!</strong> Insert Data.
				</div>
				<?php }  else if($this->uri->segment(2)=="productUpMsg") { ?>
					<div class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Update Data.
					</div>
				<?php } ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="productForm" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Product/formValidation">

				  <?php if(isset($selectEdit)) {  foreach($selectEdit->result_array() as $rowSingle) {?>
				  <div class="card-body">
                  <div class="form-group">
                    <label for="category">Category </label>
                    <select name="category" class="form-control" id="category">
						<option>Select Category</option>
						<?php if($categorySelect->num_rows()>0) {
							foreach($categorySelect->result_array() as $rowData){
								if($rowSingle==$rowData){
							?>
									<option value="<?= $rowData["categoryId"];?>" selected="selected"><?= $rowData["categoryName"];?></option>
							<?php } else {?>
								<option value="<?= $rowData["categoryId"];?>"><?= $rowData["categoryName"];?></option>
						<?php } } }else { ?>
							<option>Not Data Found</option>
						<?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="country">Subcategory </label>
                    <select name="subcategory" class="form-control" id="subcategory">
						<option>Select Subcategory</option>
                        <?php if($subcategorySelect->num_rows()>0) {
                        		foreach($subcategorySelect->result_array() as $rowSub){
        						if($rowSingle==$rowSub){
                        	?>
									<option value="<?php echo  $rowSub["subcategoryId"];?>" selected="selected"><?php echo  $rowSub["subcategoryName"];?></option>
						<?php } else {?>
                        <option value="<?php echo  $rowSub["subcategoryId"];?>"><?php echo  $rowSub["subcategoryName"];?></option>
						<?php }  } } else { ?>
                        <option>Not Found Data Subcategory</option>
						<?php } ?>
                    </select>
					  <span class="text-danger"><?= form_error('subcategory');?></span>
                  </div>
                  <div class="form-group">
                    <label for="productName">product Name </label>
                    <input type="text" value="<?= $rowSingle["productName"];?>" name="productName" class="form-control" id="productName" placeholder="Enter productName">
                 	<span class="text-danger"><?= form_error('productName');?></span>
                  </div>
                  <div class="form-group">
                    <label for="country">Product Image </label>
                    <input type="file" name="productFile" class="form-control" id="productFile">
					  <br>
					  <img src="<?= base_url();?>ProductImage/<?= $rowSingle["productImage"];?>" width="300px">
                  </div>
                  <div class="form-group">
                    <label for="productPrice">product Price </label>
                    <input type="text" name="productPrice" value="<?= $rowSingle["ProductPrice"];?>" class="form-control" id="productPrice" placeholder="Enter productPrice">
                 	<span class="text-danger"><?= form_error('productPrice');?></span>
                  </div>
                  <div class="form-group">
                    <label for="productDescription">product Description</label>
                    <input type="text" name="productDescription" class="form-control"  value="<?= $rowSingle["productDescription"];?>"id="productDescription" placeholder="Enter productDescription">
                 	<span class="text-danger"><?= form_error("productDescription");?></span>
                  </div>
                  <div class="form-group">
                    <label for="productDiscount">product Discount</label>
                    <input type="text" name="productDiscount" class="form-control"  value="<?= $rowSingle["productDiscount"];?>"id="productDiscount" placeholder="Enter productDiscount">
					  <span class="text-danger"><?= form_error("productDiscount");?></span>
                  </div>
					<div class="form-group">
                    <label for="Tag">product Tag</label>
                    <input type="text" name="Tag" class="form-control" id="Tag" value="<?= $rowSingle["productTag"];?>" placeholder="Enter Tag">
					  <span class="text-danger"><?= form_error("Tag");?></span>
                  </div>
                </div>

                <div class="card-footer">
					<input type="hidden" name="hidden" value="<?php echo $rowSingle["productId"];?>">
                  <button type="submit" class="btn btn-primary" id="productUpdate" name="productUpdate">Update</button>
                </div>
			<?php }  } else { ?>
					  <div class="card-body">
						  <div class="form-group">
							  <label for="category">Category </label>
							  <select name="category" class="form-control" id="category">
								  <?php if($categorySelect->num_rows()>0) {
									  foreach($categorySelect->result_array() as $rowData){
										  ?>
										  <option value="<?= $rowData["categoryId"];?>"><?= $rowData["categoryName"];?></option>
									  <?php } }else { ?>
									  <option>Not Data Found</option>
								  <?php } ?>
							  </select>
						  </div>
						  <div class="form-group">
							  <label for="country">Subcategory </label>
							  <select name="subcategory" class="form-control" id="subcategory">
								  <?php if($subcategorySelect->num_rows()>0) {
									  foreach($subcategorySelect->result_array() as $rowSub){
										  ?>
										  <option value="<?php echo  $rowSub["subcategoryId"];?>"><?php echo  $rowSub["subcategoryName"];?></option>
									  <?php }  } else { ?>
									  <option>Not Found Data Subcategory</option>
								  <?php } ?>
							  </select>
							  <span class="text-danger"><?= form_error('subcategory');?></span>
						  </div>
						  <div class="form-group">
							  <label for="productName">product Name </label>
							  <input type="text" name="productName" class="form-control" id="productName" placeholder="Enter productName">
							  <span class="text-danger"><?= form_error('productName');?></span>
						  </div>
						  <div class="form-group">
							  <label for="country">Product Image </label>
							  <input type="file" name="productFile" class="form-control" id="productFile">
						  </div>
						  <div class="form-group">
							  <label for="productPrice">product Price </label>
							  <input type="text" name="productPrice" class="form-control" id="productPrice" placeholder="Enter productPrice">
							  <span class="text-danger"><?= form_error('productPrice');?></span>
						  </div>
						  <div class="form-group">
							  <label for="productDescription">product Description</label>
							  <input type="text" name="productDescription" class="form-control" id="productDescription" placeholder="Enter productDescription">
							  <span class="text-danger"><?= form_error("productDescription");?></span>
						  </div>
						  <div class="form-group">
							  <label for="productDiscount">product Discount</label>
							  <input type="text" name="productDiscount" class="form-control" id="productDiscount" placeholder="Enter productDiscount">
							  <span class="text-danger"><?= form_error("productDiscount");?></span>
						  </div>
						  <div class="form-group">
							  <label for="Tag">product Tag</label>
							  <input type="text" name="Tag" class="form-control" id="Tag" placeholder="Enter Tag">
							  <span class="text-danger"><?= form_error("Tag");?></span>
						  </div>
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-primary" id="productInsert" name="productInsert">Submit</button>
					  </div>
				  <?php } ?>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

