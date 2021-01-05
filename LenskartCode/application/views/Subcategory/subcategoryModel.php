  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo isset($subcategory)? $subcategory :""; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashpge">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Subcategory/subcategoryListing">SubCategory Listing</a></li>
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
				<?php
				if($this->uri->segment(2)== "insertMsgSub"){?>
					<div class="alert alert-info alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Category!</strong> Insert SuccessFully.
					</div>
				<?php } else  if($this->uri->segment(2)=="updateSubMsg"){ ?>
					<div class="alert alert-info alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Category!</strong> Update SuccessFully.
					</div>
				<?php } ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="subcategoryForm" method="post" action="<?php echo base_url();?>Subcategory/formValidation">
				  <?php if(isset($sub)){
				  	foreach($sub->result_array() as $rowSingle){
				  	?>
				  <div class="card-body">
                  
                  <div class="form-group">
                    <label for="category">SubCategory </label>
                    <input type="text" name="subcategory" value="<?= $rowSingle['subcategoryName']?>" class="form-control" id="subcategory" placeholder="Enter SubCategory">
                 	<span class="text-danger"><?php echo form_error('subcategory')?></span>
                  </div>

                  <div class="form-group">
                    <label for="category">Category </label>
                    <select name="category" class="form-control" id="category" >
						<option> Select Category</option>
                    <?php if($categorySelect->num_rows()>0) {
                    	foreach($categorySelect->result_array() as $row){
                    		if($$rowSingle==$row){
                    		?>
							<option value="<?= $row["categoryId"]?>" selected="selected"> <?= $row["categoryName"]?> </option>
						<?php } else {?>
								<option value="<?= $row["categoryId"]?>"> <?= $row["categoryName"]?> </option>

							<?php }  } }else {
                    	?>
						<option> Not Found Data </option>
						<?php
					}?>
                    </select>
					  <span class="text-danger"><?php echo form_error('category')?></span>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
							<input type="hidden" id="hiddenId" name="hiddenId" value="<?= $rowSingle['subcategoryId'];?>">
                  <button type="submit" class="btn btn-primary" id="subcategoryUpdate" name="subcategoryUpdate">Update</button>
                </div>
				  <?php }  } else { ?>
					  <div class="card-body">

						  <div class="form-group">
							  <label for="category">SubCategory </label>
							  <input type="text" name="subcategory" class="form-control" id="subcategory" placeholder="Enter SubCategory">
							  <span class="text-danger"><?php echo form_error('subcategory')?></span>
						  </div>

						  <div class="form-group">
							  <label for="category">Category </label>
							  <select name="category" class="form-control" id="category" >
								  <option> Select Category</option>
								  <?php if($categorySelect->num_rows()>0) {
									  foreach($categorySelect->result_array() as $row){
										  ?>
										  <option value="<?= $row["categoryId"]?>"> <?= $row["categoryName"]?> </option>
									  <?php }  }else {
									  ?>
									  <option> Not Found Data </option>
									  <?php
								  }?>
							  </select>
							  <span class="text-danger"><?php echo form_error('category')?></span>
						  </div>

					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-primary" id="subcategoryInsert" name="subcategoryInsert">Submit</button>
					  </div>
				  <?php }?>
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

