<?php
include('ifnotlogin.php');
?>
<?php 
      include('nonbrandedpcserver.php');

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
					<h2 class="page-title"><strong>SYSTEM UNIT</strong></h2>
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
								 <center><h3 class="panel-title"><span class="fa fa-plus"></span><strong> NON-BRANDED</strong></h3></center>
								</div>
               
          
                <div class="col-md-12">
                
                   <div class="col-md-12">
                      <ul class="nav nav-nav">
                       <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Status
                      </span> <i class="icon-submenu lnr lnr-chevron-down"></i>/ Non-Branded</a>
                       <ul class="dropdown-menu">
                       <li><a href="systemunit.php"><i class="lnr lnr-file"></i> <span>Branded</span></a></li>
                       <li><a href="systemunitunbranded.php"><i class="lnr lnr-file"></i><span>Unbranded</span></a></li>
                      </ul>
                      </li>
                     </ul><br>
                     <form method="POST" action="nonbrandedpcserver.php">
                     <div class="row">
                       <div class="col-md-3">
                           <label>Computer Name:</label>
                         <input type="text" name="pc_name" class="form-control">
                       </div>
                      
                         <div class="col-md-3">
                           <label>Condition:</label>
                         <select type="text" name="pc_kondition" class="form-control">
                           <option></option>
                          <?php echo $kon; ?>
                         </select>
                    
                        </div>
                         <div class="col-md-3">
                          <label>Location:</label>
                         <select type="text" name="pc_location" class="form-control"s>
                          <option></option>
                          <?php echo $location; ?>
                         </select>
                         <a href="" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#addlocation">+</a>
                        </div>
                           <div class="col-md-3">
                           <label>Serial:</label>
                         <input type="text" name="pc_serial" class="form-control">
                       </div>
                           <div class="col-md-1 pull-right">
                           <label>ID:</label>
                         <input type="text" name="pc_id" class="form-control">
                       </div>
                     <div class="col-md-3">
                         <input type="submit" name="addPC" class="btn btn-success" value="save">
                       </div>
                     </div>
                     </form>
                  <hr>
                
                </div>
                 
                
                 </div>
                 
								<div class="panel-body">
       
                 <div class="row">
                   <div class="col-md-2"><label>MOUSE</label>                  
                     <div class="containerMouse">
							       <div class="zoomImg">
                     <a href="mouse.php"> <img class="mouse" alt="mouse" src="assets/img/mouse.png"></a> 
                     </div>
                    </div>
                  </div><br>
 
                    <div class="col-md-2">
                      <label>MONITOR</label>
                     <div class="containerMouse">
                     <div class="zoomImg">
                      <a href="monitor.php"><img class="mouse" alt="mouse" src="assets/img/monitor.png"></a> 
                     </div>
                    </div>
                  </div>
                    <div class="col-md-2">
                      <label>KEYBOARD</label>
                     <div class="containerMouse">
                     <div class="zoomImg">
                      <a href="keyboard.php"><img class="mouse" alt="mouse" src="assets/img/keyboard.png"></a> 
                     </div>
                    </div>
                  </div>
                     <div class="col-md-2">
                      <label>Power Supply</label>
                     <div class="containerMouse">
                     <div class="zoomImg">
                      <a href="powersupply.php"><img class="mouse" alt="mouse" src="assets/img/powersupply.png"></a> 
                     </div>
                    </div>
                  </div>
                    <div class="col-md-2">
                      <label>DISK DRIVE</label>
                     <div class="containerMouse">
                     <div class="zoomImg">
                      <a href="diskdrive.php"><img class="mouse" alt="mouse" src="assets/img/diskdrive.png"></a> 
                     </div>
                    </div>
                  </div>
                    <div class="col-md-2">
                      <label>MEMORY</label>
                     <div class="containerMouse">
                     <div class="zoomImg">
                      <a href="memory.php"><img class="mouse" alt="mouse" src="assets/img/memory.png"></a> 
                     </div>
                    </div>  
                  </div>  
 <hr>  
	<!--panel body end-->
                </div>
	             </div>
              </div>
   <!--panel end-->   
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Lists of Computer</h3>
								</div>
								<div class="panel-body">
                               <div style="overflow-x:auto;">
                                 <table id="printerTable" class="table table-hover table-bordered">
                                  <thead>
                                    <tr>
                                      <td colspan="2">Actions</td>
                                        <th>Name</th>
                                        <!-- <th>Type</th> -->
                                  
                                        <th>Location</th>
                                        <th>Condition</th>
                                        <th>Date Added</th>
                                        <th>Serial</th>
                                        <th>ID</th>
                                    </tr>
                                  </thead>
                             <?php
                      // retrieve selected results from database and display them on page
                             $search_result = mysqli_query($konek, 'SELECT * FROM tb_pc_nonbranded');
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                    <td>
                                    <a href="systemunit.php?editPC=<?php echo $row['pc_id']; ?>" class="btn btn-info lnr lnr-pencil" rel="tab"></a>
                                    </td>

                                    <td>

                                   <a  href="pc_server.php?delPC=<?php echo $row['pc_id']; ?>" class="btn btn-danger lnr lnr-trash" onclick="return confirm('Are you sure you want to delete this COMPUTER? Click cancel if not!')" rel="tab"></a>
                                    </td>
                                    <td><?php echo $row['pc_name']; ?></td>
                                    <!-- <td><?php //echo $row['pc_type']; ?></td> -->
                                    <td><?php echo $row['pc_location']; ?></td>
                                    <td><?php echo $row['pc_kondition']; ?></td>
                                    <td><?php echo $row['dateadded']; ?></td>
                                    <td><?php echo $row['pc_serial']; ?></td>
                                    <td><?php echo $row['id']; ?></td>
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
</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
<?php include('datatables.php'); ?>

    <script type="text/javascript">
      $(document).ready(function(){
    $('#printerTable').DataTable();
     });
    </script>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
