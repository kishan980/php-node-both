  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= isset($country)? $country :""; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashboad">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Country/countryListing">Country List</a></li>
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
            <div class="card card-success">
              <div class="card-header">
				  <?php
				  if($this->uri->segment(2) == "insertMsg"){

					  echo ' <div class="alert alert-primary alert-dismissible">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

						  <strong>successFully Insert Country</strong>

				  </div>';
				   }
				  ?>

              </div>

              <!-- /.card-header -->
              <!-- form start -->
				<form role="form" id="countryForm" method="post" action="<?php echo base_url();?>Country/formValidationCountry">
				 <?php
					if(isset($singleData))
					{
						foreach($singleData->result() as $row){
							?>


				<div class="card-body">
								<div class="form-group">
									<label for="country">Country Name</label>
									<input type="text" name="country" class="form-control" id="country" placeholder="Enter country" value="<?php echo $row->countryName;?>">
									<spna class="text-danger"><?= form_error('country');?></spna>
								</div>

							</div>
							<div class="card-footer">
								<input type="hidden" id="hidden" name="hidden" value="<?php echo $row->countryId;?>">
								<button type="submit" class="btn btn-primary" id="update" name="update">Update</button>
							</div>
				  <?php
						}
					}
					else{
				 ?>
					<div class="card-body">
                  <div class="form-group">
                    <label for="country">Country Name</label>
                    <input type="text" name="country" class="form-control" id="country" placeholder="Enter country">
					  <spna class="text-danger"><?= form_error('country');?></spna>
                  </div>
           
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="insert" name="insert">Submit</button>
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

