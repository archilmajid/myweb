<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<?php include 'extensions.php'; ?>
	<style type="text/css">
		#myCarousel{
			width: 74%;
		}
    #footer{
      margin-bottom: 0px;
     }
		
  .affix {
      top: 20px;
      z-index: 9999 !important;
  }
  #footer{
    padding-top: 15px;
    color: #fff;
    margin-bottom: 0px;
  }
  .col-sm-9{
    padding-bottom: 52px;
  }
  #kotak{
    background-color: #ffffff;
    color: #111111;
  }
  .item h1 {
    background-color: transparent;
    color: #F89406;
    font: 'Hello';
    font-style: 'Hello';
  }
  @font-face{
    font-family: 'Hello';
    font-style: normal;
    src: url(assets/fonts/hello script/hello-script.ttf);
  }
	</style>
</head>
<body>

	<!-- Navbar -->
	<?php include 'header.php'; ?>

	<!-- Sidebar -->
	<nav class="col-sm-3" id="myScrollspy">
      <ul class="nav navbar" id="kotak">
        <h2>Promo Spesial</h2>
        <img src="assets/img/food/ramen.jpg" width="80%">        
      </ul>
    </nav>

	<!-- Carousel -->
	<div class="col-sm-9">
		
	
	
  		<!--h2>Carousel Example</h2-->
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    		<!-- Indicators -->
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
     			<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <h1 class="text-center">Welcome To Kid's Cafe & Resto</h1>
        <img src="assets/img/food/pancakes.jpg" alt="contoh" style="width:100%;">
        <div class="carousel-caption">
          <h3>Pancakes</h3>
          <p>A delicious cake...</p>
        </div>
      </div>

      <div class="item">
        <h1 class="text-center">Welcome To Kid's Cafe & Resto</h1>
        <img src="assets/img/food/spaghetti.jpg" alt="contoh" style="width:100%;">
        <div class="carousel-caption">
          <h3>Spaghetti</h3>
          <p>Italian special foodies...</p>
        </div>
      </div>
    
      <div class="item">
        <h1 class="text-center">Welcome To Kid's Cafe & Resto</h1>
        <img src="assets/img/food/lasagna.png" alt="contoh" style="width:100%;">
        <div class="carousel-caption">
          <h3>Lasagna</h3>
          <p>Special food made by love..</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
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
<br>
<br>
<div class="text-center col-sm-12 navbar navbar-inverse" id="footer">
  <footer>
    <p>Kid's Cafe &copy; 2017</p>
  </footer>
</div>

</body>
</html>