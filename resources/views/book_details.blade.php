<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h2>
	@foreach($mres as $item)
	<div>{{$item->mname}}</div>
	@endforeach
	@foreach($tres as $item)
	<div>{{$item->tname}}</div>
	@endforeach
	@foreach($bres as $item)
	<div>{{$item->not}}</div>

	@endforeach


	<button onclick="redirect();">OK</button>
	<button onclick="sendtickets();">Send Tickets</button>
	<script type="text/javascript">
		function redirect(){
			window.location.href = '/main';
		}



		function sendtickets(){
			window.location.href = 'http://72.44.51.15:3000/{{$uemail}}';
		}

	</script></h2>
	</center
</body>
</html>