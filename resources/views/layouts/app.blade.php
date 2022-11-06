<!DOCTYPE html>
<!--
* CoreUI Pro - Bootstrap Admin Template
* @version v2.1.14
* @link https://coreui.io/pro/
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Rekam Medis</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <link href="{{asset('assets/coreui/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('assets/coreui/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    @include('layouts.header')
    
    <div class="app-body">

      @include('layouts.sideMenu')

      <main class="main">

        @yield('content')

      </main>

    </div>

    @include('layouts.footer')
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('assets/coreui/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/@coreui/coreui-pro/dist/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('assets/coreui/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script src="{{asset('assets/coreui/js/main.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      @foreach ($errors->all() as $error)
        swal("Gagal!", "{{$error}}", "error");
      @endforeach
    </script>
  </body>
</html>
