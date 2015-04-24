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
				<h3>Lahan A</h3>
				<br><br>
				<h4>Luas: 5x5</h4>
			</div> 
			<div class="col-sm-6 col-md-3"> 
			</div> 
			<div class="col-sm-6 col-md-3"> 
				<div class="row">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1">Request Perluasan</button>
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
			</div>
		</div>
		<div class="row">
			<!-- Button to trigger modal -->
		<a href="#TaskListDialog" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
		<div class="modal fade" id="TaskListDialog" tabindex="-1" role="dialog" aria-hidden="true"> 
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

@endsection