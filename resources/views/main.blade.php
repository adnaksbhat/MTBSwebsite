<!DOCTYPE html>
<html>
<head>
	<title>Movie Time</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/main.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/cardstyle.css') }}">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
  .footer {
   position: fixed;
  
   left: 0;
   bottom: 0;
   width: 100%;
   height: 100px;
   background-color: red;
   color: white;
   text-align: center;
}
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif;
/*background-image: url(/images/38933.jpg);
background-repeat: no-repeat;
/*background-size:100% 100%;*/*/
/*background-size:  100% 100% 100% 100% 100% 100%;*/
/*background-size:contain;*/
/*background-color: #FFFFFF;*/
}
/*.mask {
   max-width: 100vw; 
    max-height: 100vh; /* or you can use 100% to expand it through the available space */
    
    background-position: center top;
    background-size: cover;
    background-repeat: no-repeat;

}*/





</style>




</head>




<!-- <body style="background-image: url(/images/38933.jpg);
background-repeat: no-repeat; height: 100%;width: 100%; background-size: auto;"> -->
    <div class="limiter">
     

<!-- Navbar -->
<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MOVIE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> -->



<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
        <a href="/main">
   <img src="/images/awww.png" style="width:38px;height:38px;margin-top: 7px;margin-left: -8px;" >
      </a> &nbsp; &nbsp; &nbsp;

     
    </div>



      <ul class="nav navbar-nav">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-menu-hamburger"></span></a>
        <ul class="dropdown-menu"><b>
          <li><a href="/book"><b>Book Show</b></a></li>
          <li><a href="/imdb"><b>IMDB</b></a></li>
          <li><a href="/songs">Songs</a></li>
          <li><a href="/awards">Awards</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/help">Help</a></li>
          <li><a href="https://forms.gle/eNBzLeee3udTTCpRA">Feedback</a></li>    
          <li><a href="/">Logout</a></li>  </b>
        </ul>
      </li>
      <!-- dropdown menu styles n all are in menu.css -->
  
     

        <li><a href="/navindex"><span class="  glyphicon glyphicon-arrow-left"></span>  Back </a></li>
       <li><a href="/navhome"><span class="glyphicon glyphicon-home"></span>  Home </a></li>

    </ul>


    <ul class="nav navbar-nav navbar-right">

       
       <li><a href="/navplus"><span class=" glyphicon glyphicon-question-sign"></span>  Help</a></li>
    </ul>
  </div>















<!-- header -->
<!-- NOTE!!!!     the header is inside nav tag.... or elz it will leave space -->


<header class="w3-container w3-center w3-padding-32" style=" height: 260px;background-color:black; background-image: url(/images/mask12.jpg);width: 100%;  background-size:contain; background-repeat: no-repeat;  background-position: left;  "> 
  <!-- <div class="mask"> -->
  <h1 style="width: 20%;color: white; position: center;margin-left: 40%;"><b>Book Your Show</b></h1>
  
    <!-- <img src="/images/mask.jpg"> -->
  
  <p >Movie Database <span class="w3-tag"></span></p>
<!-- </div> -->
</header>


</nav>


































<!-- Posts -->
<div style="margin-left: 20px;  height: 70%;">
  <div class="w3-card w3-margin" style="width: 34%;">
   <!--  <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div> -->
    <ul class="w3-ul w3-hoverable w3-white" ><a href="/awards">
      <li class="w3-padding-16">
        <img src="/images/awww.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Awards</span><br>
        <span><a href="/oscars">Oscars</a>  &nbsp; &nbsp;<a href="/emmy"> Emmy</a>&nbsp;   &nbsp;<a href="/grammy"> Grammy </a>&nbsp; &nbsp;<a href="/iifa"> IIFA</a></span>
      </li></a>
      <li class="w3-padding-16"><a href="/news">
        <img src="/images/news.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">News</span><br>
        <span><a href="https://celebritypage.com/?gclid=Cj0KCQjwjOrtBRCcARIsAEq4rW710uCZBIHwj3GEu39P6DygAkkUUTrdP7djONaNys3sNvsv8ydIH0YaAslyEALw_wcB"> Hollywood</a> &nbsp; &nbsp;<a href="https://www.bollywoodnews.org"> Bollywood</a></span></a>
      </li> 
      <li class="w3-padding-16">
        <img src="/images/contact.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px; ">
       <a href="/contact"> <span class="w3-large">Contact</span><br>
        <span>For more booking queries</span></a>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="/images/song.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
       <a href="https://gaana.com/playlist/sikandarkhan103-songspkcom"><span class="w3-large">Song</span></a><br>
        <span>Play Tunes</span>
      </li>  
       <li class="w3-padding-16 w3-hide-medium w3-hide-small">
       <img src="/images/imdb.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.imdb.com/"> <span class="w3-large">IMDB</span></a><br>
        <span>Likings Ratings</span>
      </li>
    </ul>
  </div>
</div>
 



















