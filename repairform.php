
<?php
include('ifnotlogin.php');
?>
<?php ?>

<?php include('dbcon.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php  //fetching NOT WORKIING ASSETS 
	 include('header.php'); 
	?>
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
					<h3 class="page-title">AIRCONDITIONER</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-info">
             <strong>Note:</strong> Just choose the asset that you want to repair.
            </div>
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Details:</h3><br>
								 <div class="panel-body">
								<form method="POST" action="">
									<div class="row">
						<div class="col-md-4">
							<div class="panel">
							
								
								<div class="panel-body">
								 <div class="col-md-12">
                              
                              <label for="type">ID</label>
                               <input type="Email" class="form-control" name="email"  value="" disabled>
                               
	                           <label for="type">Name</label>
                               <input type="text" class="form-control" name="nameofasset" value="" placeholder="Details" disabled> 							 
                               
								</div>
                                  
                                </div>

	<!--panel body end--></div>
	                      </div>
                                 <label value="<?php echo $row['air_id'];?>"></label>
                                 </form>
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
