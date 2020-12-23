<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buku Tamu</title>
  <link rel="icon" type="image/png" href="{{url('images/icons/favicon.ico')}}" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="{{url('assets/plugins/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="{{url('assets/plugins/jqvmap/jqvmap.min.css')}}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('assets/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include('layouts.header')

    @include('layouts.sidebar')

    <div class="content-wrapper">
      @yield('content')
    </div>

    @include('layouts.footer')
  </div>
  <!-- ./wrapper -->
  <script src="https://code.jquery.com/jquery-1.12.0.min.js" integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{url('assets/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{url('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{url('assets/plugins/moment/moment.min.js')}}"></script>
  <script src="{{url('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{url('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('assets/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{url('assets/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('assets/dist/js/demo.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
    @if(Session::has('sukses'))
    toastr.success("{{Session::get('sukses')}}", "Sukses")
    @elseif(Session::has('update'))
    toastr.success("{{Session::get('update')}}", "Update")
    @elseif(Session::has('eror'))
    toastr.warning("{{Session::get('eror')}}", "Data NIK Sama")
    @elseif(Session::has('delete'))
    toastr.error("{{Session::get('delete')}}", "Sukses")
    @endif
  </script>
  @yield('buatjs')

</body>

</html>