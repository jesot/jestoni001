<?php
include('ifnotlogin.php');
?>
<?php include('aircon_server.php');

if (isset($_GET['editAir'])) {
    $air_id = $_GET['editAir'];
    $updateAircon = true;
    $aircons = mysqli_query($konek, "SELECT * FROM tb_aircon WHERE air_id='$air_id'");

 if (count($aircons) == 1 ) {
    $n = mysqli_fetch_array($aircons);
    $air_name = $n['air_name'];
    $air_type = $n['air_type'];
    $air_brand = $n['air_brand'];+
    $air_model = $n['air_model'];
    $air_location = $n['air_location'];
    $air_kondition = $n['air_kondition'];
    $air_serial = $n['air_serial'];
    $air_id = $n['air_id'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	 include('header.php');
	 include('aircon_modal.php');
	?>
  <h>
    
    <title><img src="assets/img/logo.png" class="reportlogo" height="150px" width="105px">Lists of Airconditioner</title></h>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
	    <?php include('navbar.php'); ?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
	       <?php include('sidebar3.php'); ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">AIRCONDITIONER</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
								 <h3 class="panel-title"><span class="fa fa-plus"></span>  <strong>Aircon</strong></h3>
								</div>
								<form method="POST" action="">
								<div class="panel-body">

							<div class="col-md-4">
								<img src="assets/img/punptayug.PNG" class="reportlogo" height="150px" width="105px">
							</div>
						<div class="col-md-8"><h3 style="text-align: right; font-family: Rockwell; font-size: 16pt; text-thansform: uppercase; font-weight: bold; position: relative;">Panpacific University North Philippines</h3>
							<h1 style="text-align: right; font-family: Rockwell; font-size: 12pt; line-height: 1px;">Tayug, Pangasinan</h1>
                            <h1 style="text-align: right; font-family: Rockwell; font-size: 12pt; font-weight: bold;">OFFICE OF THE OPERATIONS VICE PRESIDENT</h1>
							<h1 style="text-align: right; font-family: Rockwell; font-size: 12pt; line-height: 1px;">MISS DEPARTMENT</h1>
						</div>
						
                       <div class="col-md-12">
                       	<hr/>
                       	<h3 style="text-align:center; font-family: Cambria; font-size: 11pt;  font-weight: bold; position: relative;">Summary of Inventory<br>Laboratory 1<br>1st Semester S.Y. 2017-2018</h3>
                       	<div style="overflow-x: auto;" >
                         <table class="table table-hover table-responsive table-bordered">
                         	<thead>
                         	<tr>
                         		<th>Deparment/PC Name</th>
                         		<th>System Manufacturer</th>
                         		<th>System Model</th>
                         		<th>Operating System</th>
                         		<th>Processor</th>
                         		<th>Memory</th>
                         		<th>Hard Disk Drive</th>
                         		<th>Monitor</th>
                         		<th>Keyboard</th>
                         		<th>Mouse</th>
                         		<th>Power Supply</th>
                         		<th>Others</th>
                         	</tr>
                         </thead>
                         	<tr>
                         		<td>asdf</td>
                         		<td>asdf</td>
                         		<td>asdf</td>
                         		<td>asf</td>
                         		<td>as</td>
                         		<td>asdfas</td>
                         		<td>asdf</td>
                         		<td>asf</td>
                         		<td>asf</td>
                         		<td>asdf</td>
                         		<td>asdf</td>
                         		<td>asdfasf</td>
                         	</tr>
                         </table>
                     </div>
       
								
	<!--panel body end-->       </div>
	                      </div>
   <!--panel end-->     </div>
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h1>Lists of Aircon</h1>
								</div>
								<div class="panel-body">
                  <div style="overflow-x:auto;">
                                 <table id="airconTable" class="table table-hover table-bordered">
                                  <thead>
                                    <tr>
                                    	<td colspan="2">Actions</td>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Location</th>
                                        <th>Condition</th>
                                        <th>Date Added</th>
                                        <th>Serial</th>
                                        <th>ID</th>
                                    </tr>
                                  </thead>
                             <?php
                      // retrieve selected results from database and display them on page
                             $search_result = mysqli_query($konek, 'SELECT * FROM tb_aircon');
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                    <td>
                                    <a href="aircon.php?editAir=<?php echo $row['air_id']; ?>" class="btn btn-info lnr lnr-pencil" rel="tab"></a>
                                    </td>

                                    <td>

                                   <a  href="aircon_server.php?delAir=<?php echo $row['air_id']; ?>" class="btn btn-danger lnr lnr-trash" onclick="return confirm('Are you sure? Click cancel if not!')" rel="tab"></a>
                                    </td>
                                    <td><?php echo $row['air_name']; ?></td>
                                    <td><?php echo $row['air_type']; ?></td>
                                    <td><?php echo $row['air_brand']; ?></td>
                                    <td><?php echo $row['air_model']; ?></td>
                                    <td><?php echo $row['air_location']; ?></td>
                                    <td><?php echo $row['air_kondition']; ?></td>
                                    <td><?php echo $row['dateadded']; ?></td>
                                    <td><?php echo $row['air_serial']; ?></td>
                                    <td><?php echo $row['air_id']; ?></td>
                                 </tr>

                                    <?php } ?>
                                </table>
                              </div>
								           </div>
					            		</div>

						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>


			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.punptayug.edu.ph" target="_blank">PUNP</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
<?php include('datatables.php');?>


    <script type="text/javascript">
   $(document).ready(function() {
    $('#airconTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', 'excel',
        ]
    } );
} );
    </script>
</body>

</html>
