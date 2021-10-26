<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ForSaleByWeb.com</title>
  	<link rel="stylesheet" href="{{ URL::to('/') }}/css/bootstrap.css" type="text/css">
  	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/custom_frontend.css">

  	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  	<script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

	<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-white">
  	<div class="row d-flex h-100">
  		<div class="col-2 justify-content-center align-self-center">
  			<button class="navbar-toggler float-left" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="fa fa-bars" style="color:#000;"></i>
				</span>
			</button>
  		</div>
  		<div class="col-10">
  			<a class="navbar-brand" href="/">
				<img src="/images/logo.webp" alt="" class="logo">
			</a>
  		</div>
  	</div>

	<div class="collapse navbar-collapse" id="navbarCollapse">
		<i class="fa fa-times close_menu_icon d-sm-block d-md-block d-lg-none" onclick="hide_mobile_menu();"></i>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{ URL::to('/') }}">Search</a>
			</li>
			<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/buy') }}">Buy</a>
			</li>
			<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/sell') }}">Sell</a>
			</li>
			<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/find-agent') }}">Find Agent</a>
			</li>
			<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/why-12-days') }}">Why 12 Days?</a>
			</li>
			<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
			<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Learn More
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="{{ URL::to('/faqs') }}">FAQs</a>
		          <a class="dropdown-item" href="{{ URL::to('/articles-knowledge') }}">Articles/Knowledge</a>
		          <a class="dropdown-item" href="{{ URL::to('/our-secret') }}">Our Secret</a>
		          <a class="dropdown-item" href="{{ URL::to('/about-us') }}">About Us</a>
		          <a class="dropdown-item" href="{{ URL::to('/agent-partners') }}">Agent Partners</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="{{ URL::to('/login') }}">Client Portal</a>
		        </div>
      		</li>
      		<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
			<li class="nav-item d-sm-block d-lg-none">
				<a class="nav-link" href="{{ URL::to('/login') }}">Sign In</a>
			</li>
			<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
			<li class="nav-item d-sm-block d-lg-none">
				<a class="nav-link" href="{{ URL::to('/registration') }}">Create Account</a>
			</li>
      		<div class="dropdown-divider mr-5 d-sm-block d-lg-none"></div>
      		<li class="nav-item d-none d-lg-block">
				<a class="nav-link" href="#">|</a>
			</li>
			<li class="nav-item dropdown d-none d-lg-block">
		        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fa fa-user"></i>
		        </a>
		        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="{{ URL::to('/login') }}">Sign In</a>
		          <a class="dropdown-item" href="{{ URL::to('/registration') }}">Create Account</a>
		        </div>
      		</li>
		</ul>
	  </div>
    </nav>
