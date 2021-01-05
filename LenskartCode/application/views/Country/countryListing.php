<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- Main content -->
    <section class="content">
    
          <!-- /.card -->
          <div class="card">
			    <?php
				  if($this->uri->segment(2)=="delMsg"){
						echo '<div class="alert alert-danger alert-dismissible">
				  			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Delete Country successfully....</strong>
								</div>';
				  }else if($this->uri->segment(2)=="updateMsg"){
					  echo '<div class="alert alert-danger alert-dismissible">
				  			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Update Country successfully.....</strong>
								</div>';
				  }
				  ?>
			  </div>

            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url();?>Country"><?= isset($countryListing)? $countryListing: ""; ?></a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CountryID</th>
                  <th>Country</th>
                  <th>CountryStatus</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
				<?php
					foreach($countrySelect->result() as $row)  { ?>
                <tr>
                  <td><?= $row->countryId;?></td>
                  <td><?= $row->countryName;?></td>
                  <td><?= $row->countryStatus;?></td>
					<td><a href="<?php echo base_url();?>Country/deleteForm/<?= $row->countryId;?>">Delete</a></td>
                  <td><a href="<?php echo base_url();?>Country/editForm/<?= $row->countryId;?>">Edit</a></td>
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
