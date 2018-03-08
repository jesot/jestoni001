<?php
  include('dbcon.php');

  ob_start();
 ?>
  <div class="modal fade in" id="addlocation" tabindex="-1" role="dialog" aria-labelledby="     exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add a location if not yet in the list!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="nonbrandedpcserver.php" method="POST">
          <div class="modal-body">
            <!-- <input class="hidden" name="type_id" value="3"> -->
            <input class="form-control" placeholder="location" name="location">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addlocation">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>
<?php 
//inserting type of aircon 
if (isset($_POST['addlocation'])) {

   // $type_id = ($_POST['type_id']);
    $location = strip_tags($_POST['location']);

    mysqli_query($konek, "INSERT INTO tb_location(location) VALUES ('$location')"); 
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='systemunitunbranded.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>

<?php 
//inserting pc
if (isset($_POST['addPC'])) {
   // $type_id = ($_POST['type_id']);
    $pc_name = ($_POST['pc_name']);
    $pc_location = ($_POST['pc_location']);
    $pc_kondition =($_POST['pc_kondition']);
    //$dateadded = strip_tags($_POST['location']);
    $pc_serial = ($_POST['pc_serial']);
    
      mysqli_query($konek,"INSERT INTO tb_pc_nonbranded(pc_name,pc_location,pc_kondition,dateadded,pc_serial) VALUES
          ('$pc_name','$pc_location','$pc_kondition',now(),'$pc_serial')"); 

          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='systemunitunbranded.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>
  <?php //fetching the data location
      $location_res = mysqli_query($konek, "SELECT location FROM tb_location");
      $location = "";
          while($row2 = mysqli_fetch_array($location_res)) 
                                  {
          $location = $location."<option>$row2[0]</option>"; 
                                  }
  ?>
  <?php //fetching the data location
     $konres = mysqli_query($konek, "SELECT kondition FROM tb_condition");
     $kon = "";
          while($row2 = mysqli_fetch_array($konres)) 
                  {
          $kon= $kon."<option>$row2[0]</option>"; 
                  }
    ?>