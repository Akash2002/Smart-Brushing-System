<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include 'connection.php';
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="http://localhost:8080/mainpage.<?php  ?>">Home</a></li>
        <li><a href="http://localhost:8080/aboutme.html">About Me</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
          aria-haspopup="true" aria-expanded="false"> Toothbrush Time Sensor <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost:8080/bargraph.php">Data Graph</a></li>
            <li><a href="http://localhost:8080/displayData.php">Data Table</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="page-header">
     <h1>IoT Solutions</h1>
	</div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <div class="item active">
      <div class="slide1"></div>

      <div class="carousel-caption">

      	<h3>Technology controls the Present</h3>
      </div>
    </div>
    <div class="item">
      <div class="slide2"></div>
      <div class="carousel-caption">
      	<h3 style="color:black">Better Technology, Easier lives!</h3>
      </div>
    </div>
    <div class="item">
      <div class="slide3"></div>
      <div class="carousel-caption">
      	<h3 style="color:black">Stay Connected</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

</nav>
</div>
<style>

.codequote
{
  width:450px;
  padding:5%;

}
.slide1
{
  background-image: url("coding.png");
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  opacity:0.6;
}
.slide2
{
  background-image: url("phone.png");
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  opacity:0.6;

}
.slide3
{
  background-image: url("earth.png");
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  opacity:0.6;

 }

#container
{
  background-color: #D8FEFD;
}
a
{
  color:black;
}
a:hover
{
  color:#FFE600;
}

.red-icon {
  color:#ff0000;
}
.green-icon {
  color:#009933;
}
.table-responsive
{
  width:50%;
}

body
{
  background-image:;
}
.dropdown:hover .dropdown-menu {
display: block;
}
</style>

<div id = "container" class="container">

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">

<h2> The world is moving towards IoT </h2>
<h4 class="lead">Technologic improvements have been happening for ages. But Why?
  Making people's lives easier is being a hobby rather than
  for courtesy. A phrase has been achieved by the world
  which is "Anyone can do anything". Many students are doing
  IoT projects including me. The world is beginning to
  turn all the way around.
</h4>
</div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
  <h4> Achieve anything with IoT </h4>
  <img src="Iot1.png" width=300px height=200px/>
</div>
</div>
</div>
<div id = "container" class="container">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
    <img src="IoT2.png" width=300px height=200px/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
         <h2> Calculate your Brushing Time?</h4>
         <h4 class="lead"> Brushing our teeth is an important part of our lives.
  But, are you brushing for the right amount of time?
  In order to check on that, I have created an IoT solution
  to count the seconds the user has brushed. Statistical data graphs and
  tables have been included to make reading the data easier. </h4>
    </div>
  </div>
</div>
<hr>
  <center><h1 class = "header"> My Other Projects </h3></center>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
    <img src="IoT2.png" width=300px height=200px/>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
         <h2> <a href = "https://youtu.be/NMVVKpt7PHo"> Led Wifi Control </a> </h4>
         <h4 class="lead"> Having people get up to switch off the light ,or when you have left
           the house lights turned on while you is old school. So, to make that easier, I have
           made a system to control a LED using any device you have. Adjust brightness, switch
           it <button class="btn btn-info btn-xs">on</button> or <button class="btn btn-info btn-xs">off </button> !
    </div>
  </div>
</div>
<hr>
<div id = "container" class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
      <h2> Park Smartly!</h2>
      <h4>Have you ever seen lots of people wander in the parking lot searching for a place to
        park their car? It can cause traffic, accidents and of course, frustation! To solve that
         problem, I am presenting the smart parking lot system. It can tell you which place is
         free to park and which is not. This can be really useful.
    </div>
    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
      <h4> Better Parking! </h4>
        <img src="parking.png" width=300px height=200px/>

    </div>
  </div>
</div>
</div>
</div>
</div>

<hr>
<footer>
  copyright 2016
</footer>
</body>
</html>
