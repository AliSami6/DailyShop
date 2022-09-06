<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- Google Font: Source Sans Pro -->

  <!-- toastrr css -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- DataTables -->
  <link href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
  <!-- Theme style -->
  <link href="{{asset('backend/dist/css/adminlte.min.css')}}" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
  <!-- overlayScrollbars -->
  <link href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" rel="stylesheet">
  <!-- Daterange picker -->
  <link href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- summernote -->
  <link href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- toastrr css -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
     <!-- toastr css and bootstrap -->
   <style>
      .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
      .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        /* background-color: #484848 !important; */
        background-image: radial-gradient(circle at 0 2%, #25395a, #484848 124%);
      }

      .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active:hover,
      .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active:hover {
        margin-left: 0px !important;
      }

      .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link:hover,
      .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link:hover {
        margin-left: 10px !important;
        transition: 0.4s !important;
      }

      [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link:hover {
        margin-left: 10px !important;
        transition: 0.4s !important;
      }

      [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
        margin-left: 0px !important;
        transition: 0s !important;
      }

      .main-sidebar {
        background: #200258 !important;
        color: #f6f6f6 !important;
        background-image: radial-gradient(circle at 0 2%, #25395a, #162031 124%);
        background: linear-gradient(355deg, #2a3f54 -4%, #162031, #162031, #162031 66%) !important;
      }
      label {
        color: #555 !important
      }


      .card-body {
        border: 0px !important
      }
      .page-item.active .page-link {
        background-color: #343434 !important;
        border-color: #343434 !important;
      }
      .page-item.active .page-link a:focus {
        border: none !important;
      }
      input {
        border-radius: 3px !important;
        border: 1px solid #162031 !important;
        height: 40px !important;
      }
      a{
        text-decoration: none
      }
      button{
        padding: 0; background: none; color:white;border:0
        }
    </style>
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
