<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('Public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('Public/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('Public/css/icofont.css')}}">
    <link rel="stylesheet" href="{{url('Public/css/slidr.css')}}">
    <link rel="stylesheet" href="{{url('Public/css/main.css')}}">
    <link id="preset" rel="stylesheet" href="{{url('Public/css/presets/preset1.css')}}">
    <link rel="stylesheet" href="{{url('Public/css/responsive.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet'
          type='text/css'>
    <link rel="icon" href="{{url('Public/images/ico/favicon.ico')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>
<body>
@include('layouts.public.navbar')

@yield('content')

@include('layouts.public.footer')
<script src="{{url('Public/js/jquery.min.js')}}"></script>
<script src="{{url('Public/js/bootstrap.min.js')}}"></script>
<script src="{{url('Public/js/price-range.js')}}"></script>
<script src="{{url('Public/js/main.js')}}"></script>
<script src="{{url('Public/js/switcher.js')}}"></script>
@yield('js')
</body>
</html>

