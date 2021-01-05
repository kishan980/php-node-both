<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<?php if($this->uri->segment(2)=="bannerMsgDelete") { ?>
		<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Banner!</strong> Delete a successful.
		</div>
	<?php } ?>
    <!-- Main content -->
    <section class="content">
    
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo base_url();?>Banner"><?php echo isset($bannerListing)? $bannerListing : ""; ?></a></h3><br>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>BannerID</th>
                  <th>BannerName</th>
                  <th>BannerImage</th>
                  <th>BannerStatus</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
				<?php
//				if(isset($selectImage)){
				foreach($selectImage->result() as $row) {?>
                <tr>
                  <td><?= $row->bannerId;?></td>
                  <td><?= $row->bannerName;?></td>
                  <td><img src="<?= base_url();?>upload/<?= $row->bannerImage;?>" width="60"></td>
				  <td><a href="<?= base_url();?>Banner/StatusBanner<?= $row->bannerId;?>"><?= $row->bannerStatus;?></a></td>
				  <td><a href="<?= base_url();0?>Banner/deleteBanner/<?= $row->bannerId;?>">Delete</a></td>
				  <td><a href="<?= base_url();0?>Banner/editBanner/<?= $row->bannerId;?>">Edit</a></td>
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
