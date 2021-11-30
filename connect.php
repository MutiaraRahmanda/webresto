<?php

  $databasehost = "10.0.0.156";
  $databaseuser = "admin";
  $databasepass = "Mutiara22!";
  $db_name ="reservation1";
  $check = mysqli_connect($databasehost,$databaseuser,$databasepass,$db_name);

  if(!$check){
    die ("Koneksi gagal, ada masalah pada: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

?>