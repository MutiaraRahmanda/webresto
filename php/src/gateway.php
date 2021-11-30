 <?php 
session_start();
include 'connect.php';

if (isset($_POST['login'])) {

  	$username= $_POST['username'];
  	$password= sha1($_POST['password']);
	$query = "SELECT * FROM anggota where id = '$username' AND password = '$password'";
	$query2 = "SELECT * FROM user_admin where username = '$username' AND password = '$password'";
  	$go = mysqli_query($check,$query);
  	$go2 = mysqli_query($check,$query2);


  	$cek= mysqli_num_rows($go);
 		 if ($cek==0) {
 
			  	$cek2= mysqli_num_rows($go2);
			  		if ($cek2==0) {
			 			header("location: logpage.php");  			
			  		}else{

					  	$ambil = mysqli_fetch_array($go2,MYSQLI_ASSOC);
						  $_SESSION['nama'] = $ambil['username'];
						  $_SESSION['username'] = $username;
						  $_SESSION['password'] = $password;
						  header("location: welcome.php");		  			
			  		}					
		  }else{
			session_start();
		  	$ambil = mysqli_fetch_array($go,MYSQLI_ASSOC);
			  $_SESSION['nama'] = $ambil['nama'];
			  $_SESSION['username'] = $username;
			  $_SESSION['password'] = $password;
			  header("location: user1.php");

		  }
}

if (isset($_GET['act'])&&$_GET['act']=='out') {
			// unset($_SESSION['nama']);
			// unset($_SESSION['password']);

			session_destroy();
			header("location: logpage.php");
		}

 ?>

