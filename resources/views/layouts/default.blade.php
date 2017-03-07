<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>
    <body>
     <!-- header -->
	 <div id="content-wrapper" class="clearfix">
	  <header id="header" class="clearfix">
	    @include('includes.navbar')
	  </header><!-- header -->
		    @yield('content')
        
	  <footer id="footer" class="clearfix">
	    @include('includes.footer')
	  </footer><!-- footer -->
	  </div>  
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/price-range.js"></script>   
    <script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
	@yield('js')
    </div>	
    </body>
	  