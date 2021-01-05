  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo isset($state)? $state :""; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashpge">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>State/stateListing">State Listing</a></li>
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
                <h3 class="card-title">
				</h3>
              </div>
				<?php
				if($this->uri->segment(2)=="insertedStateMsg"){
					echo '<div class="alert alert-primary alert-dismissible"> 
					 	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>successFully Insert State</strong>
				  		</div>';
				}
				?>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="stateForm" method="post" action="<?= base_url()?>State/formValidationState">
				  <?php
					if(isset($selectRow))
					{
						foreach($selectRow->result() as $rowSingle){
							?>
							<div class="card-body">
								<div class="form-group">
									<label for="countryName">Country </label>
									<select name="countryName" class="form-control" id="countryName">
										<option>Select Country</option>
										<?php if($countrySelect->num_rows()>0) {

											foreach($countrySelect->result() as $row)
											{
												if($rowSingle==$row) { ?>
												<option
													value="<?php echo $row->countryId; ?>" selected="selected"><?php echo $row->countryName; ?></option>
												<?php
												} else{
													?>
													<option
														value="<?php echo $row->countryId; ?>"><?php echo $row->countryName; ?></option>
													<?php
												}
											}
										} else { ?>
											<option>Not Fount Country</option>
											<?php
										}	?>
									</select>
									<span class="text-danger"><?= form_error('countryName');?></span>
								</div>
								<div class="form-group">
									<label for="country">State </label>
									<input type="text" name="stateName" class="form-control" id="stateName" placeholder="Enter state" value="<?= $rowSingle->stateName;?>">
									<span class="text-danger"><?= form_error('stateName');?></span>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<input type="hidden" name="stId" id="stId" value="<?= $rowSingle->stateId;?>">
								<button type="submit" class="btn btn-primary" id="stateUpdate" name="stateUpdate">Update</button>
							</div>
				  <?php
						}
					}else {
						?>
						<div class="card-body">
							<div class="form-group">
								<label for="countryName">Country </label>
								<select name="countryName" class="form-control" id="countryName">
									<option>Select Country</option>
									<?php if($countrySelect->num_rows()>0) {

										foreach($countrySelect->result() as $row)
										{ ?>
											<option value="<?php echo $row->countryId;?>"><?php echo $row->countryName;?></option>
											<?php
										}
									} else { ?>
										<option>Not Fount Country</option>
										<?php
									}	?>
								</select>
								<span class="text-danger"><?= form_error('countryName');?></span>
							</div>
							<div class="form-group">
								<label for="country">State </label>
								<input type="text" name="stateName" class="form-control" id="stateName" placeholder="Enter state">
								<span class="text-danger"><?= form_error('stateName');?></span>
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-primary" id="stateInsert" name="stateInsert">Submit</button>
						</div>
				  <?php

					}
				  ?>

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

