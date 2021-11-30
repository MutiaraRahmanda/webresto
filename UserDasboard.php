<?php  include 'accessUser.php';  ?>
<?php
			$hasilquery = mysqli_query($check,"SELECT * FROM anggota where id = '$username' AND password = '$password'");
  			if(mysqli_num_rows($hasilquery)>0){
  				// $response = "";
  				while($data = mysqli_fetch_array($hasilquery)){  						
	               $idv = $data['id'];
	               $namav = $data['nama'];
	               $telpv =  $data['telp'];
	               $alamatv =  $data['alamat'];
  				}
  			}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2FbootstrapAdmin.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fresponsive.bootstrap.min.css">
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fnav.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="super">
	<?php include 'headerUser.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-1">
				
			</div>
			<div class="col-lg-5">
				<p class="Myprofile">Hi, <?php echo $namav; ?></p>
				<p class="confirm" align="justify">welcome to your account, relating to the convenience of our service, we provide effective procedures for our members, one of them also for booking the place of course, because handling the reservation directly takes many time besides that our side also sometimes difficulties, especially if there is a mistake in recording, so with this system we hope you can place a reservation without the need to come to the cashier first, in addition to saving time this can also streamline our performance and maximize customer service , okay greetings from us, thank you. </p>
			</div>
			<div class="col-lg-5">
	  			<center><img class="customer1b" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fimages%2Fcustomer.png"></center>
			</div>
			<div class="col-lg-1">
				
			</div>
		</div>
		
	<div class="row">
		<div class="col-lg-1">
			
		</div>
		<div class="col-lg-5">
	  			<center><img class="customer1c img-rounded" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fimages%2Fcustomer3.jpg"></center>
		</div>
		<div class="col-lg-5">
			<p class="Myprofile1">Make your reservation </p>
			<p align="justify">With this account, you can easily place a reservation for the day ahead, even you can make consideration before making a reservation, because we provide you a feature that you can use to view our restaurant reservation schedule </p>
		</div>
		<div class="col-lg-1">
			
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div>
			
		</div>
	</div>
</div>


	<?php include 'footer1.php'; ?>	
	</div>
</body>
</html>