<!DOCTYPE html>
<html>
<head>
	<title>Login Here!!</title>
	
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/animate/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/vendor/select2/select2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/util.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/main.css') }}">
		 <style>
         body {
            background-image: url("images/hitman.jpg");
           
       background-position: 100% 30%;
            

         }
      </style>
</head>
<body>

	<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic " data-tilt>
						<!-- <img src="images/hitman.jpg" alt="IMG"> -->
					</div>

					<form method="post" action="/login" class="login100-form validate-form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<span class="login100-form-title">
							Login
						</span>
						<div class="wrap-input100">
							<input class="input100" type="text" name="user" placeholder="Enter your username">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="password" name="pass" placeholder="Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<div class="container-login100-form-btn">
							<!-- <a class="txt2" href="/main"> -->
							<input type="submit" name="login" class="login100-form-btn" value="Login" >
							</input>
							<!-- <small>*Use your USN as password if logging in for the first time</small>	 -->
						</div>

						
							<center>
								<div class="container-reg100-form-btn">
	<a class="login100-form-btnqq" href="/register">
								Register
							</a>

</div> 
<div class="container-reg100-form-btn">
	<a class="login100-form-btnqq1" href="/admin_login">
								Admin
							</a>

</div>
							<!-- <div><a href="/admin_login">Admin</a>

						</div><br> -->



						
<!-- 
							<a class="txt2" href="/register">
								Register
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a> -->
						</center>
						
						</div>
						<div class="text-center p-t-136">
							<a class="txt2" href="/register">
								Admin
							 <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div> -->
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