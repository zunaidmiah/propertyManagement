@extends('layouts.lending_page')
@section('body')
	<div class="container mt-5 details">
		<h2>Tolet Tittle is here</h2>
		<h5>Location will be there</h5>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="{{asset('images/slider/slide1.jpg')}}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{asset('images/slider/slide2.jpg')}}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{asset('images/slider/slide3.jpg')}}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{asset('images/slider/slide4.jpg')}}" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<br><br>
		<h3 style="color: green;">Property Details</h3><hr>
		<div class="container ml-5 pl-5">
			<div class="row">
				<div class="col-6">
					<label style="font-size: 20px;">Size : </label>
					<label>1200sqr</label>
				</div>
				<div class="col-6">
					<label style="font-size: 20px;">Total Bed : </label>
					<label>3 </label> 
				</div>

				<div class="col-6">
					<label style="font-size: 20px;">Floor : </label>
					<label>4th</label>
				</div>
				<div class="col-6">
					<label style="font-size: 20px;">Total Bath : </label>
					<label>2 </label> 
				</div>

				<div class="col-6">
					<label style="font-size: 20px;">Dinning space : </label>
					<label>Yes</label>
				</div>
				<div class="col-6">
					<label style="font-size: 20px;">Floor Type : </label>
					<label>Tiles </label> 
				</div>

				<div class="col-6">
					<label style="font-size: 20px;">Balcony Space : </label>
					<label>Available</label>
				</div>
				<div class="col-6">
					<label style="font-size: 20px;">Parking Space : </label>
					<label>Yes </label> 
				</div>
			</div>

		</div>
		<div class="container mt-5">
			<h2 style="color: green;">Description</h2><hr>
			<div class="container ml-5 pl-5">
				<label style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
			</div>
		</div>

		<div class="container mt-5">
			<h2 style="color: green;">Facilities</h2><hr>
			<div class="container ml-5 pl-5">
				<div class="row">
					<div class="col-6">
						<label style="font-size: 20px;">Security Guard : </label>
						<label>Yes</label>
					</div>
					<div class="col-6">
						<label style="font-size: 20px;">CCTV : </label>
						<label>Yes </label> 
					</div>

					<div class="col-6">
						<label style="font-size: 20px;">GAS Availity : </label>
						<label>Yes</label>
					</div>
					<div class="col-6">
						<label style="font-size: 20px;">DESCO Availity : </label>
						<label>Yes</label> 
					</div>
					<div class="col-6">
						<label style="font-size: 20px;">Generator : </label>
						<label>Yes</label>
					</div>
					<div class="col-6">
						<label style="font-size: 20px;">Lift : </label>
						<label>Yes</label> 
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-5">
			<h2 style="color: green;">Financial details</h2><hr>
			<div class="container ml-5 pl-5">
				<div class="row">
					<div class="col-6">
						<label style="font-size: 20px;">Rent (per month) : </label>
						<label>12000</label>
					</div>
					<div class="col-6">
						<label style="font-size: 20px;">Advanced : </label>
						<label>negotiable </label> 
					</div>

					<div class="col-6">
						<label style="font-size: 20px;">Servise charge : </label>
						<label>Not Applicable</label>
					</div>
					<div class="col-6">
						<label style="font-size: 20px;">Others utility bill : </label>
						<label>Alll included </label> 
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<button>Contact Information</button>
	</div>	

@endsection