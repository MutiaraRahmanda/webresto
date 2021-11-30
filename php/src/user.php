<?php

	include 'accessUser.php';
	$nama = $_SESSION['nama'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fbootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/style.css">
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fnav.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap.min.js"></script>	
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="super">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<h3 class="welcomeUser"> <b>Selamat Datang <div class="nameUser"><?php echo $nama; ?></div></b> </h3>
				<div class="sementara"></div>
			</div>
			<div class="col-lg-7">
					<form method="POST" action="gateway.php">
						<p align="right"><input type="submit" class="btn btn-success superup2" name="out" value="LOGOUT" >		
					</form>
				</p>				
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td>jhon</td>
						<td>Doe</td>
						<td>jhon@gmail.com</td>
					</tr>
					<tr class="danger">
						<td>Mary</td>
						<td>Moe</td>
						<td>mary@gmail.com</td>
					</tr>
					<tr class="info">
						<td>July</td>
						<td>Dooley</td>
						<td>july@gmail.com</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>
</body>
</html>

