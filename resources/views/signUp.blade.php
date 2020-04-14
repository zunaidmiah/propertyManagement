@extends('layouts.lending_page')
@section('body')


	<form class="form-horizontal container mt-5 ml-5 mr-5 pt-5 pl-5 pr-5 mb-5 pb-5" 
	action="{{route('registration')}}" method="post">
	  {{ csrf_field() }}
	  <fieldset>
	    <div id="legend">
	      <legend class="">Register</legend>
	    </div>
	    <div class="control-group">
	      <!-- Username -->
	      <label class="control-label"  for="username">Username</label>
	      <div class="controls">
	        <input type="text" id="user" name="user" placeholder="" class="input-xlarge">
	        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
	      </div>
	    </div>
	 
	    <div class="control-group">
	      <!-- E-mail -->
	      <label class="control-label" for="email">E-mail</label>
	      <div class="controls">
	        <input type="text" id="mail" name="mail" placeholder="" class="input-xlarge">
	        <p class="help-block">Please provide your E-mail</p>
	      </div>
	    </div>
	 
	    <div class="control-group">
	      <!-- Password-->
	      <label class="control-label" for="password">Password</label>
	      <div class="controls">
	        <input type="password" id="pass" name="pass" placeholder="" class="input-xlarge">
	        <p class="help-block">Password should be at least 4 characters</p>
	      </div>
	    </div>
	 
	    <div class="control-group">
	      <!-- Password -->
	      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
	      <div class="controls">
	        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
	        <p class="help-block">Please confirm password</p>
	      </div>
	    </div>
	 
	    <div class="control-group">
	      <!-- Button -->
	      <div class="controls">
	        <button class="btn btn-success">Register</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
@endsection
