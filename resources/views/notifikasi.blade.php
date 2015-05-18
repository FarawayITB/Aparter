@extends('header_footer')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-5">
		</div>
		<div class="col-xs-3">
			<div class="page-header"> 
				<h1>Pemberitahuan</h1> 
			</div>
		</div>
		<div class="col-xs-4">
		</div>
	</div>

	@foreach ($allReminder as $reminder)
	 <div class="alert alert-danger alert-dismissable"> 
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; 
			</button> {{$reminder->body}}
	</div>
	@endforeach

	@foreach ($allretri as $retri)	
		<h3><a href="javascript:;" data-toggle="modal" data-target="#myModal{{$notif->id}}"> {{$retri->subject}} </a></h3>
		<p> {{$retri->body}} </p>	
		<!-- Modal --> 
		<div class="modal fade" id="myModal{{$notif->id}}" tabindex="-1" role="dialog" aria-labelledby="notifLabel" aria-hidden="true"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
						<h4 class="modal-title" id="notifLabel"> {{$retri->subject}} </h4> 
					</div> 
					<div class="modal-body">
						<h5> {{$retri->body}} </h5>
					</div> 
					<div class="modal-footer"> 
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
					</div>
				</div><!-- /.modal-content --> 
			</div><!-- /.modal -->
		</div>
	@endforeach
		
	@foreach ($allNotif as $notif)	
		<h3><a href="javascript:;" data-toggle="modal" data-target="#myModal{{$notif->id}}"> {{$notif->subject}} </a></h3>
		<p> {{$notif->body}} </p>	
		<!-- Modal --> 
		<div class="modal fade" id="myModal{{$notif->id}}" tabindex="-1" role="dialog" aria-labelledby="notifLabel" aria-hidden="true"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
						<h4 class="modal-title" id="notifLabel"> {{$notif->subject}} </h4> 
					</div> 
					<div class="modal-body">
						<h5> {{$notif->body}} </h5>
					</div> 
					<div class="modal-footer"> 
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button> 
					</div>
				</div><!-- /.modal-content --> 
			</div><!-- /.modal -->
		</div>
	@endforeach

@endsection