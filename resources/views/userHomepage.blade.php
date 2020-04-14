@extends('layouts.user_page')
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



<div class="row mt-4 ml-3">
	<div class="col-3 ">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card1.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Mirpur-1, Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

	<div class="col-3">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card2.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Dhanmondi,Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

	<div class="col-3">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card1.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Mirpur-1, Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

	<div class="col-3">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card2.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Dhanmondi,Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

</div>



<div class="row mt-4 ml-3">
	<div class="col-3 ">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card1.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Mirpur-1, Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

	<div class="col-3">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card2.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Dhanmondi,Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

	<div class="col-3">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card1.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Mirpur-1, Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

	<div class="col-3">
		<div class="card" style="width: 18rem;">
		  <img src="{{asset('images/card2.jpg')}}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Dhanmondi,Dhaka</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/seeDetails" class="btn btn-primary">see Details</a>
		  </div>
		</div>
	</div>

</div>



<nav aria-label="Page navigation example">
  <ul class="pagination  mt-3" style="margin-left: 600px;">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<div class="ml-3 mr-3 mb-4 mt-4">
	<iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.82239418288!2d90.27923848203248!3d23.78088745524038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1582054613554!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<div class="container">
	<h3 style="text-align: center;">Most Popular Place</h3>
	<h5 style="text-align: center;">Properties In Most Popular Places</h5>
	<div class="row mt-4 ml-3">
		<div class="col-4 ">
			<div class="card bg-dark text-white" style="width: 18rem;">
			  <a href="#"><img src="{{asset('images/card1.jpg')}}" class="card-img" alt="...">
			  </a>
			  <div class="card-img-overlay">
			    <h5 class="card-title" style="text-align: center;font-size: 25px;">Mirpur-1, Dhaka</h5>
			  </div>
			</div>
		</div>

		<div class="col-4">
			<div class="card bg-dark text-white" style="width: 18rem;">
			  <a href="#"><img src="{{asset('images/card2.jpg')}}" class="card-img" alt="...">
			  </a>
			  <div class="card-img-overlay">
			    <h5 class="card-title" style="text-align: center;font-size: 25px;">Dhanmondi,Dhaka</h5>
			  </div>
			</div>
		</div>

		<div class="col-4">
			<div class="card bg-dark text-white" style="width: 18rem;">
			  <a href="#"><img src="{{asset('images/card1.jpg')}}" class="card-img" alt="...">
			  </a>
			  <div class="card-img-overlay">
			    <h5 class="card-title" style="text-align: center;font-size: 25px;">Mirpur-1, Dhaka</h5>
			   </div>
			</div>
		</div>
	</div>


	<div class="row mt-4 ml-3">
		<div class="col-4 ">
			<div class="card bg-dark text-white" style="width: 18rem;">
			  <a href="#"><img src="{{asset('images/card1.jpg')}}" class="card-img" alt="..."></a>
			  <div class="card-img-overlay">
			    <h5 class="card-title" style="text-align: center;font-size: 25px;">Mirpur-1, Dhaka</h5>
			  </div>
			</div>
		</div>

		<div class="col-4">
			<div class="card bg-dark text-white" style="width: 18rem;">
			  <a href="#"><img src="{{asset('images/card2.jpg')}}" class="card-img" alt="...">
			  </a>
			  <div class="card-img-overlay">
			    <h5 class="card-title" style="text-align: center;font-size: 25px;">Dhanmondi,Dhaka</h5>
			  </div>
			</div>
		</div>

		<div class="col-4">
			<div class="card bg-dark text-white" style="width: 18rem;">
			  <a href="#"><img src="{{asset('images/card1.jpg')}}" class="card-img" alt="...">
			  </a>
			  <div class="card-img-overlay">
			    <h5 class="card-title" style="text-align: center;font-size: 25px;">Mirpur-1, Dhaka</h5>
			   </div>
			</div>
		</div>
	</div>
	

</div>
@endsection