<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url('Admin/assets/images/favicon.ico')}}">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{url('Admin/assets/plugins/morris/morris.css')}}">
        <link href="{{url('Admin/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{url('Admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="{{url('Admin/assets/js/modernizr.min.js')}}"></script>
    @yield('css')
    <body class="fixed-left">
   <div id="wrapper">
        @include('layouts.admin.navbar')
    @yield('content')

    @include('layouts.admin.footer')

        <script>
         var resizefunc = [];
        </script>
        <script src="{{url('Admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{url('Admin/assets/js/tether.min.js')}}"></script>
        <script src="{{url('Admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('Admin/assets/js/waves.js')}}"></script>
        <script src="{{url('Admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('Admin/assets/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{url('Admin/assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{url('Admin/assets/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{url('Admin/assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{url('Admin/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{url('Admin/assets/js/jquery.core.js')}}"></script>
        <script src="{{url('Admin/assets/js/jquery.app.js')}}"></script>
        <script src="{{url('Admin/assets/pages/jquery.dashboard.js')}}"></script>
        @yield('js')
      </body>
</html>