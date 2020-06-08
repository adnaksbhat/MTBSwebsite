<!DOCTYPE html>
<html>
<head>
	<title>View Booking</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
 	table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color:#f5f5f5;}
body{
	background-color: white;
}
 </style>


</head>
<body>


<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <center>
  <table border="9">
		<thead>
		    <th>ID</th>
			<th>Movie id</th>
			<th>Theatre id</th>
			<th>Seats</th>
      <th>Action</th>
		</thead>
		<!-- it loops unitl every item is there -->
		@foreach($res as $item)     
		<tbody id="myTable">
			<td>{{$item->id}}</td>
			<td>{{$item->mid}}</td>
				<td>{{$item->tid}}</td>
			<td>{{$item->not}}</td>
	     <td><a href="viewbooking/{{$item->id}}">Cancel</a></td>
		</tbody>
     @endforeach
	</table>
</center>
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>