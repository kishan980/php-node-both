<script src="../Asstes_admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Asstes_admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../Asstes_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="../Asstes_admin/plugins/datatables/jquery.dataTables.js"></script>

<script src="../Asstes_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- ChartJS -->
<script src="../Asstes_admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../Asstes_admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../Asstes_admin/plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="../Asstes_admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../Asstes_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../Asstes_admin/plugins/moment/moment.min.js"></script>

<script src="../Asstes_admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../Asstes_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../Asstes_admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../Asstes_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../Asstes_admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../Asstes_admin/dist/js/pages/dashboard.js"></script> -->

<script src="../Asstes_admin/plugins/jquery-validation/jquery.validate.min.js"></script>

<script src="../Asstes_admin/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="../Asstes_admin/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->


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
<script src="../Asstes_admin/dist/js/demo.js"></script>