@extends('header_footer')

@section('content')
	<div class="container">
		<div class="row">
			<div class="page-header"> 
				<h1>Terminal Cicaheum</h1> 
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6 col-md-3"> 
				<div class="thumbnail"> 
					<img src="{{asset('images/lahan1.jpg')}}" alt="Generic placeholder thumbnail"> 
				</div>
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<h3>KOSONG</h3>
				<br><br>
				<h4>Lahan A</h4>
				<h4>Luas: 5x5</h4>
				<h4>Harga: Rp,-</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<button type="button" class="btn btn-info">Sewa</button>
			</div> 
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-3"> 
				<div class="thumbnail"> 
					<img src="{{asset('images/lahan1.jpg')}}" alt="Generic placeholder thumbnail"> 
				</div>
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<h3>KOSONG</h3>
				<br><br>
				<h4>Lahan B</h4>
				<h4>Luas: 2x3</h4>
				<h4>Harga: Rp,-</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<button type="button" class="btn btn-info">Sewa</button>
			</div> 
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-3"> 
				<div class="thumbnail"> 
					<img src="{{asset('images/lahan1.jpg')}}" alt="Generic placeholder thumbnail"> 
				</div>
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<h3>KOSONG</h3>
				<br><br>
				<h4>Lahan C</h4>
				<h4>Luas: 3x3</h4>
				<h4>Harga: Rp,-</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<button type="button" class="btn btn-info">Sewa</button>
			</div> 
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-3"> 
				<div class="thumbnail"> 
					<img src="{{asset('images/lahan1.jpg')}}" alt="Generic placeholder thumbnail"> 
				</div>
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<h3>KOSONG</h3>
				<br><br>
				<h4>Lahan D</h4>
				<h4>Luas: 2x2</h4>
				<h4>Harga: Rp,-</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<button type="button" class="btn btn-info">Sewa</button>
			</div> 
		</div>
	</div>
@endsection