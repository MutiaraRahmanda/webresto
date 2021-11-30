	<?php
		session_start();

			if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
				header('location:login.php');
			} else {
				$username = $_SESSION['username'];
				$password = $_SESSION['password'];
				$nama = $_SESSION['nama'];
			}

			if (isset($_POST['out'])) {
				unset($_SESSION['nama']);
				unset($_SESSION['password']);

				session_destroy();
				header("location: logpage.php");

				//SOALNYA disuruh 2 jadi saya coba semua antara unset dan DESTROY
			}

	?>


<!DOCTYPE html>
<html>
<head>
	<title>Content</title>
</head>
<body>

	 <h2>SELAMAT DATANG <?php echo $nama; ?></h2><br>
	 <form method="POST">

	 <input type="submit" name="out" value="LOG OUT" style="width: 100px; height: 70px;">

	 </form>

</body>
</html>