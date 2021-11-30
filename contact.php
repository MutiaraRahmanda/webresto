<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fbootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/style.css">
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fnav.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap.min.js"></script>	

</head>
<body>

<?php include 'header1.php';  ?>

<div class="super">
	
<div class="container">
	<div class="row contactSpace">
		<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">
			
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<p class="contactus"><b> CONTACT US</b></p>
				<p class="sub"><b>PHONE</b></p>
				<p class="sub1">085.370.923310</p>
				<p class="sub"><b>EMAIL</b></p>
				<p class="sub1">jhonfirstforemost.gmail.com</p>
				<p class="sub"><b>HOURS</b></p>	
				<p class="sub1">7am-7pm daily</p>			
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="containerex">
				  <form action="/action_page.php">
				    <label for="fname">Your Name</label>
				    <input type="text" id="fname" class="form-control" name="fname" placeholder="Your name..">

				    <label for="email">Your email</label>
				    <input type="text" id="femail" class="form-control" name="femail" placeholder="Your email..">

				    <label for="country">Country</label>
				    <select id="fcountry" class="form-control" name="fcountry">
				      <option value="australia">Australia</option>
				      <option value="canada">Canada</option>
				      <option value="Indonesia">Indonesia</option>
				      <option value="usa">USA</option>
				      <option value="other">Other</option>
				    </select>

				    <label for="subject">Subject</label>
				    <textarea id="fsubject" class="form-control" name="fsubject" placeholder="Want to say hello?" style="height:200px"></textarea>

				    <!-- <input type="submit" value="Submit"> -->
				    <a href="mailto:?subject=Subject atau judul disini&body=Pesan tulisan yang di tubuh disini"><input type="submit" class=" btn-success" name="login" value="LOGIN" ></a>
				  </form>
			</div>
		</div>
	</div>
</div>

<div class="space3">
	
</div>

<footer>
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
					  <form action="">
					    <input type="text" class="form-control" id="fname" name="sendEmail" placeholder="Your email">

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
	<
</footer>


</div>
</body>
</html>