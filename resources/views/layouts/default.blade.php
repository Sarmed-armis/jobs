    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('css/icofont.css')}}"> 
    <link rel="stylesheet" href="{{url('css/slidr.css')}}">     
    <link rel="stylesheet" href="{{url('css/main.css')}}">  
	<link id="preset" rel="stylesheet" href="{{url('css/presets/preset1.css')}}">	
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="{{url('images/ico/favicon.ico;)}}">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    </head>
    <body>
      @include('navbar.blade.php')

      @yield('content')

      @include('footer.blade.php')
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/price-range.js')}}"></script>   
    <script src="{{url('js/main.js')}}"></script>
	<script src="{{url('js/switcher.js')}}"></script>
    @yeild('js')   
    </body>
    <html>


