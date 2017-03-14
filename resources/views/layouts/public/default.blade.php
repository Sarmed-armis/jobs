<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/icofont.css')}}">
    <link rel="stylesheet" href="{{url('public/css/slidr.css')}}">
    <link rel="stylesheet" href="{{url('public/css/main.css')}}">
    <link id="preset" rel="stylesheet" href="{{url('public/css/presets/preset1.css')}}">
    <link rel="stylesheet" href="{{url('public/css/responsive.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet'
          type='text/css'>
    <link rel="icon" href="{{url('public/images/ico/favicon.ico')}}">
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
<script src="{{url('public/js/jquery.min.js')}}"></script>
<script src="{{url('public/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/js/price-range.js')}}"></script>
<script src="{{url('public/js/main.js')}}"></script>
<script src="{{url('public/js/switcher.js')}}"></script>
@yield('js')
</body>
</html>

