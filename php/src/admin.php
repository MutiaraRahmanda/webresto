<?php 
	include 'accessAdmin.php'; 
	$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2FbootstrapAdmin.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2FdataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fresponsive.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/style.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fcss%2Fdatepicker3.css">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.datetimepicker.css">

<!-- 	<script type="text/javascript" src="asset/js/nav.js"></script> -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	body
	{
	    font-family: Optima, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Verdana, Helvetica, Arial, sans-serif;

	}

/*	body .btn{
	    border-radius: 0;
	    width: 25%;
	}*/

/*IKI*/
	body .table{
	    text-align: left !important;  
	    font-size: 100%;
	}

	thead{
	    font-style: bold !important;
	}
</style>
</head>
<body>




<div class="super">

<?php include 'headerAdmin.php'; ?>

<div id="barang" class="container">
	<div id="inputModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-title" align="center">
					<h2>ADD NEW RESERVATION</h2>
				</div>
				<div class="modal-body">
					<input type="text" name="tanggal" class="tanggal form-control ins" placeholder="Date" id="DateOrder"><br>
					<input type="text" class="form-control ins" placeholder="Member ID..." id="member_id"><br>
<!-- 						<input type="text" name="time" class="form-control ins" placeholder="Check in..." ><br> -->			
					<input type="text" class="form-control ins" placeholder="Check in..." id="checkIn"><br>
					<input type="text" class="form-control ins" placeholder="Check out..." id="checkOut"><br>
					<input type="text" class="form-control ins" placeholder="Tables..." id="tables"><br>
					<!-- <input type="hidden" id="rowId" val="0"> -->
				</div>
				<div class="modal-footer">
					<input id="submitForm" type="button" value="Add" class="btn btn-success" onclick="uploadData('addnew');">
				</div>
			</div>
		</div>
	</div>
	<div id="editModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-title" align="center">
					<h2>CHANGE RESERVATION</h2>
				</div>
				<div class="modal-body">
					<input type="text" class="form-control ins" placeholder="Reservation ID" id="rev_id1" ><br>	
					<input type="text" name="tanggal" class="tanggal form-control ins" placeholder="Date" id="DateOrder1"><br>
					<input type="text" class="form-control ins" placeholder="Member ID..." id="member_id1"><br>		
					<input type="text" class="form-control ins" placeholder="Check in..." id="checkIn1"><br>
					<input type="text" class="form-control ins" placeholder="Check ouT..." id="checkOut1"><br>
					<input type="text" class="form-control ins" placeholder="Tables..." id="tables1"><br>
					<!-- <input type="hidden" id="rowId" val="0"> -->
				</div>
				<div class="modal-footer">
					<input id="submitForm1" type="button" value="update" class="btn btn-success" onclick="updateRow('update');">
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default them2">
		<div class="panel-heading"><strong><h2>Reservation</h2></strong></div>
	  		<div class="panel-body">
				<div class="row">
					<div class="col-md-10 col-md-offset-1" align="center">
						<input type="button" class="btn btn-success addRev" value="ADD NEW RESERVATION" id="addnew"><br><br><br>
						<div class="table-responsive">
							<table class="howCenter table table-hover table-bordered dt-responsive">
								<thead>
									<tr>
										<td>RESERVASI ID</td>
										<td>DATE</td>
										<td>MEMBER ID</td>
										<td>CHECK IN</td>
										<td>CHECK OUT</td>
										<td>TABLES</td>
										<td>OPTIONS</td>
									</tr>
								</thead>
								<tbody>
															
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer1.php'; ?>
</div>


	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.min.js"></script>
							<!-- dataTables -->
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.dataTables.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2FdataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2FdataTables.responsive.min.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap.min.js"></script>
							<!-- dateTimePicker -->
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fbootstrap-datepicker.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.datetimepicker.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>
	<script type="text/javascript">
	            $(document).ready(function () {
	                $('.tanggal').datepicker({
	                    format: "yyyy-mm-dd",
	                    autoclose:true
	                });
	            });

    </script>

