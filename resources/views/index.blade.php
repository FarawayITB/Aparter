@extends('header_footer')

@section('content')
	<?php
		$id = Cookie::get("NIK");
		$nik = $DB::table("ppl_dukcapil_ktp")
				->where("id","=", $id)
				->get();
		Cookie::make("NIK", $nik->nik);
	?>
	<div class="main"><!-- start main -->
		<div class="container main">
			<div class="row grids_of_3">
						<div class="col-md-4 grid1_of_3">
							  <h2>user Profiles</h2>
							  <img src="images/icon1.png" class="img-responsive"/>
							  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						     <div class="rd_more1">
								<a href="single-page.html"><button class="btn_style">view more</button></a>
							</div>					
						</div>
						<div class="col-md-4 grid1_of_3">
							<h2>services</h2>
							  <img src="images/icon2.png" class="img-responsive"/>
							  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      <div class="rd_more1">
								<a href="single-page.html"><button class="btn_style">view more</button></a>
							</div>					
						</div>
						<div class="col-md-4 grid1_of_3">
							<h2>Get in Touch</h2>
							  <img src="images/icon3.png" class="img-responsive"/>
							  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						     <div class="rd_more1">
								<a href="single-page.html"><button class="btn_style">view more</button></a>
							</div>	
						</div>
					    <div class="clearfix"></div>
			</div>
			<div class="row grids_btm top">
				<div class="col-md-6">
					<div class="grid_list">
						<div class="images_1_of_1">
							<p>27</p>
						</div>
						<div class="grid_1_of_1">
							  	<h3>Lorem Ipsum is simply text </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>	   
			 			</div>
			 			 <div class="clearfix"></div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="grid_list">
						<div class="images_1_of_1">
							<p>0$</p>
						</div>
							<div class="grid_1_of_1">
							  	<h3>Lorem Ipsum is simply text </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>   
			 				</div>
						</div>
						 <div class="clearfix"></div>
					</div>
			</div>
			<div class="row grids_btm top">
				<div class="col-md-6">
					<div class="grid_list">
						<div class="images_1_of_1">
							<p>0$</p>
						</div>
						<div class="grid_1_of_1">
							  	<h3>Lorem Ipsum is simply text </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>	   
			 			</div>
			 			 <div class="clearfix"></div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="grid_list">
						<div class="images_1_of_1">
							<p>35</p>
						</div>
							<div class="grid_1_of_1">
							  	<h3>Lorem Ipsum is simply text </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>   
			 				</div>
						</div>
						 <div class="clearfix"></div>
					</div>
			</div>
		</div>
	</div>
@endsection