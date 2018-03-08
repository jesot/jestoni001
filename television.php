<?php
include('ifnotlogin.php');
?>
<?php include('television_server.php');

if (isset($_GET['editTV'])) {
    $tv_id = $_GET['editTV'];
    $updatePrinter = true;
    $printer= mysqli_query($konek, "SELECT * FROM tb_tv WHERE tv_id='$tv_id'");

 if (count($printer) == 1 ) {
    $n = mysqli_fetch_array($printer);
    $tv_name = $n['tv_name'];
    $tv_type = $n['tv_type'];
    $tv_brand = $n['tv_brand'];
    $tv_model = $n['tv_model'];
    $tv_location = $n['tv_location'];
    $tv_kondition = $n['tv_kondition'];
    $tv_serial = $n['tv_serial'];
    $tv_id = $n['tv_id'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	 include('header.php');
	 include('tv_modal.php');

	?>
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
					<h3 class="page-title">TELEVISION</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
								 <h3 class="panel-title"><span class="fa fa-plus"></span><strong>TELEVISION</strong></h3>
								</div>
								<form method="POST" action="">
								<div class="panel-body">
								 <div class="col-md-3">
								  <label for="name">TELEVISION Name</label>
                                   <input type="text" class="form-control" name="tv_name" placeholder="e.g. FACULTY-TV" value="<?php echo $tv_name;?>">
								 </div>
		                     <div class="col-md-3">
	                           <label for="type">Type of Television:</label>
                                <select type="text" class="form-control" name="tv_type" >
                                  <option name="tv_type"><?php echo $tv_type; ?></option>     <?php echo $type;?>
                                </select>
                                   <label><a class="a1" href="" data-toggle="modal" data-target="#addtvType">+ Type</a></label>

                              </div>
                              <div class="col-md-3">
							                <label for="type">Brand</label>
                               <select type="text" class="form-control" name="tv_brand" >
                                 <option name="air_brand"><?php echo $tv_brand; ?></option>   <?php echo $brand;?>
                               </select>
                              <label><a class="a1" href="" data-toggle="modal" data-target="#addtvBrand">+ Brand</a></label>
							 </div>
							 <div class="col-md-3">
							 <label for="type">Model</label>
                              <select class="form-control" name="tv_model" >
                                <option name="tv_model"><?php echo $tv_model;?></option>
                                <?php echo $model;?>
                              </select>
                            <label><a class="a1" data-toggle="modal" data-target="#addtvModel">+ Model</a></label>
							 </div>
							 <div class="col-md-3">
							 <label for="type">Location</label>
                                <select class="form-control" name="tv_location" >
                                  <option name="tv_location"><?php echo $tv_location;?></option>
                                         <?php echo $location;?>
                                  </select>
                                  <label><a class="a1" data-toggle="modal" data-target="#addtvLocation">+ Location</a></label>
							 </div>
							 <div class="col-md-3"> <label for="type">Condition</label>
                               <select class="form-control" name="tv_kondition">
                                  <option name="tv_kondition" value=""><?php echo $tv_kondition;?></option>
                                    <?php echo $kondition;?>
                                </select>
                            </div>
                            <div class="col-md-3">
                             <label for="type">Serial#</label>
                                <input type="text" class="form-control" name="tv_serial" placeholder="S/N" value="<?php echo $tv_serial; ?>" >
                            </div>
                            <div class="col-md-3">
                            <label for="id">ID</label>
                                <input type="text" class="form-control" name="tv_id"  value="<?php echo $tv_id;?>" readonly>
                            </div>


                                  <div class="col-md-3 pull-right">
                                  	<br>  	<br>
                                   <?php if ($updatePrinter == true): ?>
                                   <button class="btn btn-primary" type="submit" name="updateTV">UPDATE</button>
                                   <?php else: ?>

                                  <button class="btn btn-success btn btn-fill" type="submit" name="addTV" onclick ="return confirm('are you sure?')">SAVE</button>

                                  <button type="reset" class="btn btn-default btn btn-fill"  name="" >CLEAR</button>
                                   <?php endif ?>
                                </div>

	<!--panel body end--></div>
	                      </div>
   <!--panel end-->     </div>
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h1>Lists of Television</h1>
								</div>
								<div class="panel-body">
                             <div style="overflow-x: auto">
                                 <table id="television" class="table table-hover table-bordered">
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
                             $search_result = mysqli_query($konek, 'SELECT * FROM tb_tv');
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                    <td>
                                    <a href="television.php?editTV=<?php echo $row['tv_id']; ?>" class="btn btn-info lnr lnr-pencil" rel="tab"></a>
                                    </td>

                                    <td>

                                   <a  href="television_server.php?delTV=<?php echo $row['tv_id']; ?>" class="btn btn-danger lnr lnr-trash" onclick="return confirm('Are you sure you want to delete this TV? Click cancel if not!')" rel="tab"></a>
                                    </td>
                                    <td><?php echo $row['tv_name']; ?></td>
                                    <td><?php echo $row['tv_type']; ?></td>
                                    <td><?php echo $row['tv_brand']; ?></td>
                                    <td><?php echo $row['tv_model']; ?></td>
                                    <td><?php echo $row['tv_location']; ?></td>
                                    <td><?php echo $row['tv_kondition']; ?></td>
                                    <td><?php echo $row['dateadded']; ?></td>
                                    <td><?php echo $row['tv_serial']; ?></td>
                                    <td><?php echo $row['tv_id']; ?></td>
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
<?php include('datatables.php'); ?>
 <script type="text/javascript">
   $(document).ready(function() {
    $('#television').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print',
        ]
    } );
} );
    </script>
</body>

</html>
