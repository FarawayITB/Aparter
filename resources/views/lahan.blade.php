@extends('header_footer')

@section('content')
	
	<div class="container">
	
		<div class="row">
			<div class="page-header">
			@foreach($nama_terminal as $terminal) 
				<h1>{{$terminal->nama}}</h1>
				@endforeach
			</div>
		</div>
	<div>
		@foreach ($lahan_terminal as $lahan)
	<div class="container"> 
		<div class="row">
			<div class="col-sm-6 col-md-3"> 
				<div class="thumbnail"> 
					<img src="{{asset('images/lahan1.jpg')}}" alt="Generic placeholder thumbnail"> 
				</div>
			</div>
			<div class="col-sm-6 col-md-3"> 
				<h3>{{$lahan->status}}</h3>
				<br><br>
				<h4>Lahan {{$lahan->id_lahan}}</h4>
				<h4>Luas: {{$lahan->luas}}</h4>
				<h4>Harga: Rp{{$lahan->harga}}</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1">Sewa</button>
			</div>
		</div>
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
		@endforeach
		<hr/>
	
	</div>
@endsection