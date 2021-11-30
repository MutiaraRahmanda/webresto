<!DOCTYPE html>
<html>
<head>
	<title>reservation</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fbootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/style.css">
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fnav.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap.min.js"></script>		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/jquery-ui-datepicker.min.js"></script>
</head>
<body>

<?php include 'header1.php';  ?>

<div class="super">
	
<div class="container">
	<div class="row">
		<div class="col-lg-4">

		</div>
		<div class="col-lg-4">
			
		</div>
		<div class="col-lg-4">
			<form action="" method="POST">
				
				<input type="text" name="tanggal" class="tanggal form-control ins" placeholder="Date" id="DateOrder"><br>
				<input type="text" class="form-control ins" placeholder="Member ID..." id="member_id"><br>
				<input type="text" class="form-control ins" placeholder="Check in..." id="checkIn"><br>
				<input type="text" class="form-control ins" placeholder="Check out..." id="checkOut"><br>
				<input type="text" class="form-control ins" placeholder="Tables..." id="tables"><br>
				<input id="submitForm" type="submit" value="Add" class="btn-success superup2" name="update" onclick="uploadData('addnew');">
			</form>
		</div>
	</div>
</div>




<div class="space3">
	
</div>

<!-- <footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<h3 class="sayfooter"><b>ABOUT US</b></h3>
				<div class="footmenu">
					<p>FAQ</p>
					<p>OUR HISTORY</p>
					<p>NEWS UPDATE</p>
					<p>INFO</p>	
				</div>
				
			</div>
			<div class="col-lg-2">
				<h3 class="sayfooter"><b>CONTACT US</b></h3>
				<div class="footmenu">
					<p>MEMBERSHIP</p>
					<p>DONATION</p>
					<p>SAY HELLO</p>
					<p>HAPPY WITH US</p>	
				</div>
			</div>
			<div class="col-lg-2">
				<h3 class="sayfooter"><b>RESERVATION</b></h3>
					<div class="footmenu">
						
					<p>GET TABLE</p>
					<p>GO FOOD</p>
					<p>BOOKING SERVICE</p>
					
					</div>
			</div>
			<div class="col-lg-1">
				
			</div>
			<div class="col-lg-4">
					<div class="containerex1">
				    <p class="getit">Get updates about our menus and discounts</p>
					  <form action="/action_page.php">
					    <input type="text" id="fname" name="firstname" placeholder="Your email">

					    <input type="submit" value="Get it">
					  </form>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<center><p class="Copyright">Copyright 2017 Jhon's Food. First & Foremost. All rights reserved.</p></center>
			</div>
		</div>
	</div>
	
</footer> -->

</div>
</body>
</html>