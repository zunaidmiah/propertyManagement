@extends('layouts.lending_page')
@section('body')
	<link rel="stylesheet" type="text/css" href="{{asset('css/rent_style.css')}}">
	<div class="header">
		<h1><i class="fa fa-plus" aria-hidden="true"></i>&nbsp Create Your Sell Post</h1>
	</div>

	<form class="container mt-5 ml-5 mr-5 pt-5 pl-5 pr-5" action="{{route('sellStore')}}"
    method="post">
    {{ csrf_field() }}


	<div class="container mt-5">
		<h3>Basic Information</h3>
		<hr><br>
		<h4>Sell Tittle</h4><br>
		<input type="text" name="sellTitle" placeholder="title is here"><br><br>
		<div class="row">
			<div class="col-6">
				<label>Property Catagory</label><br>
				<select id="Scatagory" name="Scatagory">
					<option value="">Choose Catagory</option>
				    <option value="Family House">Family House</option>
				    <option value="Office">Office</option>
				    <option value="Garage">Garage</option>
				    <option value="Shop">Shop</option>
				    <option value="Factory">Factory</option>
				 </select>
			</div>
			<div class="col-6">
				<label>Additional Catagory</label><br>
				<select id="SadditionalCatagory" name="SadditionalCatagory">
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
				<select id="Sbedrooom" name="Sbedrooom">
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
				<select id="Sbathroom" name="Sbathroom">
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
				<select id="Sbelcony" name="Sbelcony">
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
				<select id="SFloorNumber" name="SFloorNumber">
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
				<input type="telephone" name="SflatSize">
			</div>
			<div class="col-4">
				<label>Choose Gender</label><br>
				<select id="SchooseGender" name="SchooseGender">
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
				<input type="text" name="Sprice">
			</div>
			<div class="col-6 price">
				<label>Price (Optional)</label><br>
				<input type="checkbox" id="SpriceTag" name="SpriceTag" value="Negotiable">&nbsp&nbsp Negotiable<br>
				<input type="checkbox" id="SpriceTag" name="SpriceTag" value="With all bill included">&nbsp&nbsp With All Bill Included
			</div>
		</div>
		<br><br>


		<h3>Detailed information</h3>
		<hr><br>
		<div class="row">
			<div class="col-4">
				<label>Floor Type</label><br>
				<input type="text" name="SfloorType" placeholder="Mention floor type">
			</div>
			<div class="col-4">
				<label>Dinning Space</label><br>
				<select id="SdinningSpace" name="SdinningSpace">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Parking Space</label><br>
				<select id="SparkingSpace" name="SparkingSpace">
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
				<select id="SsecurityGuard" name="SsecurityGuard">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-4">
				<label>CCTV Availability</label><br>
				<select id="Scctv" name="Scctv">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-4">
				<label>Lift</label><br>
				<select id="Slift" name="Slift">
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
				<select id="Sgas" name="Sgas">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
			<div class="col-6">
				<label>DESCO Availability</label><br>
				<select id="Sdesco" name="Sdesco">
					<option value="">Choose option</option>
				    <option value="Yes">Yes</option>
				    <option value="No">No</option>
				 </select>
			</div>
		</div>
		<br>
		<div class="col-6">
			<label>Description</label><br>
			<textarea name="Sdes" placeholder="Enter job description here" rows="10" cols="100"></textarea>
		</div>
		<br>
		<div class="picture">
			<label>Pictures</label><br>
			<label for="files">Select files:</label>
  			<input type="file" id="Simage" name="Simage"><br>
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
				<select id="Scity" name="Scity">
					<option value="">Choose City</option>
				    <option value="Dhaka">Dhaka</option>
				 </select>
			</div>
			<div class="col-6">
				<label>Area</label><br>
				<select id="Sarea" name="Sarea">
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
			<input type="text" name="Saddress" placeholder="abc,xyz,Dhaka">
		</div>
		<br><br>


		<h3>Contact information</h3>
		<hr><br>
		<div class="row">
			<div class="col-6">
				<label>Name</label><br>
				<input type="text" name="Sname" placeholder="Enter Your Name">
			</div>
			<div class="col-6">
				<label>Email Address</label><br>
				<input type="text" name="Semail" placeholder="Enter Your Email">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-6">
				<label>Phone Number</label><br>
				<input type="phone" name="Snumber" placeholder="Phone Number">
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