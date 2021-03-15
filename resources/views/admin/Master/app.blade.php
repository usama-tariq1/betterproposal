<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Panel
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{asset('/admin-assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin-assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('/admin-assets/demo/demo.css')}}" rel="stylesheet" />
    <script src="{{asset('/admin-assets/js/core/jquery.min.js')}}"></script>

</head>
<body class="user-profile">
<div class="wrapper ">
    @include('admin.Master.partials.header')
    <div class="main-panel" id="main-panel">
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">

            @include('admin.Master.partials.sidebar')

            @yield('heading')
            @yield('content')
        </div>
    </div>
</div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('/admin-assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('/admin-assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('/admin-assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('/admin-assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('/admin-assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('/admin-assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('/admin-assets/demo/demo.js')}}"></script>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
</body>

</html>
