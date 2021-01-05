  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo isset($category)? $category :""; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashpge">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Category/categoryListing">Category Listing</a></li>
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
				<?php if($this->uri->segment(2)=="insertMsg"){ ?>
					<div class="alert alert-info alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Category!</strong> Insert SuccessFully.
					</div>
				<?php }else if($this->uri->segment(2)=="categoryUpdateMsg"){ ?>
					<div class="alert alert-info alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Category!</strong> Update SuccessFully.
					</div>
				<?php }?>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="categoryForm" method="post" action="<?php echo base_url();?>Category/formValidation">
              <?php if(isset($categorySingleRow)) {
              		foreach($categorySingleRow->result_array() as $row)
					{
              	?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Category </label>
                    <input type="text" name="category" class="form-control" id="category" placeholder="Enter Category" value="<?= $row["categoryName"]?>">
					  <spna class="text-danger"><?= form_error('category');?></spna>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
					  <input type="hidden" name="catId" class="form-control" id="catId" placeholder="Enter Category" value="<?= $row["categoryId"]?>">
                  <button type="submit" class="btn btn-primary" id="categoryUpdate" name="categoryUpdate">Submit</button>

				  <?php }  }else {?>
				  <div class="card-body">
					  <div class="form-group">
						  <label for="category">Category </label>
						  <input type="text" name="category" class="form-control" id="category" placeholder="Enter Category">
						  <spna class="text-danger"><?= form_error('category');?></spna>
					  </div>
				  </div>
				  <!-- /.card-body -->
				  <div class="card-footer">
					  <button type="submit" class="btn btn-primary" id="categoryInsert" name="categoryInsert">Submit</button>
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

