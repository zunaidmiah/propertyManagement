@extends('layouts.lending_page')
@section('body')
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


	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-6">
				<form method="get" action="/rentPost">
					<a href="#">
						<img src="{{asset('images/icons/icon.png')}}" style="height: 100px; width: 80px;margin-left: 100px;">
					</a>
					<h4 style="margin-top: 15px;margin-left: 35px;">Rent Your Property</h4><br>
					<p class="ml-3">Do you wants to rent your home?</p>
					<p>Post here, this is the best place for your property !
					</p><br>
					<button class="clickme">Click Here</button>
				</form>
			</div>
			<div class="col-6">
				<form method="get" action="/sellPost">
					<a href="#">
						<img src="{{asset('images/icons/icon.png')}}" style="height: 100px; width: 80px;margin-left: 100px;">
					</a>
					<h4 style="margin-top: 15px;margin-left: 35px;">Sell Your Property</h4><br>
					<p class="ml-3">Do you wants to Sell your home?</p>
					<p>Post here, this is the best place for your property !</p><br>
					<button class="clickme">Click Here</button>
				</form>
			</div>
		</div>
	</div>

@endsection