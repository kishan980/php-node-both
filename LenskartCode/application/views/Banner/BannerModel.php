  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo isset($banner)? $banner :""; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashpge">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Banner/bannerListing">Banner Listing</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<?php if($this->uri->segment(2)=="bannerMsg") { ?>
	  <div class="alert alert-success alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Banner!</strong> Insert successful .
	  </div>
	  <?php } else if($this->uri->segment(2)=="updateMsg") { ?>
		<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Banner!</strong> Updated successful .
		</div>
	  <?php } ?>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="bannerForm"  method="post" action="<?php echo base_url();?>Banner/formValidation" enctype="multipart/form-data">
				  <?php  if(isset($editRow)) {
				  	foreach($editRow->result_array() as $rowEditSingle)
				  	?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="country">Banner </label>
                    <input type="file" name="bannerFile" class="form-control" id="bannerFile" placeholder="Select bannerFile">
<!--					  <span class="text-danger">--><?php //echo form_error("bannerFile");?><!--</span>-->
					  <br>
					  <img src="<?php echo base_url();?>/upload/<?php echo $rowEditSingle['bannerImage'];?>" width="100px">
                  </div>

                   <div class="form-group">
                    <label for="country">Banner Name </label>
                    <input type="text" name="bannerName" class="form-control" id="bannerName" placeholder="Enter Banner Name" value="<?php echo $rowEditSingle['bannerName']?>">
                  	<span class="text-danger"><?php echo form_error("bannerName");?></span>
				   </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
						  <input type="hidden" name="hiddenId" value="<?php echo $rowEditSingle['bannerId']?>">
                  <button type="submit" class="btn btn-primary" id="bannerUpdate" name="bannerUpdate">Submit</button>
                </div>
				<?php }  else { ?>

					  <div class="card-body">
						  <div class="form-group">
							  <label for="country">Banner </label>
							  <input type="file" name="bannerFile" class="form-control" id="bannerFile" placeholder="Select bannerFile">
							  <!--					  <span class="text-danger">--><?php //echo form_error("bannerFile");?><!--</span>-->
						  </div>

						  <div class="form-group">
							  <label for="country">Banner Name </label>
							  <input type="text" name="bannerName" class="form-control" id="bannerName" placeholder="Enter Banner Name">
							  <span class="text-danger"><?php echo form_error("bannerName");?></span>
						  </div>
					  </div>
					  <!-- /.card-body -->
					  <div class="card-footer">
						  <button type="submit" class="btn btn-primary" id="bannerInsert" name="bannerInsert">Submit</button>
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

