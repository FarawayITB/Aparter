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
			<div class="col-sm-3 col-md-3"> 
				<div class="thumbnail"> 
					<img src="{{asset('images/lahan/lahan'.$lahan->id_lahan.'.jpg')}}" alt="Generic placeholder thumbnail"> 
				</div>
			</div>
			<div class="col-sm-3 col-md-3"> 
				<h3>Kosong</h3>
				<h4>Lahan {{$lahan->id_lahan}}</h4>
				<h4>Luas: {{$lahan->luas}} m<sup>2</sup></h4>
				<h4>Harga: Rp. {{$lahan->harga}},00</h4>
			</div> 
			<div class="col-sm-3 col-md-3"> 
			</div> 
			<div class="col-sm-3 col-md-3"> 
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal{{$lahan->id_lahan}}">Sewa</button>
			</div>
		</div>
	</div>
	
			
			<div class="modal fade" id="modal{{$lahan->id_lahan}}" tabindex="-1" role="dialog" aria-hidden="true"> 
				<div class="modal-dialog"> 
					<div class="modal-content"> 
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
							<h4 class="modal-title">Penyewaan Lahan</h4> 
						</div> 
						<div class="modal-body">
							<h4>Untuk melakukan penyewaan, transfer ke 12345678 a/n Penyewaan Lahan, dan upload bukti pembayarannya.</h4>
							<br><br>
							<form id="form{{$lahan->id_lahan}}" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/user/store_lahan') }}"> 
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="selected" value="{{$lahan->id_lahan}}">
								<div class="form-group"> 
									<label for="upload{{$lahan->id_lahan}}" class="col-md-4 control-label"><h4>Bukti Pembayaran</h4></label> 
									<div class="col-md-6">
										<input type="file" name="upload" class="form-control">
									</div>
									<div class="col-md-2">
									</div>
								</div> 
							</form>
						</div> 
						<div class="modal-footer"> 
							<button type="submit" form="form{{$lahan->id_lahan}}" class="btn btn-primary"> Submit changes </button> 
							<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
						</div>
					</div><!-- /.modal-content --> 
				</div><!-- /.modal -->
			</div>
			<br>
		@endforeach
		<hr/>
@endsection