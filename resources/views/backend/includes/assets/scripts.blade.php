<!-- jQuery -->
<script src="{{ asset('/') }}backend/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/') }}backend/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('/') }}backend/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('/') }}backend/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('/') }}backend/assets/plugins/toastr/toastr.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('/') }}backend/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('/') }}backend/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('/') }}backend/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('/') }}backend/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/') }}backend/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('/') }}backend/assets/plugins/moment/moment.min.js"></script>
<script src="{{ asset('/') }}backend/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/') }}backend/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('/') }}backend/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/') }}backend/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}backend/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/') }}backend/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/') }}backend/assets/dist/js/demo.js"></script>

<script type="text/javascript">
// $(document).ready(function () {
//   bsCustomFileInput.init();
// });

$(document).ready(function() {
    $('.select2').select2();
});
</script>

@stack('script')
