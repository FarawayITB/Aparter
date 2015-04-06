@extends('header_footer2')

@section('content2')
<div class="main"><!-- start main -->
<div class="container">
	<div class="features"><!-- start feature -->
		<h1>Terminal</h1>
		<div class="row features_list1"><!-- start feature -->
			
			@foreach ($allTerminal as $terminal)
			<div class="col-md-3 feature">
				<div class="fancyDemo">
					<a rel="group" title="" href="{{ asset('images/ser_pic5.jpg')}}"><img src="{{ asset('images/ser_pic5.jpg')}}" alt=""class="img-responsive"/></a>
				</div>
				<a href="single-page.html">{{ $terminal->nama }}</a>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
			</div>
			@endforeach
		</div>
	</div><!-- end feature -->
</div>
</div>
@endsection
