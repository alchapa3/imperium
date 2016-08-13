@extends('layouts.master')

@section('title')
  <title>Imperium | Welcome</title>
@stop

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/start.css">
@stop

@section('content')
	<div class="container">	
		<!--col 1 -->
		<div class="col-md-3">
		</div>

		<!--col 2 -->
		<div class="col-md-6 myform">


			<h1 class="text-center">Welcome to Imperium</h1>
			<p class="text-center text-white">Don't just play, conquer</p>

			<a class="btn btn-danger btn-lg btn-block"  href="/signup" role="button" >Sign Up</a>
			<a class="btn btn-danger btn-lg btn-block"  href="/login" role="button">Sign In</a>
			<a class="btn btn-danger btn-lg btn-block"  href="gauth" role="button" >Login Using Google</a>

		<p>

		<!--div class="col-md-11">
			<meta name="google-signin-scope" content="profile email">
		    		<meta name="google-signin-client_id" content="210992275703-3vsf5vhtm1ov8omt6jodaphddqabth2d.apps.googleusercontent.com">
		    		<script src="https://apis.google.com/js/platform.js" async defer></script>
		  			</head>
		  			<body>
		  			<div class="col-sm-offset-5">
		    		<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
		    		<script>
		      		function onSignIn(googleUser) {
		        	// Useful data for your client-side scripts:
		        	var profile = googleUser.getBasicProfile();
		        	console.log("ID: " + profile.getId()); // Don't send this directly to your server!
		        	console.log('Full Name: ' + profile.getName());
		        	console.log('Given Name: ' + profile.getGivenName());
		        	console.log('Family Name: ' + profile.getFamilyName());
		        	console.log("Image URL: " + profile.getImageUrl());
		        	console.log("Email: " + profile.getEmail());

		        	// The ID token you need to pass to your backend:
		        	var id_token = googleUser.getAuthResponse().id_token;
		        	console.log("ID Token: " + id_token);
		      		};
		    		</script>
		  			</body>

					<a href="#" onclick="signOut();">Sign out</a>
					<script>
		  			function signOut() {
		    	 		var auth2 = gapi.auth2.getAuthInstance();
		    			auth2.signOut().then(function () {
		      			console.log('User signed out.');});
		  			}
					</script-->
					<p>
					
					</div>
				
