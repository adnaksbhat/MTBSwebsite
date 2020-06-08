<!DOCTYPE html>
<html>
<head>
	<title>Add</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
		 <style>
         body {
            background-image: url("images/city.jpeg");
           
       background-position: 0% 100%;
            /*background-color: #000000;*/

         }
      </style>

</head>
<body>
<div class="limiter">
			<div class="regcontainer-login100">
				<div class="regwrap-login100">
					<div class="login100-pic " data-tilt>
						<!-- <img src="images/hitman.jpg" alt="IMG"> -->
					</div>

					<form method="post" action="/add" class="login100-form validate-form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<span class="login100-form-title">
							ADD MOVIE
						</span>
						<div class="wrap-input100">
							<input class="input100" type="text" name="name" placeholder="Enter movie">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="wrap-input100">
							<input class="input100" type="text" name="genre" placeholder="Enter genre">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="text" name="imdb" placeholder="Enter IMDB">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="text" name="cast" placeholder="Enter cast" required="true">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="container-login100-form-btn">
							<input type="submit" name="login" class="login100-form-btn" value="Register">
							
							</input>
							<!-- <small>*Use your USN as password if logging in for the first time</small>	 -->
						</div>
					</form>
				</div>
				@if(session('status'))
					<div class="alert alert-danger">
						{{session('status')}}
					</div>
					@endif
			</div>
		</div>

</body>
</html>