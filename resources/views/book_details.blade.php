<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
	<script type="text/javascript">
		function redirect(){
			window.location.href = '/main';
		}
	</script>
</body>
</html>