<!-- corousal -->
   <!-- <div class="container-loginq1"> -->
  <div class="corouselcontainer" style="margin-top: -440px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
         <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    
    <div class="carousel-inner">


      <div class="item active">
         <a class="txt2" > 
        <img src="images/actions2.jpg" alt="action" style="width:100%; height: 410px;">
    <div class="carousel-caption d-none d-md-block" style="font-family: Arial, Helvetica, sans-serif; color:white; ">
         <h2>ACTION</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>
      </div>


      <div class="item">
      	<a class="txt2">
        <img src="images/ho.jpg" alt="action" style="width:100%;  height: 410px;">
          <div class="carousel-caption d-none d-md-block" style="font-family: Arial, Helvetica, sans-serif; color:white; ">
         <h2>HORROR</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>
        </a>
      </div>
    

      <div class="item">
         <a class="txt2" > 
        <img src="images/romantic.jpg" alt="action" style="width:100%;  height: 410px;">
       <div class="carousel-caption d-none d-md-block" style="font-family: Arial, Helvetica, sans-serif; color:white; ">
         <h2>ROMANTIC</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>
      </div>

       <div class="item">
         <a class="txt2"> 
        <img src="images/ss.jpg" alt="action" style="width:100%;  height: 410px;">
          <div class="carousel-caption d-none d-md-block" style="font-family: Arial, Helvetica, sans-serif; color:white; ">
         <h2>SCI-FICTION</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>
      </div>
   
       <div class="item">
         <a class="txt2" > 
        <img src="images/comedy.jpg" alt="action" style="width:100%;  height: 410px;">
        <div class="carousel-caption d-none d-md-block" style="font-family: Arial, Helvetica, sans-serif; color:white; ">
          <h2>COMEDY</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>
      </div>

     <div class="item">
         <a class="txt2" > 
        <img src="images/animation.jpg" alt="action" style="width:100%;  height: 410px;">
         <div class="carousel-caption d-none d-md-block" style="font-family: Arial, Helvetica, sans-serif; color:white; ">
         <h2>ANIMATION</h2>
           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        </div>
      </div>
    </div>
   
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!-- 
 <div style="width: 290px;height: 290px; margin-left: 85%; margin-top: 7%;"><img src="images/pics3.jpg " style="width: 290px;height: 290px;"></div> -->








<div class="containerticket" style="margin-left: 2.5%; margin-top: 7%;">
<div class="cardticket">
  <img src="images/mv2.jpg" class="cardimgqq" alt="Avatar" style="width:100%;height: 100%;">
  <div class="cardcontainer">
    <!-- <h4><b>John Doe</b></h4>  -->
    <!-- <p class="cardcontainer2">Architect & Engineer</p>  -->
  </div>
 <div class="cardcontainer-login100-form-btn" style="position: center;">      
     <a class="txt2" href="/book">      
      <input type="submit" name="IMDB" class="cardlogin100-form-btnqq2"  value="BOOK Tickets" >
    </input></a>
</div>
   
</div>
</div>

















<!-- cards -->

<div class="card1">
  <img src="images/imdb.jpg" class="cardimg" alt="Avatar" style="width:100%">
  <div class="cardcontainer">
    <!-- <h4><b>John Doe</b></h4>  -->
    <!-- <p class="cardcontainer2">Architect & Engineer</p>  -->
  </div>
 <div class="cardcontainer-login100-form-btn" style="position: center;">			
 <a class="txt2" href="https://www.imdb.com/">			
	<input type="submit" name="IMDB" class="cardlogin100-form-btnqq" value="IMDB" >
		</input></a>
	</div>
   
</div>

<div class="card2">
  <a class="txt2" href="https://gaana.com/playlist/sikandarkhan103-songspkcom">      
  <img src="images/song.jpg" class="cardimg" alt="Avatar" style="width:100%">
  <div class="cardcontainer">
    <!-- <h4><b>John Doe</b></h4>  -->
    <!-- <p class="cardcontainer2">Architect & Engineer</p>  -->
  </div>
 <div class="cardcontainer-login100-form-btn">	
  			
	<input type="submit" name="song" class="cardlogin100-form-btnqq" value="song" >
		</input></a>
	</div>
   
</div>

<div class="card3">
  <img src="images/awww.png"  class="cardimg" alt="Avatar" style="width:100%">
  <div class="cardcontainer">
    <!-- <h4><b>John Doe</b></h4>  -->
    <!-- <p class="cardcontainer2">Architect & Engineer</p>  -->
  </div>
 <div class="cardcontainer-login100-form-btn">			
  <a class="txt2" href="/awards">  			
	<input type="submit" name="Awards" class="cardlogin100-form-btnqq" value="Awards" >
		</input></a>
	</div>
   
</div>

<div class="card4">
  <img src="images/news.png"  class="cardimg" alt="Avatar" style="width:100%">
  <div class="cardcontainer">
    <!-- <h4><b>John Doe</b></h4>  -->
    <!-- <p class="cardcontainer2">Architect & Engineer</p>  -->
  </div>
 <div class="cardcontainer-login100-form-btn"> 
  <a class="txt2" href="/news">             
  <input type="submit" name="news" class="cardlogin100-form-btnqq" value="News" >
    </input></a>
  </div>
   </div>
</div>
</div>














<!-- 
<div class="footer">
  <p></p>
</div> -->












</div>

</body>
</html>