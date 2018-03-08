<?php
include('ifnotlogin.php');
?>

<?php include('printer_server.php');

if (isset($_GET['editPrinter'])) {
    $printer_id = $_GET['editPrinter'];
    $updatePrinter = true;
    $printer= mysqli_query($konek, "SELECT * FROM tb_printer WHERE printer_id='$printer_id'");

 if (count($printer) == 1 ) {
    $n = mysqli_fetch_array($printer);
    $printer_name = $n['printer_name'];
    $printer_type = $n['printer_type'];
    $printer_brand = $n['printer_brand'];
    $printer_model = $n['printer_model'];
    $printer_location = $n['printer_location'];
    $printer_kondition = $n['printer_kondition'];
    $printer_serial = $n['printer_serial'];
    $printer_id = $n['printer_id'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	 include('header.php');
	 include('printer_modal.php');

	?>
  <title>List of Printers</title>
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
					<h3 class="page-title">PRINTER</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
								 <h3 class="panel-title"><span class="fa fa-plus"></span><strong>Printer</strong></h3>
								</div>
								<form method="POST" action="">
								<div class="panel-body">
								 <div class="col-md-3">
								  <label for="name">Printer Name</label>
                                   <input type="text" class="form-control" name="printer_name" placeholder="e.g. SH-PRINTER" value="<?php echo $printer_name;?>">
								 </div>
		                     <div class="col-md-3">
	                           <label for="type">Type of Printer:</label>
                                <select type="text" class="form-control" name="printer_type" >
                                  <option name="printer_type"><?php echo $printer_type; ?></option>     <?php echo $type;?>
                                </select>
                                   <label><a class="a1" href="" data-toggle="modal" data-target="#addprinterType">+ Type</a></label>

                              </div>
                              <div class="col-md-3">
							                <label for="type">Brand</label>
                               <select type="text" class="form-control" name="printer_brand" >
                                 <option name="air_brand"><?php echo $printer_brand; ?></option>   <?php echo $brand;?>
                               </select>
                              <label><a class="a1" href="" data-toggle="modal" data-target="#addprinterBrand">+ Brand</a></label>
							 </div>
							 <div class="col-md-3">
							 <label for="type">Model</label>
                              <select class="form-control" name="printer_model" >
                                <option name="printer_model"><?php echo $printer_model;?></option>
                                <?php echo $model;?>
                              </select>
                            <label><a class="a1" data-toggle="modal" data-target="#addprinterModel">+ Model</a></label>
							 </div>
							 <div class="col-md-3">
							 <label for="type">Location</label>
                                <select class="form-control" name="printer_location" >
                                  <option name="printer_location"><?php echo $printer_location;?></option>
                                         <?php echo $location;?>
                                  </select>
                                  <label><a class="a1" data-toggle="modal" data-target="#addprinterLocation">+ Location</a></label>
							 </div>
							 <div class="col-md-3"> <label for="type">Condition</label>
                               <select class="form-control" name="printer_kondition">
                                  <option name="printer_kondition" value=""><?php echo $printer_kondition;?></option>
                                    <?php echo $kondition;?>
                                </select>
                            </div>
                            <div class="col-md-3">
                             <label for="type">Serial#</label>
                                <input type="text" class="form-control" name="printer_serial" placeholder="S/N" value="<?php echo $printer_serial; ?>" >
                            </div>
                            <div class="col-md-3">
                            <label for="id">ID</label>
                                <input type="text" class="form-control" name="printer_id"  value="<?php echo $printer_id;?>" readonly>
                            </div>


                                  <div class="col-md-3 pull-right">
                                  	<br>  	<br>
                                   <?php if ($updatePrinter == true): ?>
                                   <button class="btn btn-primary" type="submit" name="updatePrinter">UPDATE</button>
                                   <?php else: ?>

                                  <button class="btn btn-success btn btn-fill" type="submit" name="addPrinter" onclick ="return confirm('are you sure?')">SAVE</button>

                                  <button type="reset" class="btn btn-default btn btn-fill"  name="" >CLEAR</button>
                                   <?php endif ?>
                                </div>

	<!--panel body end--></div>
	                      </div>
   <!--panel end-->     </div>
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-body">
                               <div style="overflow-x: auto">
                                 <table id="printerTable" class="table table-hover table-bordered">
                                  <thead>
                                   <h1>List of Printers</h1>
                                   <br> 
                                    <tr>
                                    	  <th colspan="2">Actions</th>
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
                             $search_result = mysqli_query($konek, 'SELECT * FROM tb_printer');
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                    <td>
                                    <a href="printer.php?editPrinter=<?php echo $row['printer_id']; ?>" class="btn btn-info lnr lnr-pencil" rel="tab"></a>
                                    </td>

                                    <td>

                                   <a href="printer_server.php?delPrinter=<?php echo $row['printer_id']; ?>" class="btn btn-danger lnr lnr-trash" onclick="return confirm('Are you sure? Click cancel if not!')" rel="tab"></a>
                                    </td>
                                    <td><?php echo $row['printer_name']; ?></td>
                                    <td><?php echo $row['printer_type']; ?></td>
                                    <td><?php echo $row['printer_brand']; ?></td>
                                    <td><?php echo $row['printer_model']; ?></td>
                                    <td><?php echo $row['printer_location']; ?></td>
                                    <td><?php echo $row['printer_kondition']; ?></td>
                                    <td><?php echo $row['dateadded']; ?></td>
                                    <td><?php echo $row['printer_serial']; ?></td>
                                    <td><?php echo $row['printer_id']; ?></td>
                                 </tr>

                                    <?php } ?>
                                </table>
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
</body>
</html>
<!-- Javascript -->

<?php include('datatables.php');?>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#printerTable').DataTable( {
        dom: 'Bfrtip',
        buttons: ['pdf','print',
        ]
    } );
} );
    </script>
