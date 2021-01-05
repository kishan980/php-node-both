<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
	<?php if($this->uri->segment(2)=="deleteMsg"){ ?>
	<div class="alert alert-info alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>City!</strong> Delete SuccessFully.
	</div>
	<?php } ?>
    <section class="content">
    
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url();?>City"><?php echo isset($cityListing)? $cityListing : ""; ?></a></h3>
        
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CityID</th>
                  <th>Country</th>
                  <th>State</th>
                  <th>City</th>
                  <th>CityStatus</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
				<?php
				foreach($selectCity->result_array() as $row){
				?>
                <tr>
                  <td><?= $row["cityId"];?></td>
                  <td><?= $row["countryName"];?></td>
                  <td><?= $row["stateName"];?></td>
                  <td><?= $row["cityName"];?></td>
                  <td><?= $row["cityStatus"];?></td>
					<td><a href="<?= base_url();?>City/deleteCity/<?= $row["cityId"];?>">Delete</a></td>
					<td><a href="<?= base_url()?>City/editCity/<?= $row["cityId"];?>">Edit</a></td>
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
