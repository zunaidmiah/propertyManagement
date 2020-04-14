<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OurProperty.com | Buy and Rent your Property</title>
    <link rel="icon" href="{{asset('images/icons/main_icon.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lending_style.css')}}">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark dropdown">
		<a class="navbar-brand" href="#"><img src="{{asset('images/logo/main.JPG')}}" height="60" width="200" style="margin:0px;"></a>
		<div  class="item">
		<ul>
			<li>
				<a href="/">Home</a>
			</li>
			<li>
				<div class="dropdown">
				  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Buy
				  </a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Family House</a>
					    <a class="dropdown-item" href="#">Office</a>
					    <a class="dropdown-item" href="#">Garage</a>
					    <a class="dropdown-item" href="#">Shop</a>
					    <a class="dropdown-item" href="#">Factory</a>
					</div>
				</div>
			</li>
			<li>
				<div class="dropdown">
				  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				   Rent
				  </a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Family House</a>
					    <a class="dropdown-item" href="#">Bachelor Mess</a>
					    <a class="dropdown-item" href="#">Female Mess</a>
					    <a class="dropdown-item" href="#">Sublet</a>
					    <a class="dropdown-item" href="#">Office</a>
					    <a class="dropdown-item" href="#">Garage</a>
					    <a class="dropdown-item" href="#">Shop</a>
					    <a class="dropdown-item" href="#">Factory</a>
					</div>
				</div>
			</li>
			<li>
				<a href="/createPost">Create Post</a>
			</li>
			<li>
				<div class="dropdown">
				  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 1px solid black;">
				   <i class="fa fa-user-o" aria-hidden="true"></i>
				  </a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">View Profile</a>
					    <a class="dropdown-item" href="#">See Your Post</a>
					    <a class="dropdown-item" href="/">Log Out</a>
					</div>
				</div>
			</li>
			
		</ul>
		</div>
	</nav>

	


    @yield('body')



    <div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>OurProperty.com</h2>
      <p class="pr-5 text-white-50">Buy and Rent your Property </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="#">Homepage</a></li>
          <li>- <a href="#">Join With us</a></li>
          <li>- <a href="#">Find Your home</a></li>
          <li>- <a href="#">About us</a></li>
          <li>- <a href="#">Contact us</a></li>
          <li>- <a href="#">FAQ</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp 12, Shukrabad, Dhanmondi, Dhaka, Bangladesh</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(02) 754-3010</p>
      <p><i class="fa fa-envelope-o mr-3"></i>ourproperty@gmail.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>


    <script type="text/javascript" src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>