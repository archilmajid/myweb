
	<?php include 'extensions.php'; ?>
  <style type="text/css">
    .navbar {
      background-color: #F89406;
      color: #ffffff;
    }
    .navbar-inverse{
      border-color: #F89406;
    }
    .glyphicon{
      color: #ffffff;
    }
    a{
      color: #ffffff;
    }
    .navbar-inverse .navbar-nav > .open > a{
      background-color: #F9690E;
    }
    .navbar-inverse .navbar-nav > li > a{
      color: #ffffff;
      padding-right: 25px;
      padding-left: 25px;
    }

    ul .dropdown-menu{
      background-color: #F89406;

    }
    .dropdown-menu > li > a{
      color: #ffffff;
    }
    .dropdown-menu > li > a:hover{
      color: #ffffff;
      background-color: #F9690E;
    }
    .navbar-inverse .navbar-nav > li > a:hover{
      background-color: #F9690E;
    }
    .navbar-inverse .navbar-nav > .open > a:focus{
      background-color: #F9690E;
    }
  </style>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=#myNavbar>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      			<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
    		</div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="menu.php">MENU</a></li>
            <li><a href="pesanan.php">PESANAN</a></li>
            <li><a href="about-us.php">ABOUT US</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  
              </ul>
          </li>
        </ul>
        </div>    		
		</div>
	</nav>
