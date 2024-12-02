<!DOCTYPE html>
<html>
<head>
  @include('backend.includes.assets.meta')
  
  <title>Library| @yield('title') </title>
  <!-- Tell the browser to be responsive to screen width -->
  @include('backend.includes.assets.styles')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('backend.includes.headerNav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('backend.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
   @yield('body')
  <!-- /.content-wrapper -->
  @inculde('backend.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('backend.includes.assets.scripts')
</body>
</html>
