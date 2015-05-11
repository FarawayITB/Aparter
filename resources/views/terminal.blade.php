@extends('header_footer')

@section('content')
<div class="main"><!-- start main -->
<div class="container">
	<div class="features"><!-- start feature -->
		<h1>Terminal</h1>
			
			@foreach ($allTerminal as $terminal)
			
			<div class="row features_list1"><!-- start feature -->
			<div class="col-sm-6 col-md-3 feature"> 
				<div class="fancyDemo">
					<a rel="group" title="" href="{{ asset('images/ser_pic5.jpg')}}"><img src="{{ asset('images/ser_pic5.jpg')}}" alt=""class="img-responsive"/></a>
				</div>
			</div> 
			<div class="col-sm-6 col-md-3">
				

				<h3><a href="{{ url('/terminal/'.$terminal->id_terminal) }}">{{ $terminal->nama }}</a></h3>
				<br><br>
				<h4 class="para">Alamat: {{ $terminal->alamat }}</h4>
				<h4 class="para"> Jumlah Lahan Kosong : {{ $terminal->jumlah_lahan }}</h4>
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
