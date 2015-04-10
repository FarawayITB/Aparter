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
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1">Sewa</button>
			</div> 
			<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true"> 
				<div class="modal-dialog"> 
					<div class="modal-content"> 
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
							<h4 class="modal-title">Penyewaan Lahan</h4> 
						</div> 
						<div class="modal-body">
							<h4>Untuk melakukan penyewaan, transfer ke 12345678 a/n Penyewaan Lahan, dan upload bukti pembayarannya.</h4>
							<br><br>
							<div class="form-group"> 
								<label for="upload" class="col-md-4 control-label"><h4>Bukti Pembayaran</h4></label> 
								<div class="col-md-6">
									<input type="file" id="upload" name="upload" class="form-control">
								</div>
								<div class="col-md-2">
								</div>
							</div> 
						</div> 
						<div class="modal-footer"> 
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
							<button type="button" class="btn btn-primary"> Submit changes </button> 
						</div>
					</div><!-- /.modal-content --> 
				</div><!-- /.modal -->
			</div>
		</div>
		<hr/>

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
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal2">Sewa</button>
			</div>
			<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true"> 
				<div class="modal-dialog"> 
					<div class="modal-content"> 
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
							<h4 class="modal-title">Penyewaan Lahan</h4> 
						</div> 
						<div class="modal-body">
							<h4>Untuk melakukan penyewaan, transfer ke 12345678 a/n Penyewaan Lahan, dan upload bukti pembayarannya.</h4>
							<br><br>
							<div class="form-group"> 
								<label for="upload2" class="col-md-4 control-label"><h4>Bukti Pembayaran</h4></label> 
								<div class="col-md-6">
									<input type="file" id="upload2" name="upload2" class="form-control">
								</div>
								<div class="col-md-2">
								</div>
							</div> 
						</div> 
						<div class="modal-footer"> 
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
							<button type="button" class="btn btn-primary"> Submit changes </button> 
						</div>
					</div><!-- /.modal-content --> 
				</div><!-- /.modal -->
			</div> 
		</div>
		<hr/>

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
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal3">Sewa</button>
			</div>
			<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-hidden="true"> 
				<div class="modal-dialog"> 
					<div class="modal-content"> 
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
							<h4 class="modal-title">Penyewaan Lahan</h4> 
						</div> 
						<div class="modal-body">
							<h4>Untuk melakukan penyewaan, transfer ke 12345678 a/n Penyewaan Lahan, dan upload bukti pembayarannya.</h4>
							<br><br>
							<div class="form-group"> 
								<label for="upload3" class="col-md-4 control-label"><h4>Bukti Pembayaran</h4></label> 
								<div class="col-md-6">
									<input type="file" id="upload3" name="upload3" class="form-control">
								</div>
								<div class="col-md-2">
								</div>
							</div> 
						</div> 
						<div class="modal-footer"> 
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
							<button type="button" class="btn btn-primary"> Submit changes </button> 
						</div>
					</div><!-- /.modal-content --> 
				</div><!-- /.modal -->
			</div>  
		</div>
		<hr/>
		
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