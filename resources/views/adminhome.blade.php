<!DOCTYPE html>
<html>
<head>
	<title>Admin HOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">






<style>
/*body{
  background-image: url(images/card.jpg);
   background-position: 162% 35%;
}*/

/** {
  box-sizing: border-box;
}

.zoom {
  /*padding: 50px;*/
  background-color: transparent;
  transition: transform .0s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1); /* IE 9 */
  -webkit-transform: scale(1); /* Safari 3-8 */
  transform: scale(1); 
}*/
</style>

</head>
<body>
  <nav>
  <!-- <nav class="navbar navbar-inverse"> -->
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/navhome">Movie Time</a>
    </div>
    <ul class="nav navbar-nav">
     
      <!-- <li><a href="#">Back</a></li> -->
 <!--      <li><a href="/nav1">Home</a></li> -->
        <li><a href="/navback"><span class="  glyphicon glyphicon-arrow-left"></span> </a></li>
       <li><a href="/adminhome"><span class="glyphicon glyphicon-home"></span> </a></li>

    </ul>


    <ul class="nav navbar-nav navbar-right">
 <!--      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
       
       <li><a href="/"><span class=""></span><b>Logout Admin</b> </a></li>
    </ul>
  </div>
</nav>



<div class="card8">
 
  <img src="images/am.png" class="cardimg" alt="Avatar" style="width:100%">
  <div></div>
 <div class="cardcontainer-login100-form-btn5">      
<a href="/addmovies">     
  <input type="submit" name="IMDB" class="cardlogin100-form-btn" value="Add Movies" >
    </input></a>
  </div>

</div>




<div class="card9">
  <img src="images/vm.png" class="cardimg" alt="Avatar" style="width:100%">
  <div></div>
 <div class="cardcontainer-login100-form-btn5">      
 <a href="/viewmovies">      
  <input type="submit" name="IMDB" class="cardlogin100-form-btn" value="View Movies" >
    </input></a>
  </div>
   



</div>
<div class="card10">
  <img src="images/at.png" class="cardimg" alt="Avatar" style="width:100%">
  <div></div>
 <div class="cardcontainer-login100-form-btn5">      
 <a href="/addtheatre">      
  <input type="submit" name="IMDB" class="cardlogin100-form-btn" value="Add Theatre" >
    </input></a>
  </div>
   



</div>
<div class="card11">
  <img src="images/vt.png" class="cardimg" alt="Avatar" style="width:100%">
  <div></div>
 <div class="cardcontainer-login100-form-btn5">      
  <a href="/viewtheatre">      
  <input type="submit" name="IMDB" class="cardlogin100-form-btn" value="View Theatre" >
    </input></a>
  </div>
   
</div>

<!-- <div class="card12">
  <img src="images/pic3.jpg" class="cardimg" alt="Avatar" style="width:100%">
  <div></div>
 <div class="cardcontainer-login100-form-btn5">      
  <a href="/addsongs">      
  <input type="submit" name="IMDB" class="cardlogin100-form-btn" value="Add Songs" >
    </input></a>

   
</div>
</div> -->




<div class="card13">
  <img src="images/bookings.png" class="cardimg" alt="Avatar" style="width:100%">
  <div></div>
 <div class="cardcontainer-login100-form-btn5">      
  <a href="/viewbooking">      
  <input type="submit" name="IMDB" class="cardlogin100-form-btn" value="View Booking" >
    </input></a>

   
</div>
</div>

<div class="card8q">
 
  <img src="images/mask12.jpg" class="cardimg" alt="Avatar" style="width:100%">
  <div></div>
 <div class="cardcontainer-login100-form-btn5">      
<a href="/addmovies">     
  <input type="submit" name="IMDB" class="cardlogin100-form-btn" value="Mail Info" >
    </input></a>
  </div>

</div>





	@if(session('status'))
		<div class="alert alert-info">{{session('status')}}</div>
	@endif

</body>
</html>