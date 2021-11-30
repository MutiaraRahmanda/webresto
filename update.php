<?php include 'accessUser.php'; ?>
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
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fbootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/style.css">
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fnav.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap.min.js"></script>	
</head>
<body>

<div class="super">

<?php include 'headerUser.php'; ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-1">
				
			</div>
			<div class="col-lg-5">
				<p class="Myprofile2"> Your Profile</p>
				<p class="sub"><b>MEMBER ID</b></p>
				<p class="sub1"><?php echo $username; ?></p>
				<p class="sub"><b>NAME</b></p>
				<p class="sub1"><?php echo $namav; ?></p>
				<p class="sub"><b>PHONE</b></p>
				<p class="sub1"><?php echo $telpv; ?></p>
				<p class="sub"><b>ADDRESS</b></p>
				<p class="sub1"><?php echo $alamatv; ?></p>
			</div>
			<div class="col-lg-5">
				<form id="updateProfile" class="space6a">
					<center><h1  class="space3"><b>Want to change?</b></h1></center>
					ID : <br> <input type="text" class="form-control" name="id" readonly value="<?php echo $username ?>"><br>
					Name : <input type="text" class="form-control" name="name"><br>
					Phone number : <input type="text" class="form-control" name="phone"><br>
					Address : <br> <input type="text" class="form-control" name="address"><br>
					Password : <br> <input type="text" class="form-control" placeholder="your old password or create a new password" name="paswd"><br>
					<center><input type="submit" class=" btn-success superup2" name="update" value="Update profile" ></center>

				</form>
				
			</div>
			<div class="col-lg-1">
			</div>
		</div>
	</div>
	<div id="messageModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body diamond"></div>
			</div>
		</div>
	</div>

<?php include 'footer1.php'; ?>

</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#updateProfile').on('submit', (function(e) {
				e.preventDefault();

				$.ajax({
					method: 'POST',
					url: 'updateProcess.php',
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(response) {
						$('#messageModal').modal('show');
						$('#messageModal .modal-body').html(response);
					}
				})
			}))
		})
	</script>
</body>
</html>