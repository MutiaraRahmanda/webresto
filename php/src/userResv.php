<?php include 'accessUser.php'; ?>


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

<?php include 'headerUser.php'; ?>

<div id="barang" class="container">
	<div id="inputModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-title" align="center">
					<h2>ADD MY RESERVATION</h2>
				</div>
				<div class="modal-body">
					<input type="text" class="form-control ins" placeholder="Member ID..." id="member_id" readonly value="<?php echo $username; ?>"><br>
					<input type="text" name="tanggal" class="tanggal form-control ins" placeholder="Date" id="DateOrder"><br>
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

	<div class="panel panel-default them2">
		<div class="panel-heading"><strong><h2>My Reservation</h2></strong></div>
	  		<div class="panel-body">
				<div class="row">
					<div class="col-md-10 col-md-offset-1" align="center">
						<input type="button" class="btn btn-success addRev" value="MAKE A RESERVATION" id="addnew"><br><br><br>
						<div class="table-responsive">
							<table class="howCenter table table-hover table-bordered dt-responsive">
								<thead>
									<tr>
										<td>MEMBER ID</td>
										<td>RESERVASI ID</td>
										<td>DATE</td>
										<td>CHECK IN</td>
										<td>CHECK OUT</td>
										<td>TABLES</td>
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
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axodfmvc0sfb/b/UTS/o/assets%2Fjs%2Fjquery.datetimepicker.js"></script
	
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
	});

	function displayData(start,limit){
		$.ajax({
			url: 'ajax4.php',
			method: 'POST',
			dataType: 'text',
			data: {
				key: 'getData1',
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

