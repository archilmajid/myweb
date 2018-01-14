<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include 'extensions.php'; ?>
	<style type="text/css">
		footer{
    		padding-top: 15px;
 	    	color: #fff;
    		margin-bottom: 0px;
  		}
  		.kotak1{
  			background-color: #F9690E;
  			padding-bottom: 15px;
  			padding-top: 15px;
  			margin-top: 100px;
  			border-radius: 1px;
  		}
  		.kotak2{
  			background-color: #F89406;
  			padding-bottom: 15px;
  			padding-top: 15px;
  		}
		.text{
			color: #fff;
		}
		.container {
  			padding-bottom: 20px;
  			height: 540px;
  		}
  		input[type='text'], input[type='password']{
  			width: 60%;
  		}
  		#footer{
  			margin-bottom: 0px;
  		}

	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<center>
		<div class="kotak1 col-sm-12">
			<div class="kotak2">
				<h1 class="text">LOGIN KID'S CAFE AND RESTO</h1>
				<form action="pelayan.php" method="post">
					<div class="form-group">
						<label class="text" for="username">USERNAME</label><br>
						<input type="text" class="form-control" name="username" id="focusedInput">
					</div>
					<div class="form-group">
						<label class="text" for="password">PASSWORD</label><br>
						<input type="password" class="form-control" name="password" id="focusedInput">
					</div>
					<div class="form-group">
						<input type="radio" name="user" value="pelayan" checked> <label class="text">Pelayan</label>
						<input type="radio" name="user" value="koki"> <label class="text">Koki</label>
						<input type="radio" name="user" value="kasir"> <label class="text">Kasir</label>
					</div>
					<button type="submit" class="btn btn-default">SUBMIT</button>
				</form>
			</div>
		</div>
		</center>
	</div>

	<div class="text-center col-sm-12 navbar navbar-inverse" id="footer">
  		<footer>
    		<p>Kid's Cafe &copy; 2017</p>
  		</footer>
	</div>
</body>
</html>