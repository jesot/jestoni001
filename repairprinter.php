<?php
include('ifnotlogin.php');
?>
<?php include('printer_server.php'); 
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php  //fetching NOT WORKIING printer
	 include('header.php'); 
    $search_result = mysqli_query($konek, "SELECT * FROM tb_printer WHERE printer_kondition='Not_Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $total = $number_of_rows; 
	       // fetch not working assets ?>

  
  <script type="text/javascript">
  //scripts to query location
    $(document).ready(function() 
            {
              $("#fetchPrinterLocation").on('change',function() 
                {
               var value= $(this).val();
               $.ajax(
               {
               url: 'fetchLocationPrinter.php',
               type:'POST',
               data:'request='+value,
               beforeSend:function()
              {
               $("#table-container").html('loading....');
              },
               success:function(data)
              {
                 $("#table-container").html(data);
              },
            });
          });
        });
  </script>

  <script type="text/javascript">
  //scripts to query name
    $(document).ready(function() 
            {
              $("#fetchPrinterName").on('change',function() 
                {
               var value= $(this).val();
               $.ajax(
               {
               url: 'fetchNamePrinter.php',
               type:'POST',
               data:'request='+value,
               beforeSend:function()
              {
               $("#table-container").html('loading');
              },
               success:function(data)
              {
                 $("#table-container").html(data);
              },
            });
          });
        });
  </script>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
	    <?php include('navbar.php'); ?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
	       <?php include('sidebar2.php'); ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">PRINTER</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-info">
             <strong>Note:</strong> Just choose the asset that you want to repair.
            </div>
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Lists of Not Working Printer</h3><br>
                    <div class="col-md-3"><label>Filter Location:</label>
                     <select class="form-control" name="airLocation" id="fetchPrinterLocation">
                      <?php //filter available location of aircon
                      echo '<option>Select</option>'; 
                      echo $location;
                       ?>
                    </select>
                   </div>
                   <div class="col-md-3"><label>Filter Name:</label>
                         <select class="form-control" name="airname" id="fetchPrinterName">
                      <?php //filter name of aircon
                         echo '<option>Select</option>'; 
                         echo $name; ?>
                        </select>
                  </div>
                 <!--total number of rows  -->
                  <div class="col-md-3"><label>Total:</label>
                    <input value="<?php echo $total; ?>" name="" class="form-control" readonly="true">
                  </div>
								  </div>  <br><br><br>

								 <div class="panel-body">
                      <div id="table-container" style="overflow-x:auto;">
                          <table id="airconTable" class="table table-hover table-bordered">
                             <thead>
                             <tr>      
                                    	  <th>Actions</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Location</th>
                                        <th>Serial</th>
                                        <th>ID</th>
                             </tr>
                           </thead>
            
                             <?php 
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                    <td> 
                                    <a href="aircon.php?editAir=<?php echo $row['air_id']; ?>" class="btn btn-danger" rel="tab">Repair</a>
                                    </td>
                                    <td><?php echo $row['printer_name']; ?></td>
                                    <td><?php echo $row['printer_type']; ?></td>
                                    <td><?php echo $row['printer_brand']; ?></td>
                                    <td><?php echo $row['printer_model']; ?></td>
                                    <td><?php echo $row['printer_location']; ?></td>
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
            'pdf', 'print',
        ]
    } );
} );
    </script>
</body>

</html>
