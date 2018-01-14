<!DOCTYPE html>
<html>
<head>
	<title>PESANAN</title>
	<?php include 'extensions.php'; ?>
	<style type="text/css">
		footer{
    		padding-top: 15px;
 	    	color: #fff;
    		margin-bottom: 0px;
  		}
  		#footer{
  			margin-bottom: 0px;
  		}
  		.container {
  			padding-bottom: 20px;
  			height: 540px;
  		}
  		thead{
  			background-color: #F9690E;
  			color: #ffffff;
  		}
  		.hijau{
  			background-color: green;
  			color: #ffffff;
  		}
  		.kuning{
  			background-color: yellow;
  			color: #111111;
  		}
  		.merah{
  			background-color: red;
  			color: #ffffff;
  		}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<center>
			<div class="kotak1 col-sm-12">
				<div class="kotak2">
					
					<h1><img src="assets/img/logo-cafe.png" width="10%"> LIST PESANAN <img src="assets/img/logo-cafe.png" width="10%"></h1>
					
					<br><br>

					<div class="table-responsive">
						<table class="table table-hover table-bordered table-stripted">
							<thead>
								<tr>
									<th>No. Meja</th>
									<th>Pesanan</th>
									<th>Jumlah</th>
									<th>Validasi</th>
								</tr>
							</thead>
							<tbody>
								<tr class="merah">
									<td>1</td>
									<td>Pancakes</td>
									<td>3</td>
									<td>Belum Dimasak</td>
								</tr>
								<tr class="kuning">
									<td>1</td>
									<td>Bakpia</td>
									<td>2</td>
									<td>Sedang Dimasak</td>
								</tr>
								<tr class="kuning">
									<td>1</td>
									<td>Mie Tiaw</td>
									<td>1</td>
									<td>Sedang Dimasak</td>
								</tr>
								<tr class="hijau">
									<td>2</td>
									<td>Ayam Kremes</td>
									<td>1</td>
									<td>Pesanan Selesai</td>
								</tr>
								<tr class="hijau">
									<td>2</td>
									<td>Es Teh Susu</td>
									<td>5</td>
									<td>Pesanan Selesai</td>
								</tr>
								<tr class="kuning">
									<td>2</td>
									<td>Ayam Geprek</td>
									<td>4</td>
									<td>Sedang Dimasak</td>
								</tr>
							</tbody>
						</table>
					</div>

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