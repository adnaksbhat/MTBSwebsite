<!DOCTYPE html>
<html>
<head>
	<title>Register Here!!</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/animate/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/select2/select2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/util.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/main.css') }}">
		 <style>
         body {
            background-image: url("images/dog.jpg");
           
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

					<form method="post" action="{{URL::to('/store')}}" class="login100-form validate-form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<span class="login100-form-title">
							Register
						</span>
						<div class="wrap-input100">
							<input class="input100" type="Email" name="email" placeholder="Enter your Email">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="wrap-input100">
							<input class="input100" type="text" name="name" placeholder="Enter your username">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="password" name="pass" placeholder="Password">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span> -->
						</div>
						<!-- <div class="wrap-input100 validate-input">
							<input class="input100" type="password" name="repass" placeholder="Re-enter Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div> -->
						<div class="container-login100-form-btn">
							<input type="submit" name="button" class="login100-form-btn" value="Register">
							
							</input>
							<!-- <small>*Use your USN as password if logging in for the first time</small>	 -->
						</div>
					</form>
				</div>
			</div>
		</div>


</body>
</html>