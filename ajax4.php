<?php include 'accessUser.php'; ?>
<?php
if(isset($_POST['key'])){
      define("LOGIN",TRUE);
      include "connect.php";

      if($_POST['key']=='addnew'){
        $date =  mysqli_escape_string($check,$_POST['DateOrder']);
        $member_id = mysqli_escape_string($check,$_POST['member_id']);
        $check_in = mysqli_escape_string($check,$_POST['checkIn']);
        $check_out = mysqli_escape_string($check,$_POST['checkOut']);
        $tables = mysqli_escape_string($check,$_POST['tables']);
        $hasilquery = mysqli_query($check,"INSERT INTO reservasi(member_id,tanggal,check_in,check_out,jumlah_meja) VALUES ('$member_id','$date','$check_in','$check_out','$tables')");

        // if ($hasilquery) {
        //   exit('Data Has Been Added');
        // }

      }

      if($_POST['key']=='getData'){
        $start = mysqli_escape_string($check,$_POST['start']);
        $limit = mysqli_escape_string($check,$_POST['limit']);
        $hasilquery = mysqli_query($check,"SELECT * FROM reservasi LIMIT $start, $limit");
        if(mysqli_num_rows($hasilquery)>0){
          $response = "";
          while($data = mysqli_fetch_array($hasilquery)){
            $response .= '
              <tr>  
                <td>'.$data['reservasi_id'].'</td>
                <td>'.$data['tanggal'].'</td>
                <td>'.$data['member_id'].'</td>
                <td>'.$data['check_in'].'</td>
                <td>'.$data['check_out'].'</td>
                <td>'.$data['jumlah_meja'].'</td>
              </tr>

            ';
          }
          exit($response);
        }else {
          exit('limitMax');
        }

        // exit('Data Barang Has Been Inserted');
      }

      if($_POST['key']=='getData1'){
        $start = mysqli_escape_string($check,$_POST['start']);
        $limit = mysqli_escape_string($check,$_POST['limit']);
        $hasilquery = mysqli_query($check,"SELECT * FROM reservasi where member_id='$username' LIMIT $start, $limit");
        if(mysqli_num_rows($hasilquery)>0){
          $response = "";
          while($data = mysqli_fetch_array($hasilquery)){
            $response .= '
              <tr>  
                <td>'.$data['member_id'].'</td>
                <td>'.$data['reservasi_id'].'</td>
                <td>'.$data['tanggal'].'</td>
                <td>'.$data['check_in'].'</td>
                <td>'.$data['check_out'].'</td>
                <td>'.$data['jumlah_meja'].'</td>
              </tr>

            ';
          }
          exit($response);
        }else {
          exit('limitMax');
        }

        // exit('Data Barang Has Been Inserted');
      }
      
      mysqli_close($check);  //KNAPA KOK ADA INI
    }
?> 