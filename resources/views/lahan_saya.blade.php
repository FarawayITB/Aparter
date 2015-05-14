@extends('header_footer')

@section('content')
	<div class="container">
		<div class="row">
			<div class="page-header"> 
				<h1>Terminal Cicaheum</h1> 
			</div>
		</div>
		
		@foreach($lahans as $lahan)
		<div class="row">
			<div class="col-sm-6 col-md-3"> 
				<div class="thumbnail"> 
					<img src="{{asset('images/lahan/lahan'.$lahan->id_lahan.'.jpg')}}" alt="Generic placeholder thumbnail"> 
				</div>
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<h3>Lahan {{$lahan->id_lahan}}</h3>
				<br><br>
				<h4>Luas: {{$lahan->luas}} m<sup>2</sup></h4>
				<h4>Tenggat: {{$lahan->tenggat}} </h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<div class="row">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#TaskListDialog{{$lahan->id_lahan}}">Menu</button>
				</div>
			</div>
			<div class="modal fade" id="TaskListDialog{{$lahan->id_lahan}}" tabindex="-1" role="dialog" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/user/save_lahan') }}"> 
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="idlahan" value="{{$lahan->id_lahan}}">
					<input type="hidden" name="id_pemilik" value="3273060611940005">
					<div class="modal-dialog"> 
						<div class="modal-content"> 
							<div class="modal-header"> 
								<h3>Task List</h3>
							</div>
							<div class="modal-body">
								<div class="tabbable"> <!-- Only required for left/right tabs -->
							        <ul class="nav nav-tabs">
							        	<li class="active"><a href="#tab1-{{$lahan->id_lahan}}" data-toggle="tab"><h4 class="modal-title">Perpanjangan</h4> </a></li>
							        	<li><a href="#tab2-{{$lahan->id_lahan}}" data-toggle="tab"><h4 class="modal-title">Perluasan</h4> </a></li>
							        </ul>
							        <div class="tab-content">
								        <div class="tab-pane active" id="tab1-{{$lahan->id_lahan}}">
								            <h4>Untuk melakukan pembayaran perpanjangan sewa lahan, transfer ke 12345678 a/n Perpanjangan Lahan, dan upload bukti pembayarannya.</h4>
								            <br><br>
											<div class="form-group"> 
												<label for="upload{{$lahan->id_lahan}}" class="col-md-4 control-label"><h4>Bukti Pembayaran</h4></label> 
												<div class="col-md-6">
													<input type="file" id="upload{{$lahan->id_lahan}}" name="upload{{$lahan->id_lahan}}" class="form-control">
												</div>
												<div class="col-md-2">
												</div>
											</div> 
								        </div>
								        <div class="tab-pane" id="tab2-{{$lahan->id_lahan}}">
								        		<h4>Klik request perluasan, untuk merequest perluasan area lahan</h4>
									        	<div class="form-group"> 
													<label for="panjang{{$lahan->id_lahan}}" class="col-md-4 control-label"><h4>Panjang: </h4></label> 
													<div class="col-md-5">
														<input type="text" id="panjang{{$lahan->id_lahan}}" name="panjang{{$lahan->id_lahan}}" class="form-control">
													</div>
													<div class="col-md-2">
													</div>
												</div> 
											
												<div class="form-group"> 
													<label for="lebar{{$lahan->id_lahan}}" class="col-md-4 control-label"><h4>Lebar: </h4></label> 
													<div class="col-md-5">
														<input type="text" id="lebar{{$lahan->id_lahan}}" name="lebar{{$lahan->id_lahan}}" class="form-control">
													</div>
													<div class="col-md-2">
													</div>
												</div> 
								        	<br>
								        </div>
							        </div>
						        </div>
							</div> 
							<div class="modal-footer"> 
								<button type="submit" class="btn btn-primary"> Submit changes </button> 
								<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
							</div>
						</div><!-- /.modal-content --> 
					</div><!-- /.modal -->
				</form>
			</div>
		</div>
		<hr/>
		@endforeach

@endsection