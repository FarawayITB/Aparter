@extends('header_footer')

@section('content')
<div class="main"><!-- start main -->
<div class="container">
	<div class="features"><!-- start feature -->
		<h1>Terminal</h1>
			
			@foreach ($allTerminal as $terminal)
			<div class="row features_list1"><!-- start feature -->
				<div class="col-md-3 feature">
					<div class="fancyDemo">
						<a rel="group" title="" href="{{ asset('images/ser_pic5.jpg')}}"><img src="{{ asset('images/ser_pic5.jpg')}}" alt=""class="img-responsive"/></a>
					</div>
					<div class="col-sm-6 col-md-3"> 
						<h3><a href="{{ url('/terminal/lahan') }}">{{ $terminal->nama }}</a></h3>
						<br><br>
						<h4 class="para">Alamat: {{ $terminal->alamat }}</h4>
						<h4 class="para"> Jumlah Lahan Kosong : {{ $terminal->jumlah_lahan }}</h4>
					</div> 
					<div class="col-sm-6 col-md-3"> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
					</div>
				</div>
			</div>
			@endforeach
			

		<div class="row features_list1"><!-- start feature -->
			<div class="col-sm-6 col-md-3 feature"> 
				<div class="fancyDemo">
					<a rel="group" title="" href="{{ asset('images/ser_pic5.jpg')}}"><img src="{{ asset('images/ser_pic5.jpg')}}" alt=""class="img-responsive"/></a>
				</div>
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<h3><a href="{{ url('/terminal/lahan') }}">Terminal Cicaheum</a></h3>
				<br><br>
				<h4 class="para">Alamat: Jl.Ahmad Yani</h4>
				<h4 class="para"> Jumlah Lahan Kosong : 20</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div>
		</div>	
		
		<div class="row features_list1"><!-- start feature -->
			<div class="col-sm-6 col-md-3 feature"> 
				<div class="fancyDemo">
					<a rel="group" title="" href="{{ asset('images/ser_pic5.jpg')}}"><img src="{{ asset('images/ser_pic5.jpg')}}" alt=""class="img-responsive"/></a>
				</div>
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<h3><a href="{{ url('/terminal/lahan') }}">Terminal Leuwi Panjang</a></h3>
				<br><br>
				<h4 class="para">Alamat: Jl.Soekarno Hatta</h4>
				<h4 class="para"> Jumlah Lahan Kosong : 15</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div>
		</div>
	</div><!-- end feature -->
</div>
</div>
@endsection
