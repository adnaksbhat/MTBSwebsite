<!DOCTYPE html>
<html>
<head>
	<title>Add Theatre</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">
</head>
<body>
      <div class="limiter">
			<div class="regcontainer-login100">
				<div class="regwrap-login100">
					<div class="login100-pic " data-tilt>
						<!-- <img src="images/hitman.jpg" alt="IMG"> -->
					</div>

					<form method="post" action="/add_theatre" class="login100-form validate-form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<span class="login100-form-title">
						     ADD THEATRE
						</span>
						<div class="wrap-input100">
							<input class="input100" type="text" name="tname" placeholder="Theatre">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="wrap-input100">
							<input class="input100" type="text" name="location" placeholder="Location">
							<!-- <span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span> -->
						</div>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="number" name="seats" placeholder="Seats">
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
							<input type="submit" name="add" class="login100-form-btn" value="ADD">
							
							</input>
							<!-- <small>*Use your USN as password if logging in for the first time</small>	 -->
						</div>
					</form>
						@if(session('status'))
		                   <div>{{session('status')}}</div>
	                   @endif
				</div>
			</div>
		</div>
</body>
</html>