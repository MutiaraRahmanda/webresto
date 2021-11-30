<?php 

include 'connect.php';
session_start();

if (isset($_POST['add'])) {
	$Nnama		=	$_POST['name'];
	$Nphone		=	$_POST['phone'];
	$Naddress	=	$_POST['address'];
	$Nid		=	$_POST['id'];
	$Npassword	=	sha1($_POST['paswd']);


	if (!empty($Nnama) && !empty($Nphone) && !empty($Naddress) && !empty($Nid) && !empty($Npassword)) {

		if (is_numeric($Nphone) && is_numeric($Nid)) {

			$query2 = "SELECT id FROM anggota where id = '$Nid' ";
			$go2 = mysqli_query($check,$query2);
			$cek2= mysqli_num_rows($go2);

		  	if ($cek2==0) {
					$add  = mysqli_query($check,"INSERT INTO anggota SET id = '$Nid', nama = '$Nnama', telp = '$Nphone', alamat = '$Naddress',
					 password = '$Npassword' ") or ("Data salah".mysqli_error($check));
					
					if ($add) {
						echo "DATA BERHASIL DITAMBAHAKAN<br>";

					}else{
						echo "GAGAL MENAMBAHKAN";
					}

				}else{
					echo "ID SUDAH TERDAFTAR";

				}
		}else{
			echo "Isikan data dengan benar";
		}
		
	}else{
		echo "Isi semua field";

	}

}

 ?>