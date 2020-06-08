<!DOCTYPE html>
<html>
<head>
	<title>View Theatre</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">
 <style>
 	table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color:#f5f5f5;}
body{
	background-color: white;
}
 </style>
</head>
<body>
<table border="1">
		<thead>
			<th>ID </th>
			<th>Theatre name</th>
			<th>Location</th>
			<th>Seats</th>
		</thead>
		<!-- it loops unitl every item is there -->
		@foreach($res as $item)     
		<tbody>
			<td>{{$item->id}}</td>
			<td>{{$item->tname}}</td>
				<td>{{$item->location}}</td>
			<td>{{$item->seats}}</td>
	
		</tbody>
     @endforeach
	</table>
</body>
</html>