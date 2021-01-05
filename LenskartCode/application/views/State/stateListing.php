<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<?php
		if($this->uri->segment(2)=="deleteMsg"){
			echo '<div class="alert alert-info alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>State!</strong> Delete SuccessFully .
			</div>';
		}
		else if($this->uri->segment(2)=="updateMsg"){
			echo '<div class="alert alert-info alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>State!</strong><h6> Update SuccessFully </h6>.
			</div>';
		}
		?>
    <!-- Main content -->
    <section class="content">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url();?>State"><?= isset($stateListing)? $stateListing :""; ?></a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>StateID</th>
                  <th>Country</th>
                  <th>State</th>
                  <th>StateStatus</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
				<?php
					foreach($state->result_array() as $row)
					{?>
                <tr>
                  <td><?= $row['stateId'];?></td>
                  <td><?= $row['countryName'];?></td>
                  <td><?= $row['stateName'];?></td>
                  <td><?= $row['stateStatus'];?></td>
                  <td><a href="<?= base_url()?>State/deleteState/<?php echo $row['stateId']?>">Delete</a></td>
				 <td><a href="<?= base_url()?>State/editState/<?php echo $row['stateId']?>">Edit</a></td>
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
