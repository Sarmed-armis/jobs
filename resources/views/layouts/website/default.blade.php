<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('website/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('website/css/icofont.css')}}">
    <link rel="stylesheet" href="{{url('website/css/slidr.css')}}">
    <link rel="stylesheet" href="{{url('website/css/main.css')}}">
    <link id="preset" rel="stylesheet" href="{{url('website/css/presets/preset1.css')}}">
    <link rel="stylesheet" href="{{url('website/css/responsive.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet'
          type='text/css'>
    <link rel="icon" href="{{url('website/images/ico/favicon.ico')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>
<body>
@include('layouts.website.navbar')

@yield('content')

@include('layouts.website.footer')
<script src="{{url('website/js/jquery.min.js')}}"></script>
<script src="{{url('website/js/bootstrap.min.js')}}"></script>
<script src="{{url('website/js/price-range.js')}}"></script>
<script src="{{url('website/js/main.js')}}"></script>
<script src="{{url('website/js/switcher.js')}}"></script>
@yield('js')
</body>
</html>

