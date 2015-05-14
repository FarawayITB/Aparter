<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Aparter - Pemkot Bandung</title>
		<!-- Bootstrap -->
		<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
		{{-- <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet"> --}}
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		 <!--[if lt IE 9]>
		     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--  webfonts  -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<!-- // webfonts  -->
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
		{{-- <link href="css/loginStyle.css" rel='stylesheet' type='text/css' /> --}}
		{{-- <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" /> --}}
		<!-- start plugins -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		{{-- // <script src="{{ asset('/js/bootstrap.js') }}"></script> --}}
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/jenis_pendaftaran.js') }}"></script>
		<script src="{{ asset('/js/hoverakun.js') }}"></script>
		<script src="{{ asset('/js/dropdownselect.js') }}"></script>
		<script src="{{ asset('/js/progress.js') }}"></script>
		<script src="{{ asset('/js/maps.js') }}"></script>
		<script src="{{ asset('/js/login.js') }}"></script>
		<script src="{{ asset('/js/logout.js') }}"></script>
		<script src="{{ asset('/js/checklogin.js') }}"></script>
		{{-- // <script src="{{ asset('/js/getLatLng.js') }}"></script> --}}
		<script src="https://maps.googleapis.com/maps/api/js?&libraries=places"></script>
	</head>

	<body>
		<div class="header_bg"><!-- start header -->
			<div class="container">
				<div class="row header">
				<nav class="navbar" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }}" alt="" class="img-responsive"/> </a>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="menu nav navbar-nav">
				        <li><a href="{{ url('/parkir') }}"> Parkir</a></li>
				        <li><a href="{{ url('/terminal') }}">Terminal</a></li>
				        <li><a href="{{ url('/tentang') }}">Tentang</a></li>
				        <li class="dropdown"> 
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Aksi <b class="caret"></b> 
							</a> 
							<ul class="dropdown-menu"> 
								<li><a href="{{ url('/user/pembayaran') }}">Pembayaran</a></li> 
								<li><a href="{{ url('/notifikasi') }}">Pemberitahuan</a></li> 
								<li><a href="{{ url('/parkir/daftar') }}">Pendaftaran</a></li> 
								<li><a href="{{ url('/user/lahan') }}">Lahan</a></li> 
								<li><a href="{{ url('/user/progress') }}">Progress</a></li>
								<li id="logoutLink"><a href="javascript:;">Logout</a></li>
							</ul> 
						</li> 
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				</div>
				<div class="row slider text-center">
					<div class="col-md-5">
						<div class="col-md-10 slider_text">
							<h3>Cari Lahan Parkirmu di sini</h3>
							<form class="navbar-form navbar-right" role="search" action="{{ url('/parkir/cari') }}">
						        <div class="form-group my_search">
						        	<input type="text" class="form-control" id="searchbox" name="searchbox" placeholder="Parkiran di Kecamatan">
						        </div>
						        <button type="submit" class="btn btn-default">Search</button>
					      	</form>
						</div>
					</div>
					<div class="col-md-2">
					</div>
					<div class="col-md-5">
						<div class="slider_img">
							<img src="{{ asset('/images/pic1.png') }}" alt="" class="img-responsive"/>
						</div>
					</div>
				</div>
			</div>
		</div>

	@yield('content')
	
	<div class="footer_bg"><!-- start footre -->
	<div class="container">
		<div class="row  footer">
			<div class="col-md-3 span1_of_4">
				<h4>Tentang Kami</h4>
				<p>PT. FarAway Indonesia</p>
				<h5>Address</h5>
				<p class="top">Jl. Paskal 123</p>
				<p>40172 Bandung,</p>
				<p>Jawa Barat, Indonesia</p>
				<p>Phone:(+022) 726-5-912</p>
				<p>Fax: (022) 726-4-912</p>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>Update Fitur</h4>
				<span><a href="javascript:;">Progress Bar Status Pendaftaran</a></span>
				<p>25 april 2014</p>
				<span><a href="javascript:;">Update Menu Pendaftaran</a></span>
				<p>15 march 2014</p>
				<span><a href="javascript:;">Single Sign In</a></span>
				<p>25 april 2014</p>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>Kata Masyarakat</h4>
				<p>Donny Subagja say: </p>
				<span><a href="javascript:;">Membantu Sekali! Good App!</a></span>
				<p>Susanto Lie say: </p>
				<span><a href="javascript:;">Keren banget!</a></span>
				<p>Suryani say: </p>
				<span><a href="javascript:;">Maju terus pantang Mundur</a></span>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>photostream</h4>
				<ul class="f_nav list-unstyled">
					<li><a href="#"><img src="{{ asset('/images/f_pic1.jpg') }}" alt="" class="img-responsive"/></a></li>
					<li><a href="#"><img src="{{ asset('/images/f_pic3.jpg') }}" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="{{ asset('/images/f_pic4.jpg') }}" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="{{ asset('/images/f_pic7.jpg') }}" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="{{ asset('/images/f_pic1.jpg') }}" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="{{ asset('/images/f_pic6.jpg') }}" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="{{ asset('/images/f_pic8.jpg') }}" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="{{ asset('/images/f_pic2.jpg') }}" alt="" class="img-responsive"/> </a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts </a></span></p>
			</div>
		</div>
	</div>
</div>
	</body>

</html>