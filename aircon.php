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
	       <?php include('sidebar1.php'); ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- <h3 class="page-title">AIRCONDITIONER</h3> -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
                  <hr>
								 <h3 class="panel-title" style="text-align: center;"><span class="fa fa-plus"></span><strong>Aircon</strong></h3>
                 <hr>
								</div>

								<form method="POST" action="">
								<div class="panel-body">
								 <div class="col-md-3">
								  <label for="name">Aircon Name</label>
                                   <input type="text" class="form-control" name="air_name" placeholder="e.g. CSS-AIRCON" value="<?php echo $air_name;?>">
								 </div>
		                     <div class="col-md-3">
	                           <label for="type">Type of Aircon:</label>
                                <select type="text" class="form-control" name="air_type" >
                                  <option name="air_type"><?php echo $air_type; ?></option>     <?php echo $type;?>
                                </select>
                                 <label><a class="a1" href=""  data-toggle="modal" data-target="#addAirType">+ Type</a></label>
                              </div>
                              <div class="col-md-3">
							  <label for="type">Brand</label>
                               <select type="text" class="form-control" name="air_brand" >
                                 <option name="air_brand"><?php echo $air_brand; ?></option>   <?php echo $brand;?>
                               </select>
                              <label><a class="a1" href="" data-toggle="modal" data-target="#addAirBrand">+ Brand</a></label>
							 </div>
							 <div class="col-md-3">
							 <label for="type">Model</label>
                              <select class="form-control" name="air_model" >
                                <option name="air_model"><?php echo $air_model;?></option>
                                <?php echo $model;?>
                              </select>
                            <label><a class="a1" data-toggle="modal" data-target="#addAirModel">+ Model</a></label>
							 </div>
							 <div class="col-md-3">
							 <label for="type">Location</label>
                                <select class="form-control" name="air_location" >
                                  <option name="air_location"><?php echo $air_location;?></option>
                                         <?php echo $location;?>
                                  </select>
                                  <label><a class="a1" data-toggle="modal" data-target="#addAirLocation">+ Location</a></label>
							 </div>
							 <div class="col-md-3"> <label for="type">Condition</label>
                               <select class="form-control" name="air_kondition" readonly="true">
                                  <option  name="air_kondition" value=""><?php echo $air_kondition;?></option>
                                    <?php echo $kondition;?>
                                </select>
                            </div>
                            <div class="col-md-3">
                             <label for="type">Serial#</label>
                                <input type="text" class="form-control" name="air_serial" placeholder="S/N" value="<?php echo $air_serial; ?>" >
                            </div>
                            <div class="col-md-3">
                            <label for="id">ID</label>
                                <input type="text" class="form-control" name="air_id" placeholder="air_id" value="<?php echo $air_id;?>" readonly>
                            </div>


                                  <div class="col-md-3 pull-right">
                                  	<br>  	<br>
                                   <?php if ($updateAircon == true): ?>
                                   <button class="btn btn-primary" type="submit" name="updateAircon">UPDATE</button>


                                    <button class="btn btn-danger" type="submit" name="CancelupdateAircon">CANCEL</button>
                                   <?php else: ?>

                                  <button class="btn btn-success btn btn-fill" type="submit" name="addAircon" onclick ="return confirm('are you sure?')">SAVE</button>

                                  <button type="reset" class="btn btn-default btn btn-fill"  name="" >CLEAR</button>
                                   <?php endif ?>
                                </div>

	<!--panel body end--></div>
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
