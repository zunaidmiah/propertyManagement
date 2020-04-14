@extends('layouts.lending_page')
@section('body')
	<link rel="stylesheet" type="text/css" href="{{asset('css/rent_style.css')}}">
	<div class="header">
		<h1><i class="fa fa-plus" aria-hidden="true"></i>&nbsp Create Your Rent Post</h1>
	</div>
	
	<form class="container mt-5 ml-5 mr-5 pt-5 pl-5 pr-5" action="{{route('rentStore')}}"
    method="post">
    {{ csrf_field() }}


	<div class="container mt-5">
		<h3>Basic Information</h3>
		<hr><br>
		<h4>Rent Tittle</h4><br>
		<input type="text" name="rentTitle" placeholder="title is here"><br><br>
		<div class="row">
			<div class="col-4">
				<label>From Month</label><br>
				<select id="month" name="month">
					<option value="">From Month</option>
				    <option value="January">January</option>
				    <option value="February">February</option>
				    <option value="March">March</option>
				    <option value="April">April</option>
				    <option value="May">May</option>
				    <option value="June">June</option>
				    <option value="July">July</option>
				    <option value="August">August</option>
				    <option value="September">September</option>
				    <option value="October">October</option>
				    <option value="November">November</option>
				    <option value="December">December</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Property Catagory</label><br>
				<select id="catagory" name="catagory">
					<option value="">Choose Catagory</option>
				    <option value="Family House">Family House</option>
				    <option value="Bachelor Mess">Bachelor Mess</option>
				    <option value="Female Mess">Female Mess</option>
				    <option value="Sublet">Sublet</option>
				    <option value="Office">Office</option>
				    <option value="Garage">Garage</option>
				    <option value="Shop">Shop</option>
				    <option value="Factory">Factory</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Additional Catagory</label><br>
				<select id="additionalCatagory" name="additionalCatagory">
					<option value="">Choose Additional Catagory</option>
				    <option value="Family House">Family House</option>
				    <option value="Bachelor Mess">Bachelor Mess</option>
				    <option value="Female Mess">Female Mess</option>
				    <option value="Sublet">Sublet</option>
				    <option value="Office">Office</option>
				    <option value="Garage">Garage</option>
				    <option value="Shop">Shop</option>
				    <option value="Factory">Factory</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-4">
				<label>Bedroom</label><br>
				<select id="bedrooom" name="bedrooom">
					<option value="">Select how much</option>
				    <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Bathroom</label><br>
				<select id="bathroom" name="bathroom">
					<option value="">Select how much</option>
				    <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Belcony</label><br>
				<select id="belcony" name="belcony">
					<option value="">Select how much</option>
				    <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-4">
				<label>Floor Number</label><br>
				<select id="FloorNumber" name="FloorNumber">
					<option value="">Choose Floor Number</option>
				    <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5</option>
				    <option value="6">6</option>
				    <option value="7">7</option>
				    <option value="8">8</option>
				    <option value="9">9</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Flat Size</label><br>
				<input type="text" name="flatSize">
			</div>
			<div class="col-4">
				<label>Choose Gender</label><br>
				<select id="chooseGender" name="chooseGender">
					<option value="">Select Gender</option>
				    <option value="Male">Male</option>
				    <option value="Female">Female</option>
				    <option value="For Everyone">For Everyone</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-6">
				<label>Price</label><br>
				<input type="text" name="price">
			</div>
			<div class="col-6 price">
				<label>Price (Optional)</label><br>
				<input type="checkbox" id="priceTag" name="priceTag" value="Negotiable">&nbsp&nbsp Negotiable<br>
				<input type="checkbox" id="priceTag" name="priceTag" value="With all bill included">&nbsp&nbsp With All Bill Included
			</div>
		</div>
		<br><br>


		<h3>Detailed information</h3>
		<hr><br>
		<div class="row">
			<div class="col-4">
				<label>Floor Type</label><br>
				<input type="text" name="floorType" placeholder="Mention floor type">
			</div>
			<div class="col-4">
				<label>Dinning Space</label><br>
				<select id="dinningSpace" name="dinningSpace">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Parking Space</label><br>
				<select id="parkingSpace" name="parkingSpace">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-4">
				<label>Security Guard</label><br>
				<select id="securityGuard" name="securityGuard">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-4">
				<label>CCTV Availability</label><br>
				<select id="cctv" name="cctv">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Lift</label><br>
				<select id="lift" name="lift">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-6">
				<label>Gas Avalability</label><br>
				<select id="gas" name="gas">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-6">
				<label>DESCO Availability</label><br>
				<select id="desco" name="desco">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="col-6">
			<label>Description</label><br>
			<textarea name="des" placeholder="Enter job description here" rows="10" cols="100"></textarea>
		</div>
		<br>
		<div class="picture">
			<label>Pictures</label><br>
			<label for="files">Select files:</label>
  			<input type="file" id="image" name="image"><br>
  			<!-- <label for="files">Select files:</label>
  			<input type="file" id="files" name="files"><br>
  			<label for="files">Select files:</label>
  			<input type="file" id="files" name="files"><br> -->
		</div>
		<br><br>


		<h3>Location</h3>
		<hr><br>
		<div class="row">
			<div class="col-6">
				<label>City</label><br>
				<select id="city" name="city">
					<option value="">Choose City</option>
				    <option value="Dhaka">Dhaka</option>
				 </select>
			</div>
			<div class="col-6">
				<label>Area</label><br>
				<select id="area" name="area">
					<option value="">Choose Area</option>
				    <option value="Mirpur">Mirpur</option>
				    <option value="Dhanmondi">Dhanmondi</option>
				    <option value="Banani">Banani</option>
				    <option value="Gulshan">Gulshan</option>
				    <option value="Uttara">Uttara</option>
				    <option value="Motizil">Motizil</option>
				    <option value="Farmgate">Farmgate</option>
				    <option value="Shahbag">Shahbag</option>
				    <option value="Old Dhaka">Old Dhaka</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="address">
			<label>Short Address (Optional)</label><br>
			<input type="text" name="address" placeholder="abc,xyz,Dhaka">
		</div>
		<br><br>


		<h3>Contact information</h3>
		<hr><br>
		<div class="row">
			<div class="col-6">
				<label>Name</label><br>
				<input type="text" name="name" placeholder="Enter Your Name">
			</div>
			<div class="col-6">
				<label>Email Address</label><br>
				<input type="text" name="email" placeholder="Enter Your Email">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-6">
				<label>Phone Number</label><br>
				<input type="text" name="number" placeholder="Phone Number">
			</div>
			<!-- <div class="col-6">
				<label>Phone Number (Optional)</label><br>
				<input type="phone" name="rent_number1" placeholder="Phone Number">
			</div> -->
		</div>
		<br><br><br>
		<button>Submit</button>
	</div>

	</form>
@endsection