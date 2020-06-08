<!DOCTYPE html>
<html>
<head>
	<title>Contact Here</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <meta charset="utf-8">
    <!-- <meta charset="utf-8"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
 <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cardstyle.css') }}"> -->
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<style>
body{
	background-color: white;

}

.skanda {
	margin-top: 15px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 260px;
  margin: auto;
  height: 200px;
  text-align: center;
  font-family: arial;
  /*margin-left: 22%;*/
  padding: 5px;
}
.prahlad {
	top: 15px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 260px;
  margin: auto;
  height: 200px;
  text-align: center;
  font-family: arial;
  /*margin-left: 52%;*/
  padding: 5px;
}
.column1 {
  float: left;
  width: 25%;
  padding: 0 10px;
  margin-left: 20%;
}
.column2 {
  float: right;
  width: 25%;
  padding: 0 10px;
  margin-right: 20%;
}
.title {
  color: grey;
  font-size: 18px;
}
.im1{
	height: 310px;
	width: 30px;
	border: 2px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
	<nav>
  <div class="container-fluid">
    <div class="navbar-header">
   <!-- <img src="/images/awww.png" > -->
   <a href="/main">
	 <img src="/images/awww.png" style="width:38px;height:38px;margin-top: 7px;margin-left: -8px;" >
      </a> &nbsp; &nbsp; &nbsp;
    </div>



      <ul class="nav navbar-nav">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-menu-hamburger"></span></a>
        <ul class="dropdown-menu" style="font-size: 2px;"><b>
        	       <li><a href="/help">Book Show</a></li>
          <li><a href="/imdb"><b>IMDB</b></a></li>
          <li><a href="/songs">SONGS</a></li>
          <li><a href="/awards">AWARDS</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/help">Help</a></li>
          <li><a href="https://forms.gle/nbvYimLCuSqi2XVM8">Feedback</a></li>  </b>     
        </ul>
      </li>
      <!-- dropdown menu styles n all are in menu.css -->
  
     

        <li><a href="/navback2"><span class="  glyphicon glyphicon-arrow-left"></span>  </a></li>
       <li><a href="/navhome"><span class="glyphicon glyphicon-home"></span></a></li>

    </ul>


    <ul class="nav navbar-nav navbar-right">
>
       
       <li><a href="/navplus"><span class=" glyphicon glyphicon-question-sign"></span> </a></li>
    </ul>
  </div>
</nav>


<!-- <h2 style="text-align:center">User Profile Card</h2> -->
<div class="column1">
<div class="skanda">
  <img src="/images/skanda.jpg" alt="John" class="im1" style="width:100%">
  <h2>Skanda Bhat</h2>
  <p class="title">NMAM Institute Of Technology</p>
  <p>4NM17CS181</p>
  <div style="margin: 24px 0;">
   
    <a href="https://twitter.com/adnaks7bhat"><i class="fa fa-twitter"></i></a> &nbsp;
     <a href="https://www.instagram.com/adnaks_bhat/"><i class="fa fa-instagram"></i></a> &nbsp;
    <a href="https://www.linkedin.com/in/skanda-bhat-922395184"><i class="fa fa-linkedin"></i></a> &nbsp; 
    <a href="#"><i class="fa fa-whatsapp"></i></a> 
  </div>

  <p><button>Contact</button></p>
</div>
</div>

<!-- <h2 style="text-align:center">User Profile Card</h2> -->
<div class="column2">
<div class="prahlad">
  <img src="/images/prahlad.jpg" alt="John2" class="im1" style="width:100%">
  <h2>Prahlad Kamath</h2>
  <p class="title">NMAM Institute Of Technology</p>
  <p>4NM17CS203</p>
  <div style="margin: 24px 0;">
   
    <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;
     <a href="https://www.instagram.com/kamath_prahlad18/"><i class="fa fa-instagram"></i></a>  &nbsp;
    <a href="#"><i class="fa fa-linkedin"></i></a>  &nbsp;
    <a href="#"><i class="fa fa-whatsapp"></i></a> 

  </div>
  <p><button>Contact</button></p>
</div>

</div> 



</body>
</html>