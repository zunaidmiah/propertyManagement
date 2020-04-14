<html>
	<head>
    <link rel="icon" href="{{asset('images/icons/main_icon.png')}}">
		<title>Admin Dashboard</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	 	<meta name="description" content="">
  		<meta name="author" content="">
  		<!-- Custom fonts for this template-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/admin_home_style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/admin_template.css')}}">
  		


	</head>
	<body>
	<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img src="{{asset('images/logo/main.JPG')}}" height="60" width="200" style="margin:0px;"></a>
  </nav>
	<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fa fa-home" aria-hidden="true"></i>
          <span>Homepage</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-table" aria-hidden="true"></i>
          <span>Pending Rent Post</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user-secret" aria-hidden="true"></i>
          <span>All Live Rent Post</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user-secret" aria-hidden="true"></i>
          <span>Pending Buy Post</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user-secret" aria-hidden="true"></i>
          <span>All Live Buy Post</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fa fa-user-secret" aria-hidden="true"></i>
          <span>All User List</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          <span>Log Out</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">100k+ live Rent post!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">10+ pending Rent Post!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">10k+ Buy post!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">10+ Pending Buy post!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Area Chart Example-->
        
    
	@yield('body')
</div>
</div>
</div>
</body>

    	<div class="pt-5 pb-5 footer">
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
	
<html>