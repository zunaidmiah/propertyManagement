@extends('layouts.admin_dashboard')
@section('body')
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="{{asset('images/slider/slide3.jpg')}}" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5 style="color: green;font-size: 30px;">Welcome to Admin Panel</h5>
	        <p style="color: black;font-size: 25px;">Now you can manage Everything from here!</p>
	      </div>
	    </div>
	    
	  </div>
	  
	</div>
@endsection
	