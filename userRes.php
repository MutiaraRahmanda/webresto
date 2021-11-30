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

<div id="barang" class="container" style="margin-top: 5%;">
	
	<div class="panel panel-default">
		<div class="panel-heading"><strong><h2>All Reservation</h2></strong></div>
	  		<div class="panel-body">
				<div class="row">
					<div class="col-md-10 col-md-offset-1" align="center">
						<!-- <input type="button" class="btn btn-success addRev" value="ADD NEW RESERVATION" id="addnew"><br><br><br> -->
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
<!-- 										<td>OPTIONS</td> -->
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
	$(document).ready(function(){
		displayData(0,50); /*start,limit*/
		
	});

	function displayData(start,limit){
		$.ajax({
			url: 'ajax4.php',
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

</script>

</body>
</html>

