@extends('layouts.default')
@section('content')
<section class="job-bg page job-details-page">
		<div class="container">
	<div class="banner-job">
		<div class="banner-overlay"></div>
		<div class="container text-center">
			<h1 class="title">The Easiest Way to Get Your New Job</h1>
			<h3>We offer 12000 jobs vacation right now</h3>
			<div class="banner-form">
				<form action="#">
					<input type="text" class="form-control" placeholder="Type your key word">
					<div class="dropdown category-dropdown">						
						<a data-toggle="dropdown" href="#"><span class="change-text">Job Location</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu category-change">
							<li><a href="#">Location 1</a></li>
							<li><a href="#">Location 2</a></li>
							<li><a href="#">Location 3</a></li>
						</ul>								
					</div><!-- category-change -->
					<button type="submit" class="btn btn-primary" value="Search">Search</button>
				</form>
			</div><!-- banner-form -->
			
			<ul class="banner-socail list-inline">
				<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
			</ul><!-- banner-socail -->
		</div><!-- container -->
	</div><!-- banner-section -->

	<div class="page">
		<div class="container">
	     			<div class="section category-items job-category-items  text-center">
				<ul class="category-list">	
							</div><!-- item-info -->
							<div class="row">
                            <div class="col-md-6 col-md-offset-3"><h3>Your application has been successfully submitted</h3></div>
                            </div>
						</div><!-- ad-item -->	
		</div><!-- conainer -->
	</div><!-- page -->
 @stop