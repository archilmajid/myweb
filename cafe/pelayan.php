<!DOCTYPE html>
<html>
<head>
	<title>Pelayan</title>
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
  		input[type='text'], input[type='number']{
  			width: 50%;
  		}
  		#footer{
  			margin-bottom: 0px;
  		}
  	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<center><h1>Daftar Menu KID'S CAFE AND RESTO</h1></center>
	<div class="container">
		<center>
		<div class="kotak1 col-sm-12">
			<div class="kotak2">
				
				<table class="table table-responsive">
					<thead>
						<th>	
							
							<td class="text">Makanan</td>
							<td class="text">Jumlah</td>
						</th>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Lasagna</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Pancake</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Spaghetti</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Mie Ayam</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Burger</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Ramen</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Zuppa</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="makanan"></td>
							<td class="text">Otak-Otak</td>
							<td><input type="number" name="makanan" min="0" placeholder="0" id="focusedInput"></td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-default">KIRIM</button></td>
							<td></td>
						</tr>
					</tbody>							
				</form>
			</div>
		</div>
		</center>
	</div>

	
</body>
</html>