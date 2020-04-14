@extends('layouts.lending_page')
@section('body')
  <div class="h2 container mt-5">
    <p style="color: green; background-color: gray;padding: 10px 15px;text-align: center;">Admin Log In Panel</p><hr>
  </div>
	<link rel="stylesheet" type="text/css" href="{{asset('css/signIn_style.css')}}">
	<!------ Include the above in your HEAD tag ---------->
  
	<form class="container mt-5 ml-5 mr-5 pt-5 pl-5 pr-5" action="{{route('adminLog')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="mail" id="mail" aria-describedby="emailHelp">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="pass" id="pass" >
    </div>
    
    <button type="submit" class="btn btn-primary">Sign In</button>
 </form>

@endsection