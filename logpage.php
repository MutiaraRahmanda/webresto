<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fbootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/style.css">
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fnav.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap.min.js"></script>	
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php include 'header1.php' ?>

<div class="super">

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-3">
				
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<form method="POST" action="gateway.php" class="space6">
					<center><h1  class="space3"><b>Login</b></h1></center>
					Username : <input class="form-control" type="text" name="username"><br>
					Password : <input class="form-control" type="password" name="password"><br>
					<center><input type="submit" class=" btn-success superup2" name="login" value="LOGIN" ></center>
				</form>
			</div>

			<div class="col-lg-4 col-md-3 col-sm-3">
			</div>
		</div>
	</div>


<!-- footer -->
<?php include 'footer1.php'; ?>

</div>

</body>
</html>