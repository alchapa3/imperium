@extends('layouts.master')

@section('title')
	<title>Imperium | Play Today!</title>
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/login.css">
@stop

@section('content')
	<div class="container">	
		<!--col 1 -->
		<div class="col-md-3">
		</div>

		<!--col 2 -->
		<div class="col-md-6 myform">

			@if(Session::has('error_message'))
				<div class="alert alert-danger" role="alert">	
				  {{Session::get('error_message')}}
				</div>
			@endif
			@if(Session::has('validation_messages'))
				<div class="alert alert-danger" role="alert">
					<h4>Oops! Something is wrong!</h4>
				  	@foreach(Session::get('validation_messages')->all() as $error)
				  		{{$error}}<br>
				  	@endforeach
				</div>
			@endif

			<h1 class="text-center">Welcome to Imperium</h1>
			<p class="text-center text-blue">Sign up to begin</p>

			{{Form::open(['action'=> 'RegistrationController@signUp', 'method' => 'POST', 'class' => 'form-horizontal'])}}
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					{{ Form::email('email', null, [ 'placeholder' => 'Email', 
					'class' => 'form-control', 'required']) }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					{{ Form::password("password" , [ 'placeholder' => 'Password', 'class' => 'form-control', 'required'])}}
				</div>	
			</div>	
			<div class="form-group">
				<label class="col-sm-2 control-label">Re-type Password</label>
				<div class="col-sm-10">
					{{ Form::password("repassword" , [ 'placeholder' => 'Re-type Password', 'class' => 'form-control', 'required'])}}
				</div>	
			</div>	
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					{{Form::text('username', null, [ 'placeholder' => 'User Name', 'required', 'class' => 'form-control'])}}
				</div>	
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				{{ Form:: submit('Sign Up', [ 'class' => 'btn btn-danger btn-block']) }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10 text-center">
				<p class="text-center">Already a king? <a href="/login" class="btn btn-link">Login</a></p>	
				
				</div>
			</div>

			{{Form::close()}}
		</div>

		<!--col 3 -->
		<div class="col-md-3">
		</div>	
	</div>
@stop
