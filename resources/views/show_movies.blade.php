<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- SHow Movies screen -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">

</head>


<body>

@if(session('status'))
<div>{{session('status')}}</div>
@endif

	@foreach($res as $item)
	 <div class="cardcontainer-login100-form-btn"> 
		<button class="cardlogin100-form-btn"><a style="color: white;" href="/book/{{$item->id}}">{{$item->mname}}</a></button>
	</div>
	@endforeach
	
</body>
</html>