@extends('header_footer')

@section('content')
	<div class="main"><!-- start main -->
		<div class="container main">
			<div class="row grids_of_3">
						<div class="col-md-4 grid1_of_3">
							  <h2>Parkir</h2>
							  <img src="images/icon1.png" class="img-responsive"/>
							  <p>Pada menu ini, anda dapat melakukan pencarian terhadap tempat parkir di area tertentu. Hanya tinggal memasukan nama daerah pada box "Parkiran di Kecamatan" lalu klik tombol "Search"!</p>					
						</div>
						<div class="col-md-4 grid1_of_3">
							<h2>Terminal</h2>
							  <img src="images/icon2.png" class="img-responsive"/>
							  <p>Pada menu ini, anda dapat melakukan pencarian lahan dan melakukan sewa terhadap lahan yang anda sukai. Hanya tinggal masuk kedalam menu Terminal dan pilih Terminal tertentu dan mulai sewa lahan!</p>			
						</div>
						<div class="col-md-4 grid1_of_3">
							<h2>Aksi</h2>
							  <img src="images/icon3.png" class="img-responsive"/>
							  <p>Pada menu ini, tersedia berbagai macam aksi yang dapat anda lakukan. Mulai dari mengunggah bukti pembayaran, notifikasi, mendaftarkan lahan parkir, dll.</p>
						</div>
					    <div class="clearfix"></div>
			</div>
		</div>
	</div>
@endsection