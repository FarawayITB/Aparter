
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
		<!-- start plugins -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		{{-- // <script src="{{ asset('/js/bootstrap.js') }}"></script> --}}
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/jenis_pendaftaran.js') }}"></script>
		<script src="{{ asset('/js/hoverakun.js') }}"></script>
		<script src="{{ asset('/js/dropdownselect.js') }}"></script>
		<script src="{{ asset('/js/maps.js') }}"></script>
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
				      <a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{ asset('/images/logo.png') }}" alt="" class="img-responsive"/> </a>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="menu nav navbar-nav">
				        <li><a href="{{ url('/admin/parkir') }}">Lihat Notif</a></li>
				        <li><a href="{{ url('/admin/addlahan') }}">List Pembayaran</a></li>
				      </ul>
				      <h4 class="text-right">Selamat datang, {{"Admin"}}</h4>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				</div>
		<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">features</li>
		</ol>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-5">
		</div>
		<div class="col-xs-3">
			<div class="page-header"> 
				<h1>Pemberitahuan</h1> 
			</div>
		</div>
		<div class="col-xs-4">
		</div>
	</div>
		
	<div class="col-xs-16">
		<table class="table table-condensed">
			<thead>
				<tr style="font-size:16px">
					<th>No. Pembayaran</th>
					<th>No. KTP</th>
					<th>Pembayaran Terakhir</th>
				</tr>
			</thead>
			
			<tbody>
			@foreach ($pembayaran as $p)
					<tr style="font-size:14px">
						<td><a href="javascript:;" data-toggle="modal" data-target="#myModal{{$p->id_pembayaran}}">{{$p->id_pembayaran}}</a></td>
						<td>{{$p->id_pemilik}}</td>
						<td>{{$p->pembayaran_terakhir}}</td>
						<!-- Modal --> 
						<div class="modal fade" id="myModal{{$p->id_pembayaran}}" tabindex="-1" role="dialog" aria-labelledby="notifLabel" aria-hidden="true"> 
							<div class="modal-dialog"> 
								<div class="modal-content"> 
									<div class="modal-header"> 
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
										<h4 class="modal-title" id="notifLabel"> bukti pembayaran </h4> 
									</div> 
									<div class="modal-body">
										<img src="{{url('../storage/pembayaran/coba.png')}}" alt="Generic placeholder thumbnail">
									</div> 
									<div class="modal-footer"> 
										<button type="button" class="btn btn-default" data-dismiss="modal"> Konfirmasi </button>
										<button type="button" class="btn btn-default" data-dismiss="modal"> Tolak </button>
									</div>
								</div><!-- /.modal-content --> 
							</div><!-- /.modal -->
						</div>
					</tr>
			@endforeach
			</tbody>
			
		</table>
	</div>	
</div>
	
</body>
</html>

