<?php
if(isset($_POST['key'])){
  		define("LOGIN",TRUE);
  		include "connect.php";

  		if($_POST['key']=='addnew'){
  			// $date =  mysqli_escape_string($check,$_POST['DateOrder']);
        $member_id = mysqli_escape_string($check,$_POST['member_id']); 
        $password = mysqli_escape_string($check,$_POST['password']); 
        $check_in = mysqli_escape_string($check,$_POST['checkIn']); 
        $check_out = mysqli_escape_string($check,$_POST['checkOut']);
  			$tables = mysqli_escape_string($check,$_POST['tables']);
  			$hasilquery = mysqli_query($check,"INSERT INTO anggota(id, password, nama, telp, alamat) VALUES ('$member_id',sha1('$password'),'$check_in','$check_out','$tables')");

        // if ($hasilquery) {
        //   exit('Data Has Been Added');
        // }

  		}
      if($_POST['key']=='getData'){
        $start = mysqli_escape_string($check,$_POST['start']);
        $limit = mysqli_escape_string($check,$_POST['limit']);
        $hasilquery = mysqli_query($check,"SELECT * FROM anggota LIMIT $start, $limit");
        if(mysqli_num_rows($hasilquery)>0){
          $response = "";
          while($data = mysqli_fetch_array($hasilquery)){
            $response .= '
              <tr>  
                <td>'.$data['id'].'</td>
                <td>'.$data['nama'].'</td>
                <td>'.$data['telp'].'</td>
                <td>'.$data['alamat'].'</td>
                <td>
                <input type="button" value="edit" id="edit" onclick="edit('.$data['id'].')" class="btn btn-primary editBtn">
                <input type"button" value="delete" id="delete" onclick="dels('.$data['id'].')" class="btn btn-warning editBtn">
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
  		if($_POST['key']=='getData'){
  			$start = mysqli_escape_string($check,$_POST['start']);
  			$limit = mysqli_escape_string($check,$_POST['limit']);
  			$hasilquery = mysqli_query($check,"SELECT * FROM anggota LIMIT $start, $limit");
  			if(mysqli_num_rows($hasilquery)>0){
  				$response = "";
  				while($data = mysqli_fetch_array($hasilquery)){
  					$response .= '
  						<tr>  
                <td>'.$data['id'].'</td>
  							<td>'.$data['nama'].'</td>
  							<td>'.$data['telp'].'</td>
  							<td>'.$data['alamat'].'</td>
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
  			$hasilquery = mysqli_query($check,"SELECT * FROM anggota WHERE id = '$reservasi_id'");
  			if(mysqli_num_rows($hasilquery)>0){
  				$data = mysqli_fetch_array($hasilquery);
  				$temp = array(
            // 'rev_id1' => $data['reservasi_id'],
  					'member_id1' => $data['id'],
  					// 'DateOrder1' => $data['tanggal'],
  					'checkIn1' => $data['nama'],
            'checkOut1' => $data['telp'],
  					'tables1' => $data['alamat'] //Modal tidak keluar jika 'jumlah meja' diganti lain 
  				);
  				exit(json_encode($temp));
  			}
  		}
  		if($_POST['key']=='update'){
  			// $id = mysqli_escape_string($check,$_POST['row']);
        // $reservasi_id = mysqli_escape_string($check,$_POST['rev_id1']);
        $member = mysqli_escape_string($check,$_POST['member_id1']);
  			// $tanggal =  mysqli_escape_string($check,$_POST['DateOrder1']);
  			$checkIn = mysqli_escape_string($check,$_POST['checkIn1']);
        $checkOut = mysqli_escape_string($check,$_POST['checkOut1']);
  			$tables = mysqli_escape_string($check,$_POST['tables1']);
  			$hasilquery = mysqli_query($check,"UPDATE anggota SET id='$member', nama='$checkIn', telp='$checkOut', alamat='$tables' WHERE id=$member");

        // if($hasilquery) {
        //   exit('Data Has Been Updated'); //FUNGSINYA APA
        // }
  		}
  		if($_POST['key']=='delete'){
  			$reservasi_id = mysqli_escape_string($check,$_POST['data']);
  			$hasilquery = mysqli_query($check,"DELETE FROM anggota WHERE id=$reservasi_id");

        // if ($hasilquery) {
        //   exit('Data Has Ben Deleted');
        // }
  		}

  		mysqli_close($check);  //KNAPA KOK ADA INI
  	}
?> 