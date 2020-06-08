<!DOCTYPE html>
<html>
<head>
	<title>Awards</title>




    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">

   <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/oscarstyle.css') }}">


	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/awardsstyle.css') }}">

	<style>
body {
  font-family: 'Lato', sans-serif;
  background-image: url("images/oscarss.jpg");
/*   background-repeat: no-repeat;
  background-attachment: fixed;*/
  /*background-position: center;*/
 background-size: 100%;

}

</style>
</head>



<body>

<nav >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/navhome">Movie Time</a>
    </div>
    <ul class="nav navbar-nav">
     
      <!-- <li><a href="#">Back</a></li> -->
 <!--      <li><a href="/nav1">Home</a></li> -->
        <li><a href="/navback2"><span class="  glyphicon glyphicon-arrow-left"></span> </a></li>
       <li><a href="/navhome"><span class="glyphicon glyphicon-home"></span> </a></li>

    </ul>


    <ul class="nav navbar-nav navbar-right">
 <!--      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
       
       <!-- <li><a href="/navplus"><span class="glyphicon glyphicon-plus-sign"></span> </a></li> -->
    </ul>
  </div>
</nav>







  <img src="images/aw.jpg" height="142" width="420" style="position: absolute;top: 39%;right: 5%" >
   <img src="images/crown.png" height="80" width="80" style="position: absolute;top: 29%;right: 25%" >
    <img src="images/awww.png" height="80" width="80" style="position: absolute;top: 15%;left: 5%" onclick="openNav()" >





<!-- menu -->


	<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div  class="overlay-content">
    <a href="/oscars">OSCARS</a>
    <a href="/emmy">EMMY</a>
    <a href="/iifa">IIFA</a>
    <a href="/grammy">GRAMMY</a>

  </div>
</div>

<!-- <h2>Fullscreen Overlay Nav Example</h2>
<p>Click on the element below to open the fullscreen overlay navigation menu.</p>
<p>In this example, the navigation menu will slide in, from left to right:</p> -->
<span style="font-size:21px;cursor:pointer;color: white" onclick="openNav()">&#9776; Select Award Event</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "35%";
  document.getElementById("myNav").style.height="80%";

}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>


</body>
</html>