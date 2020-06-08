<!DOCTYPE html>
<html>
<head>
	<title>Add Songs</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">


 <!-- <style>
 	animation {
  width: 100%;
  height: 100%;
  position: relative;
  background-color: white;
  animation-name: example;
  animation-duration: 1s;
}

@keyframes example {
  0%   {background-color: red; left:0px;}
  50%  {background-color: yellow; left:200px;}
  100% {background-color: red; left:0px;}
}
</style> -->
</head>
<body>
<div class="limiter">
			<div class="regcontainer-login100">
				<div class="regwrap-login100">
					<div class="login100-pic " data-tilt>
						<!-- <img src="images/hitman.jpg" alt="IMG"> -->
					</div>
                   <!-- <animation> -->
					<form method="post" action="/addSongs" class="login100-form validate-form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<span class="login100-form-title">
						     ADD SONGS
						</span>
						<div class="wrap-input100">
							<input class="input100" type="text" name="sname" placeholder="Song name">
							
						</div>
						<div class="wrap-input100">
							<input class="input100" type="text" name="mname" placeholder="Movie name">
							
						</div>
						
					
						<div class="container-login100-form-btn">
							<input type="submit" name="add" class="login100-form-btn" value="ADD">
							
							</input>
					
						</div>
					</form>
				<!-- </animation> -->

						@if(session('status'))
		                   <div class="alert alert-success" >{{session('status')}}</div>
	                   @endif
				</div>
			</div>
		</div>
</body>
</html>