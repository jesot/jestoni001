<?php include('dbcon.php');
 if($_POST['request'])
  {
  	$request = $_POST['request'];
    $search_result = mysqli_query($konek, "SELECT * FROM tb_printer WHERE  printer_name='$request' AND printer_kondition='Not_Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $total = $number_of_rows; 
 }
?>
  
    <table id="printerTable" class="table table-hover table-bordered">
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
                                    <a href="aircon.php?editAir=<?php echo $row['air_id']; ?>" class="btn btn-primary" rel="tab">Repair</a>
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
                           <?php include('datatables.php');?>


    <script type="text/javascript">
   $(document).ready(function() {
    $('#printerTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', 'excel',
        ]
    } );
} );
    </script>