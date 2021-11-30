<?php
if(isset($_POST['key'])){
      define("LOGIN",TRUE);
      include "connect.php";

      if($_POST['key']=='addnew'){
        $date =  mysqli_escape_string($check,$_POST['DateOrder']);
        $member_id = mysqli_escape_string($check,$_POST['member_id']);
        // $check_in = mysqli_escape_string($check,$_POST['checkIn']);
        // $check_out = mysqli_escape_string($check,$_POST['checkOut']);
        $tables = mysqli_escape_string($check,$_POST['tables']);
        $hasilquery = mysqli_query($check,"INSERT INTO meja(no_meja,tipe,muatan) VALUES ('$date','$member_id',$tables)");

        // if ($hasilquery) {
        //   exit('Data Has Been Added');
        // }

      }
      if($_POST['key']=='getData'){
        $start = mysqli_escape_string($check,$_POST['start']);
        $limit = mysqli_escape_string($check,$_POST['limit']);
        $hasilquery = mysqli_query($check,"SELECT * FROM meja LIMIT $start, $limit");
        if(mysqli_num_rows($hasilquery)>0){
          $response = "";
          while($data = mysqli_fetch_array($hasilquery)){
            $response .= '
              <tr>  
                <td>'.$data['barcode'].'</td>
                <td>'.$data['no_meja'].'</td>
                <td>'.$data['tipe'].'</td>
                <td>'.$data['muatan'].'</td>
                <td>
                <input type="button" value="edit" id="edit" onclick="edit('.$data['barcode'].')" class="btn btn-primary editBtn">
                <input type"button" value="delete" id="delete" onclick="dels('.$data['barcode'].')" class="btn btn-warning editBtn">
                </td>
              </tr>

            ';
          }
          exit($response);
        }else {
          exit('limitMax');
        }

        // exit('Data Barang Has Been Inserted');
      }
      if($_POST['key']=='selectRow'){
        // $tanggal =  mysqli_escape_string($check,$_POST['DateOrder1']);
        $reservasi_id = mysqli_escape_string($check,$_POST['data']); //PENGARUH DI MUNCULNYA MODAL EDIT  [TAPI GK PAHAM AKU MAKSUD.e DATA ]
        $hasilquery = mysqli_query($check,"SELECT * FROM meja WHERE barcode = '$reservasi_id'");
        if(mysqli_num_rows($hasilquery)>0){
          $data = mysqli_fetch_array($hasilquery);
          $temp = array(
            // 'rev_id1' => $data['reservasi_id'],
            'barcode1' => $data['barcode'],
            'DateOrder1' => $data['no_meja'],
            'member_id1' => $data['tipe'],
            // 'checkIn1' => $data['check_in'],
            // 'checkOut1' => $data['check_out'],
            'tables1' => $data['muatan'] //Modal tidak keluar jika 'jumlah meja' diganti lain 
          );
          exit(json_encode($temp));
        }
      }
      if($_POST['key']=='update'){
        // $id = mysqli_escape_string($check,$_POST['row']);
        $barcode1 = mysqli_escape_string($check,$_POST['barcode1']);
        $DateOrder1 =  mysqli_escape_string($check,$_POST['DateOrder1']);
        $member1 = mysqli_escape_string($check,$_POST['member_id1']);
        // $checkIn = mysqli_escape_string($check,$_POST['checkIn1']);
        // $checkOut = mysqli_escape_string($check,$_POST['checkOut1']);
        $tables = mysqli_escape_string($check,$_POST['tables1']);
        $hasilquery = mysqli_query($check,"UPDATE meja SET barcode= $barcode1, no_meja='$DateOrder1',tipe='$member1', muatan = $tables WHERE barcode=$barcode1");

        // if($hasilquery) {
        //   exit('Data Has Been Updated'); //FUNGSINYA APA
        // }
      }
      if($_POST['key']=='delete'){
        $reservasi_id = mysqli_escape_string($check,$_POST['data']);
        $hasilquery = mysqli_query($check,"DELETE FROM meja WHERE barcode=$reservasi_id");

        // if ($hasilquery) {
        //   exit('Data Has Ben Deleted');
        // }
      }

      mysqli_close($check);  //KNAPA KOK ADA INI
    }
?> 