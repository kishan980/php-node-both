 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io/">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>AssetsAdmin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>AssetsAdmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url();?>AssetsAdmin/plugins/datatables/jquery.dataTables.js"></script>

<script src="<?php echo base_url();?>AssetsAdmin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- AdminLTE -->
<script src="<?php echo base_url();?>AssetsAdmin/dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url();?>AssetsAdmin/plugins/chart.js/Chart.min.js"></script>

<script src="<?php echo base_url();?>AssetsAdmin/dist/js/demo.js"></script>

<script src="<?php echo base_url();?>AssetsAdmin/dist/js/pages/dashboard3.js"></script>

<!-- jquery-validation -->
<script src="<?php echo base_url()?>AssetsAdmin/plugins/jquery-validation/jquery.validate.min.js"></script>

<script src="<?php echo base_url()?>AssetsAdmin/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->

<!--<script type="text/javascript">-->
<!--$(document).ready(function () {-->
<!--  $.validator.setDefaults({-->
<!--    submitHandler: function () {-->
<!--      alert( "Form successful submitted!" );-->
<!--    }-->
<!--  });-->
<!--  $('#countryForm').validate({-->
<!--    rules: {-->
<!--      country: {-->
<!--        required: true,-->
<!--        country: true,-->
<!--      }-->
<!--    },-->
<!--    messages: {-->
<!--      country: {-->
<!--        required: "Please enter a Country ",-->
<!--        country: "Please enter a vaild Country",-->
<!--      }-->
<!---->
<!--    },-->
<!--    errorElement: 'span',-->
<!--    errorPlacement: function (error, element) {-->
<!--      error.addClass('invalid-feedback');-->
<!--      element.closest('.form-group').append(error);-->
<!--    },-->
<!--    highlight: function (element, errorClass, validClass) {-->
<!--      $(element).addClass('is-invalid');-->
<!--    },-->
<!--    unhighlight: function (element, errorClass, validClass) {-->
<!--      $(element).removeClass('is-invalid');-->
<!--    }-->
<!--  });-->
<!--});-->
<!--</script> -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:24:51 GMT -->
</html>
