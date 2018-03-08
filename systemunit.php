<?php
include('ifnotlogin.php');
?>

<?php include('pc_server.php');

if (isset($_GET['editPC'])) {
    $pc_id = $_GET['editPC'];
    $updatePC = true;

    $systemunit= mysqli_query($konek, "SELECT * FROM tb_pc WHERE pc_id='$pc_id'");

 if (count($systemunit) == 1 ) {
    $n = mysqli_fetch_array($systemunit);
    $lab_location=$n['lab_location'];
    $pc_name = $n['pc_name'];
    $acqDate = $n['acqDate'];
    $manuDate = $n['manuDate'];
    $assetTag = $n['assetTag'];

    $processor = $n['processor'];
    $ram = $n['ram'];
    $hardDisk = $n['hardDisk'];
    $videoCard = $n['videoCard'];
    $motherBoard = $n['motherBoard'];
    $powerSupply=$n['powerSupply'];
    $other=$n['other'];

    $keyboard=$n['keyboard'];
    $mouse=$n['mouse'];
    $monitor=$n['monitor'];
    $headset=$n['headset'];
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
       
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <hr>
                 <h3 class="panel-title" style="text-align:center"><span class=""></span><strong> Add Computer Unit</strong></h3><hr>
                </div>
                <form method="POST" action="">
                <div class="panel-body">
        <div class="panel-body">
          <div class="col-md-12" style="padding-left: 0px;"><label>I. General Information</label></div>
          <form action="" method="POST">
             <input type="text" class="hidden" name="pc_id" placeholder="" value="<?php echo $pc_id;?>">    <div class="col-md-3"><label for="computer name">Location:</label></div>
                    <div class="col-md-7">
                     <select class="form-control" name="lab_location" value="<?php echo $lab_location; ?>">
                        <?php echo $type; ?>
                     </select><br>
                    </div>
                  <div class="col-md-3"><label for="computer name">Computer Name:</label></div>
                    <div class="col-md-7">
                     
                       <input type="text" class="form-control" name="pc_name" placeholder="e.g. FACULTY-PC" value="<?php echo $pc_name;?>"><br>
                    </div>

                   <div class="col-md-3"><label for="DateofAcquisition">Date of Acquisition:</label></div>
                     <div class="col-md-7">
                         <input type="Date" class="form-control" name="acqDate" placeholder="Date of Acquisition" value="<?php echo $acqDate;?>"> <br>
                     </div>

                   <div class="col-md-3"><label for="ManufacturedDate">Manufactured Date:</label></div>
                     <div class="col-md-7">
                         <input type="Date" class="form-control" name="manuDate" placeholder="Date of Acquisition" value="<?php echo $manuDate;?>"><br>
                     </div>

                   <div class="col-md-3"><label for="name">Asset Tag:</label></div>
                   <div class="col-md-7">
                         <input type="text" class="form-control" name="assetTag" placeholder="asset tag" value="<?php echo $assetTag;?>"><br>
                   </div>
         

          <div class="col-md-12" style="padding-left: 0px;">
                   <hr>
            <label style="font-weight: bold;">II. Specification:System Unit </label></div>
                       
                <div class="col-md-3"><label for="processor">Processor:</label></div>
                 <div class="col-md-7">
                    <input style="" type="text" class="form-control" name="processor" placeholder="processor" value="<?php echo $processor;?>"><br>
                 </div>

                 <div class="col-md-3"><label for="RAM">RAM:</label></div>
                   <div class="col-md-7">
                     <input style="" type="text" class="form-control" name="ram" placeholder="random access memory" value="<?php echo $ram;?>"> <br>
                   </div>

                 <div class="col-md-3"><label for="hard disk">Hard Disk:</label></div>
                  <div class="col-md-7">
                     <input type="text" class="form-control" name="hardDisk" 
                     placeholder="Hard Disk" value="<?php echo $hardDisk;?>"><br>
                 </div>

                <div class="col-md-3"><label for="name">Video Card:</label></div>
                  <div class="col-md-7">
                     <input  type="text" class="form-control" name="videoCard" placeholder="Video Card" value="<?php echo $videoCard;?>"><br>
                 </div>

                <div class="col-md-3"><label for="Motherboard">Motherboard:</label></div>
                  <div class="col-md-7">
                     <input type="text" class="form-control" name="motherBoard" placeholder="Motherboard" value="<?php echo $motherBoard;?>"><br>
                 </div>
                 
                <div class="col-md-3"><label for="power supply">Power Supply Unit:</label></div>
                  <div class="col-md-7">
                    <input style="" type="text" class="form-control" name="powerSupply" placeholder="power supply unit" value="<?php echo $powerSupply;?>">
                    <br>
                 </div>
                 
               <div class="col-md-3"><label for="Expansion">Other Expansion(If Applicable):
                                     </label></div>
                  <div class="col-md-7">
                    <input style="" type="text" class="form-control" name="other" placeholder="Other Expansion(If Applicable)" value="<?php echo $other;?>"><br>
                  </div>

         <div class="col-md-12" style="padding-left: 0px;">
                 <hr>
            <label style="font-weight: bold;">III. I/O Devices </label><br></div>
            <div class="col-md-3"><label for="Keyboard">Keyboard:
                                  </label></div>
              <div class="col-md-7">
                <input style="" type="text" class="form-control" name="keyboard" placeholder="keyboard" value="<?php echo $keyboard;?>"><br>
              </div>
               <div class="col-md-3"><label for="mouse">Mouse:
                                  </label></div>
              <div class="col-md-7">
                <input style="" type="text" class="form-control" name="mouse" placeholder="mouse" value="<?php echo $mouse;?>"><br>
              </div>
               <div class="col-md-3"><label for="Monitor">Monitor:
                                  </label></div>
              <div class="col-md-7">
                <input style="" type="text" class="form-control" name="monitor" placeholder="monitor" value="<?php echo $monitor;?>"><br>
              </div>
               <div class="col-md-3"><label for="headset">Headset:
                                  </label></div>
              <div class="col-md-7">
                <input style="" type="text" class="form-control" name="headset" placeholder="headset" value="<?php echo $headset;?>"><br>
              </div>
  
                <hr>
                 <div class="col-md-12">
                   <?php if ($updatePC == true): ?>
                   <button class="btn btn-info" type="Submit" name="updatePC">UPDATE</button>
              
                     <button class="btn btn-danger" type="reset" name="cancelPCupdate">CANCEL</button>
                    <?php else: ?>
                 
                  <button class="btn btn-success" name="addPC">SAVE</button>
               
                  <button class="btn btn-default" type="reset" name="">CLEAR</button>
                   <?php endif ?>
                 </div>
        
       
              </div>
                   </form>
  <!--panel body end--></div>
                        </div>
   <!--panel end-->     </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-body">
                               <div style="overflow-x: auto">
                                <table id="pcTable">
                               
                                   <h1>List of Computers</h1>
                                   <br> 
                                    <tr>
                                        <th colspan="2">Actions</th>
                                        <th>PC ID</th>
                                        <th>Location</th>
                                        <th>Computer Name</th>
                                        <th>Acquisition Date</th>
                                        <th>Manufactured Date</th>
                                        <th>Asset Tag</th>

                                        <th>Processor</th>
                                        <th>RAM</th>
                                        <th>HardDisk</th>
                                        <th>Video Card</th>
                                        <th>MotherBoard</th>
                                        <th>Power Supply</th>
                                        <th>Other Expansion</th>

                                        <th>Keyboard</th>
                                        <th>Mouse</th>
                                        <th>Monitor</th>
                                        <th>Headset</th>
                                    </tr>
                             
                             <?php
                      // retrieve selected results from database and display them on page
                             $search_result = mysqli_query($konek, 'SELECT * FROM tb_pc');
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                   <td>
                                     <a href="systemunit.php?editPC=<?php echo $row['pc_id']; ?>" class="btn btn-info lnr lnr-pencil" rel="tab"></a>
                                   </td>
                                   <td>
                                     <a href="pc_server.php?delPC=<?php echo $row['pc_id']; ?>" class="btn btn-danger lnr lnr-trash" onclick="return confirm('Are you sure? Click cancel if not!')" rel="tab"></a>
                                    </td>
                                    <td><?php echo $row['pc_id']; ?></td>
                                    <td><?php echo $row['lab_location'];?></td>
                                    <td><?php echo $row['pc_name']; ?></td>
                                    <td><?php echo $row['acqDate']; ?></td>
                                    <td><?php echo $row['manuDate']; ?></td>
                                    <td><?php echo $row['assetTag']; ?></td>

                                    <td><?php echo $row['processor']; ?></td>
                                    <td><?php echo $row['ram']; ?></td>
                                    <td><?php echo $row['hardDisk']; ?></td>
                                    <td><?php echo $row['videoCard']; ?></td>
                                    <td><?php echo $row['motherBoard']; ?></td>
                                    <td><?php echo $row['powerSupply']; ?></td>
                                    <td><?php echo $row['other']; ?></td>

                                    <td><?php echo $row['keyboard']; ?></td>
                                    <td><?php echo $row['mouse']; ?></td>
                                    <td><?php echo $row['monitor']; ?></td>
                                    <td><?php echo $row['headset']; ?></td>
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
    $('#pcTable').DataTable( {
        dom: 'Bfrtip',
        buttons: ['pdf','print',
        ]
    } );
} );
    </script>
