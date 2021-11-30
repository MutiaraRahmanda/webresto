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
  							<td>
  							<input type="button" value="edit" id="edit" onclick="edit('.$data['reservasi_id'].')" class="btn btn-primary editBtn">
  							<input type"button" value="delete" id="delete" onclick="dels('.$data['reservasi_id'].')" class="btn btn-warning editBtn">
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
  			$hasilquery = mysqli_query($check,"SELECT * FROM reservasi WHERE reservasi_id = '$reservasi_id'");
  			if(mysqli_num_rows($hasilquery)>0){
  				$data = mysqli_fetch_array($hasilquery);
  				$temp = array(
            'rev_id1' => $data['reservasi_id'],
  					'member_id1' => $data['member_id'],
  					'DateOrder1' => $data['tanggal'],
  					'checkIn1' => $data['check_in'],
            'checkOut1' => $data['check_out'],
  					'tables1' => $data['jumlah_meja'] //Modal tidak keluar jika 'jumlah meja' diganti lain 
  				);
  				exit(json_encode($temp));
  			}
  		}
  		if($_POST['key']=='update'){
  			// $id = mysqli_escape_string($check,$_POST['row']);
        $reservasi_id = mysqli_escape_string($check,$_POST['rev_id1']);
        $member = mysqli_escape_string($check,$_POST['member_id1']);
  			$tanggal =  mysqli_escape_string($check,$_POST['DateOrder1']);
  			$checkIn = mysqli_escape_string($check,$_POST['checkIn1']);
        $checkOut = mysqli_escape_string($check,$_POST['checkOut1']);
  			$tables = mysqli_escape_string($check,$_POST['tables1']);
  			$hasilquery = mysqli_query($check,"UPDATE reservasi SET tanggal='$tanggal', member_id=$member, check_in='$checkIn', check_out='$checkOut', jumlah_meja=$tables WHERE reservasi_id=$reservasi_id");

        // if($hasilquery) {
        //   exit('Data Has Been Updated'); //FUNGSINYA APA
        // }
  		}
  		if($_POST['key']=='delete'){
  			$reservasi_id = mysqli_escape_string($check,$_POST['data']);
  			$hasilquery = mysqli_query($check,"DELETE FROM reservasi WHERE reservasi_id=$reservasi_id");

        // if ($hasilquery) {
        //   exit('Data Has Ben Deleted');
        // }
  		}

  		mysqli_close($check);  //KNAPA KOK ADA INI
  	}
?> 