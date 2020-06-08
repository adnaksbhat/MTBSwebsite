<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/animate/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/select2/select2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/util.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/main.css') }}">
		 <style>
         body {
            background-image: url("images/t2.jpeg");
           
       background-position: 0% 100%;
            /*background-color: #000000;*/

         }
      </style>
</head>
<body>
	<!-- <form method="POST" action="/adminLogin">
		@csrf
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="submit"  value="submit">
		
	</form> -->


	<div class="limiter">
			<div class="regcontainer-login100">
				<div class="regwrap-login100">
					<div class="login100-pic " data-tilt>
					
					</div>

					<form method="post" action="/adminLogin" class="login100-form validate-form">
						@csrf
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<span class="login100-form-title">
							Admin Login
						</span>
					
						<div class="wrap-input100">
							<input class="input100" type="text" name="username" placeholder="Enter your username">
							
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="password" name="password" placeholder="Password">
							
						</div>
					
						<div class="container-login100-form-btn">
							<input type="submit" name="login" class="login100-form-btn" value="Go In">
							
							</input>
							
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>