<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KWSPOST</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page login-page  layout-navbar-fixed">

<div class="wrapper">
    @include('layouts.customNav')

        <section class="content">
            <div class="container-fluid">
             @yield('content')
            </div>
        </section>
</div>



<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('/template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('/template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/template/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('/template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('/template/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('/template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('/template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/template/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/template/dist/js/pages/dashboard2.js') }}"></script>
</body>
</html>
