@extends('header_footer')

@section('content')
<div class="main"><!-- start main -->
<div class="container">
	<div class="features"><!-- start feature -->
		<div class="row">
			<div class="col-xs-4">
			</div>
			<div class="col-xs-5">
				<div class="page-header"> 
					<h1>Terminal di Bandung</h1> 
				</div>
			</div>
			<div class="col-xs-3">
		</div>
		</div>
			<form class="navbar-form navbar-right" role="search" action="{{ url('/terminal/cari') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

		        <div class="form-group my_search">
		        	<input type="text" class="form-control" id="terminal" name="terminal" placeholder="Cari Terminal">
		        </div>
		        <div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<input type="submit" class="btn btn-primary" value="Cari">
					</div>
				</div>
	      	</form><br><br><br>
	      	<?php
	      		if (isset($cariterminal)){
	      			$allTerminal = $cariterminal;
	      		}
	      	?>
			@foreach ($allTerminal as $terminal)
			
			<div class="row features_list1"><!-- start feature -->
			<div class="col-sm-6 col-md-3 feature"> 
				<div class="fancyDemo">
					<a rel="group" class="thumbnail" href="javascript:;"><img src="{{ asset('images/terminal/terminal'.$terminal['id_terminal'].'.jpg')}}" alt=""class="img-responsive"/></a>
				</div>
			</div> 
			<div class="col-sm-6 col-md-3">
				<h3><a href="{{ url('/terminal/'.$terminal['id_terminal']) }}">{{ $terminal['nama'] }}</a></h3>
				<br><br>
				<h4 class="para">Alamat: {{ $terminal['alamat'] }}</h4>
				<h4 class="para"> Jumlah Lahan Kosong : {{ $terminal['jumlah_lahan'] }}</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div>
		</div>	
			@endforeach
	</div>
</div>
@endsection
