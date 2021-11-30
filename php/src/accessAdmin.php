<?php
	include 'connect.php';
	session_start();
 	$username= $_SESSION['username'];
  	$password= $_SESSION['password'];

	$query2 = "SELECT * FROM user_admin where username = '$username' AND password = '$password'";
	$go2 = mysqli_query($check,$query2);

	$cek2= mysqli_num_rows($go2);

 	if (!isset($_SESSION['username']) && !isset($_SESSION['password']) || $cek2==0) {
		header('location:logpage.php');
	}

 
?>