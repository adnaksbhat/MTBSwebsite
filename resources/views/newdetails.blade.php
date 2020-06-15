<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>

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


  <br>
  <center>




    <div class="card1qw">
  <div class="cardcontainer"><br>
    <input type="submit" name="IMDB" class="cardlogin100-form-btnqq1qwe" value= "username: {{$uname}} ">
  </input><br>
     <div>
      <input type="submit" name="IMDB" class="cardlogin100-form-btnqq1qwe" value={{$mname}} >
        </input><br>
    </div>
      <input type="submit" name="IMDB" class="cardlogin100-form-btnqq1qwe" value={{$tname}} >
        </input><br>
         <input type="submit" name="IMDB" class="cardlogin100-form-btnqq1qwe" value={{$uemail}} >
        </input>
    </div>

  </div>
</div>
<br>
<br>
 <a class="txt2" href="/ok">             
  <input type="submit" name="ok" class="cardlogin100-form-btnqqqwqw" value="<-Back" >
    </input></a>



</center>


</body>
</html>