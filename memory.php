
<?php include('dbcon.php'); 
      include('mouse_server.php');

if (isset($_GET['editMouse'])) {
    $mouse_id = $_GET['editMouse'];
    $updateMouse = true;
    $m= mysqli_query($konek, "SELECT * FROM tb_mouse WHERE mouse_id='$mouse_id'");

 if (count($m) == 1 ) {
    $n = mysqli_fetch_array($m);
    $pc_name = $n['pc_name'];
    $mouse_type = $n['mouse_type'];
    $mouse_brand = $n['mouse_brand'];
    $mouse_model = $n['mouse_model'];
    $mouse_serial= $n['mouse_serial'];
    $mouse_id = $n['mouse_id'];
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php  
	 include('header.php'); 
	 include('mouse_modal.php');

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
					<h4 class="page-title"><strong>SYSTEM UNIT</strong>/ Mouse</h4>
          <div class="col-md-12">  
            <div class="alert alert-success">
             <strong>Note:</strong> Please choose an available Computer or PC Name where you want to install specific mouse.
            </div>
            <div>
            <a href="systemunitunbranded.php" class="btn btn-primary"><--</a>
          </div>
        </div>
					<div class="row">
						<div class="col-md-3">
							<div class="panel">
								<div class="panel-heading">
								 <center><h3 class="panel-title"><span class="fa fa-plus"></span><strong>  MOUSE</strong></h3></center>
								</div>

								<div class="panel-body">
						       <form method="POST" action="mouse_server.php">
                      <div class="col-md-12"><label for="pcname">PC Name</label>
                            <select type="text" class="form-control" name="pc_name" >
                                <option name=""><?php echo $pc_name; ?></option>
                                <?php echo $pc1_name;?>
                                </select><br>
							                <label for="type">Type</label>
                                <select type="text" class="form-control" name="mouse_type" >
                                 <option name=""><?php echo $mouse_type; ?></option>   
                                 <?php echo $mouse1_type; ?>
                                </select>
                              <label><a class="a1" href="" data-toggle="modal" data-target="#addmouseType">+ Type</a></label><br><br>  
                               <select type="text" class="form-control" name="mouse_brand" >
                                 <option name="brand"><?php echo $mouse_brand; ?></option>   <?php echo $brand;?>
                               </select>
                              <label><a class="a1" href="" data-toggle="modal" data-target="#addmouseBrand">+ Brand</a></label><br>
					                     <label>Model</label>
                              <input class="form-control" name="mouse_model" value="<?php echo $mouse_model; ?>"><br>  
							           </div>
						                  
                            <div class="col-md-12">
                             <label for="type">Serial#</label>
                                <input type="text" class="form-control" name="mouse_serial" placeholder="S/N" value="<?php echo $mouse_serial; ?>" ><br>
                         
                            <label for="id">ID</label>
                                <input type="text" class="form-control" name="mouse_id"  value="<?php echo $mouse_id;?>">
                            </div>
                             <div class="col-md-12">
                                    <br><br>
                                   <?php if ($updateMouse == true): ?>
                                   <button class="btn btn-primary" type="submit" name="updateMouse">SAVE</button>
                                   <?php else: ?>

                                  <button class="btn btn-success btn btn-fill" type="submit" name="addMouse" onclick ="return confirm('are you sure  want to add this?')">SAVE</button><br>
                                  <button type="reset" class="btn btn-default btn btn-fill"  name="" >Clear</button>
                                   <?php endif ?>
                                </div>
                                </form>                                                   
	<!--panel body end-->        </div>
   <!--panel end-->           </div>
                    
                      
						
				</div>
              <div class="col-md-9">
              <div class="panel">
                <div class="panel-heading">
                 <center><h3 class="panel-title"><span class="fa fa-list"></span><strong>    List of Mouse</strong></h3></center>
                </div>

                <div class="panel-body">
                   <div style="overflow-x:auto;">
                                 <table id="printerTable" class="table table-hover table-bordered">
                                  <thead>
                                    <tr>      
                                      <td colspan="2">Actions</td>
                                        <th>Type</th>
                                        <!-- <th>Type</th> -->
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Serial</th>
                                        <th>Dateinstalled</th>
                                        <th>PC Name</th>
                                        <th>ID</th>
                                    </tr>
                                  </thead>
                             <?php 
                      // retrieve selected results from database and display them on page    
                             $search_result = mysqli_query($konek, 'SELECT * FROM tb_mouse');
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                    <td> 
                                    <a href="mouse.php?editMouse=<?php echo $row['mouse_id']; ?>" class="btn btn-info lnr lnr-pencil" rel="tab"></a>
                                    </td>

                                    <td>
                              
                                   <a  href="mouse_server.php?delMouse=<?php echo $row['pc_id']; ?>" class="btn btn-danger lnr lnr-trash" onclick="return confirm('Are you sure you want to delete this COMPUTER? Click cancel if not!')" rel="tab"></a>
                                    </td>
                                  
                                    <!-- <td><?php //echo $row['pc_type']; ?></td> -->
                                    <td><?php echo $row['mouse_type']; ?></td>
                                    <td><?php echo $row['mouse_brand']; ?></td>
                                    <td><?php echo $row['mouse_model']; ?></td>
                                    <td><?php echo $row['mouse_serial']; ?></td>
                                    <td><?php echo $row['dateinstalled']; ?></td>
                                     <td><?php echo $row['pc_name']; ?></td>
                                    <td><?php echo $row['mouse_id']; ?></td>
                                  
                                 </tr>
                                    <?php } ?>
                                </table>
                            </div>                                                  
  <!--panel body end-->        </div>
   <!--panel end-->           </div>
                    
                      
            
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
      $(document).ready(function(){
    $('#printerTable').DataTable( {
           dom: 'Bfrtip',
           buttons: [
                      'pdf','print',
                      ]

       });
     });
    </script>
</body>

</html>
