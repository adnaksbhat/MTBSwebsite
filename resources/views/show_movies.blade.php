<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
.grid-container {
  display: inline-grid;
  grid-template-columns: auto auto auto;
  background-color: black;
  padding: 10px;
}

.grid-item {
  background-color: black;
  border: 2px solid white;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
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


<body><br>
	<center><h2> Showing Now!</h2></center>
	<center><h2> -----------</h2></center><br>
	<br>
	<center>

@if(session('status'))
<div>{{session('status')}}</div>
@endif

	@foreach($res as $item)&nbsp
	<div class="grid-container">
		<div class="grid-item"><a style="color: white;" href="/book/{{$item->id}}">{{$item->mname}}</a></button>
	</div>

	
</div>
	@endforeach
</center>
</body>
</html>