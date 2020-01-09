<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Gen</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Datatable -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- vuetify -->
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="assets/custom.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wapper" id="app">
    <nav-bar v-if="canIncludeNav()"> </nav-bar>
	  <side-bar v-if="canIncludeSideBar()"> </side-bar>       
    <router-view> </router-view>
  </div>
  <!-- REQUIRED SCRIPTS -->
  <!-- Vue js -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  {{-- <!-- Tempusdominus Bootstrap 4 -->
  <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> --}}
  <!-- DataTables -->
  <script src="assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    // $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="assets/dist/js/demo.js"></script>
  <script src="assets/js/admin.js"></script>
  {{-- <script src="assets/dist/js/pages/dashboard.js"></script> --}}
  
</body>
</html>
