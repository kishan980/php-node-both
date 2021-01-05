  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo isset($city)? $city :""; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Dashpge">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>City/cityListing">City Listing</a></li>
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
			  </div>
				<?php if($this->uri->segment(2)=="cityMsg") { ?>
					<div class="alert alert-info alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>City!</strong> Insert SuccessFully.
				</div>
				<?php } else if($this->uri->segment(2)=="updateMsg"){ ?>
					<div class="alert alert-info alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>City!</strong> Update SuccessFully.
					</div>
				<?php }?>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="cityForm" method="post" action="<?php echo base_url();?>City/formValidation">
              <?php
					if(isset($editCity)){

						foreach($editCity->result_array() as $singleRow){
							?>
							<div class="card-body">
								<div class="form-group">
									<label for="countryName">Country </label>
									<select name="countryName" class="form-control" id="countryName">
										<option>Select Country</option>
										<?php if($selectCountry->num_rows()>0){
											foreach($selectCountry->result_array() as $row)
											{ if($singleRow==$row) {?>
												<option value="<?= $row['countryId'];?>" selected="selected"><?= $row['countryName'];?></option>
												<?php } else {?>
												<option value="<?= $row['countryId'];?>"><?= $row['countryName'];?></option>
												<?php } ?>
											<?php } } else {?>
											<option>Not Found Country</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="country">State </label>
									<select name="stateName" class="form-control" id="stateName">
										<?php
										if($selectState->num_rows()>0){
											foreach($selectState->result_array() as $row){
												if($singleRow == $row){
												?>
												<option value="<?= $row['stateId']?>" selected="selected"><?= $row['stateName']?></option>
										<?php } else {?>
													<option value="<?= $row['stateId']?>"><?= $row['stateName']?></option>
												<?php
											}  }  } else{
											?>
											<option>Not Found Data</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="country">State </label>
									<input type="text" name="cityName" class="form-control" id="cityName" placeholder="Enter City" value="<?= $singleRow["cityName"];?>">
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<input type="hidden" name="id" id="id" value="<?= $singleRow["cityId"];?>">
								<button type="submit" class="btn btn-primary" id="cityUpdate" name="cityUpdate">Update</button>
							</div>
				  <?php
						}
					}else{
						?>
						<div class="card-body">
							<div class="form-group">
								<label for="countryName">Country </label>
								<select name="countryName" class="form-control" id="countryName">
									<option>Select Country</option>
									<?php if($selectCountry->num_rows()>0){
										foreach($selectCountry->result_array() as $row)
										{ ?>
											<option value="<?= $row['countryId'];?>"><?= $row['countryName'];?></option>
										<?php } }else {?>
										<option>Not Found Country</option>
									<?php } ?>
								</select>
								<span class="text-danger"><?php echo form_error('countryName')?></span>
							</div>
							<div class="form-group">
								<label for="country">State </label>
								<select name="stateName" class="form-control" id="stateName">
									<option>Select State</option>
									<?php
									if($selectState->num_rows()>0){
										foreach($selectState->result_array() as $row){
											?>
											<option value="<?= $row['stateId']?>"><?= $row['stateName']?></option>
											<?php
										}  } else{
										?>
										<option>Not Found Data</option>
									<?php } ?>
								</select>
								<span class="text-danger"><?php echo form_error('stateName')?></span>
							</div>
							<div class="form-group">
								<label for="country">State </label>
								<input type="text" name="cityName" class="form-control" id="cityName" placeholder="Enter City">
							</div>
							<span class="text-danger"><?php echo form_error('cityName')?></span>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-primary" id="cityInsert" name="cityInsert">Submit</button>
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

