<?php 

include 'connect.php';

// if (isset($_POST['update'])) {
	$Nnama		=	$_POST['name'];
	$Nphone		=	$_POST['phone'];
	$Naddress	=	$_POST['address'];
	$Nid		=	$_POST['id'];
	$Npassword	=	sha1($_POST['paswd']);


	if (!empty($Nnama) && !empty($Nphone) && !empty($Naddress) && !empty($Nid) && !empty($Npassword)) {

		if (is_numeric($Nphone) && is_numeric($Nid) ) {
			

			$query = "SELECT * FROM anggota where id = '$Nid' ";
			$go = mysqli_query($check,$query);

			$cek= mysqli_num_rows($go);

	 		 if ($cek==0) {
	 		 	
	 		 	echo "ID NOT REGISTERED";
				
			  }else{

					$update  = mysqli_query($check,"UPDATE anggota SET nama = '$Nnama', telp = '$Nphone', alamat = '$Naddress',
					 password = '$Npassword' where id = '$Nid'") or ("Data salah".mysqli_error($check));

					if ($update) {
						echo "Successful data changes<br> PLEASE RELOAD THIS PAGE";

					}else{
						echo "DATA CHANGE FAILED";
					}
			  }

		}else{
			echo "The data entered is incorrect";
		}
		
	}else{
		echo "Fill in all fields";
	}

// }

 ?>