<!DOCTYPE html>
<html lang="en" dir="">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard | Better Perposal</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{url('/')}}/dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
 <script src="{{url('/')}}/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>

</head>

<body class="text-left">

    <div class="app-admin-wrap layout-sidebar-large">

        @include('admin.Master.header')

        @include('admin.Master.sidebar')

        <div class="main-content-wrap sidenav-open d-flex flex-column">

            @yield('content')


            @include('admin.Master.footer')

        </div>

    </div>

    @include('admin.Master.searchui')





 <!-- ============ Search UI End ============= -->
 <script src="{{url('/')}}/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/scripts/script.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/plugins/echarts.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/scripts/echart.options.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/plugins/datatables.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/scripts/dashboard.v4.script.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/scripts/widgets-statistics.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/plugins/apexcharts.min.js"></script>
 <script src="{{url('/')}}/dist-assets/js/scripts/apexSparklineChart.script.min.js"></script>
</body>


</html>