<script type="text/javascript">
	$(document).ready(function(){
		displayData(0,50); /*start,limit*/
		
		$('#addnew').on('click', function(){
			$('#inputModal').modal('show');
		});

		$('#edit').on('click', function(){
			$('#editModal').modal('show');
		});
	});

	function displayData(start,limit){
		$.ajax({
			url: 'ajax.php',
			method: 'POST',
			dataType: 'text',
			data: {
				key: 'getData',
				start: start,
				limit: limit
			}, success: function (response) {
				if(response != 'limitMax'){
					$('tbody').append(response);
					start += limit;
					displayData(start,limit);
				}else {
					$(".table").DataTable({
						responsive: true
					});	//ANEH MAKSIMAL
				}
			}
		});
	}

	function uploadData(data){
		var DateOrder = $('#DateOrder');
		var member_id = $('#member_id');
		var checkIn = $('#checkIn');
		var checkOut = $('#checkOut');
		var tables = $('#tables');
		if(cekInsert(DateOrder) && cekInsert(member_id) && cekInsert(checkIn) && cekInsert(checkOut) && cekInsert(tables)){
			$.ajax({
				url: 'ajax.php',
				method: 'POST',
				dataType: 'text',
				data: {
					key: data,
					DateOrder: DateOrder.val(),
					member_id: member_id.val(),
					checkIn: checkIn.val(),
					checkOut: checkOut.val(),
					tables: tables.val()
				}, success: function (response) {
					//alert(response);
					$(".table").DataTable().destroy();
					$('tbody').empty();
					$("#inputModal").modal('hide');
					$('#inputModal').on('hidden.bs.modal', function(){
					    $('.ins').val("");
					});
					displayData(0,50);
				}
			});
		}
	}
	//KETIKA ANDA KLIK TOMBOL EDIT
	function edit(row){
		$.ajax({
			url: 'ajax.php',
			method: 'POST',
			dataType: 'json',
			data: {
				key: 'selectRow',
				data: row
			}, success: function (response) {
				// $('#rowId').val(response.id);
				$('#rev_id1').val(response.rev_id1);
				$('#member_id1').val(response.member_id1);
				$('#DateOrder1').val(response.DateOrder1);
				$('#checkIn1').val(response.checkIn1);
				$('#checkOut1').val(response.checkOut1);
				$('#tables1').val(response.tables1);
				$('#editModal').modal('show');
				// $('#submitForm1').attr('value', 'Update').attr('onclick',"updateRow('update')");
			}
		});
	}

	function updateRow(update){
		var rev_id1 = $('#rev_id1');		
		var member_id1 = $('#member_id1');		
		var tanggal1 = $('#DateOrder1');
		var checkIn1 = $('#checkIn1');
		var checkOut1 = $('#checkOut1');
		var tables1 = $('#tables1');
		if(cekInsert(rev_id1) && cekInsert(tanggal1) && cekInsert(member_id1) && cekInsert(checkIn1) && cekInsert(checkOut1) && cekInsert(tables1)){
			$.ajax({
				url: 'ajax.php',
				method: 'POST',
				dataType: 'text',
				data: {
					key: update,
					rev_id1 : rev_id1.val(),
					member_id1 : member_id1.val(),
					DateOrder1 : tanggal1.val(),
					checkIn1: checkIn1.val(),
					checkOut1: checkOut1.val(),
					tables1: tables1.val()
				}, success: function (response) {
					alert(response);
					$(".table").DataTable().destroy();
					$('tbody').empty();
					$("#editModal").modal('hide');
					$('#editModal').on('hidden.bs.modal', function(){
					    $('.ins').val("");
					});
					displayData(0,50);
				}
			});
		}
	}

	function dels(row){
		$.ajax({
			url: 'ajax.php',
			method: 'POST',
			dataType: 'text',
			data: {
				key: 'delete',
				data: row
			}, success: function (response) {
				// alert(response);
				$(".table").DataTable().destroy();
				$('tbody').empty();
				displayData(0,50);
			}
		});
	}

	function cekInsert(input){
		if(input.val() == ''){
			input.css('border', '1px solid red');
			return false;
		} else {
			input.css('border', '');
			return true;
		}
	}
</script>

</body>
</html>

