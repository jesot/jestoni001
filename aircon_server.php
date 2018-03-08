 

  <?php 

  $konek = mysqli_connect('localhost', 'root', '', 'asset');

    $updateAircon=false;
    $air_type= "";
    $air_brand="";
    $air_model= "";
    $air_location= "";
    $air_kondition= "";
    $dateadded= "";
    $air_serial= "";
    $air_name="";
    $air_id = 0;
   //adding an aircon
    ?>
   <?php if(isset($_POST['CancelupdateAircon'])) {
    $updateAircon=false;
    $air_type= "";
    $air_brand="";
    $air_model= "";
    $air_location= "";
    $air_kondition= "";
    $dateadded= "";
    $air_serial= "";
    $air_name="";
    $air_id = 0;
   }
    
    ?> 
<?php
     if(isset($_POST['addAircon'])) {
   //id
       $air_name= ($_POST['air_name']);
       $air_type = ($_POST['air_type']);
       $air_brand = ($_POST['air_brand']);
       $air_model = ($_POST['air_model']);
       $air_location = ($_POST['air_location']);
       $air_kondition = ($_POST['air_kondition']);
    //dateadded
       $air_serial = ($_POST['air_serial']);
   
       
      mysqli_query($konek,"INSERT INTO tb_aircon(air_type,air_brand,air_model,air_location,
       air_kondition,dateadded,air_serial,air_name) VALUES ('$air_type','$air_brand','$air_model','$air_location',
       '$air_kondition',now(),'$air_serial','$air_name')");
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='aircon.php'</script>";
      }

?>
<?php

    if(isset($_POST['updateAircon'])) {

       $air_type = ($_POST['air_type']);
       $air_brand = ($_POST['air_brand']);
       $air_model = ($_POST['air_model']);
       $air_location = ($_POST['air_location']);
       $air_serial = ($_POST['air_serial']);
       $air_name = ($_POST['air_name']);
       $air_id = ($_POST['air_id']); 
       mysqli_query($konek, "UPDATE tb_aircon SET air_type='$air_type',air_brand='$air_brand',air_model='$air_model',air_location='$air_location', air_serial='$air_serial', air_name='$air_name' WHERE air_id=$air_id");
         echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
         echo "<script>document.location='aircon.php'</script>";
    }

  
   if (isset($_GET['delAir'])) {
  $air_id = $_GET['delAir'];
  mysqli_query($konek, "DELETE FROM tb_aircon WHERE air_id=$air_id");
 // $_SESSION['message'] = "Successfully DELETED!"; 

         echo "<script type='text/javascript'>alert('Successfully DELETED!');</script>";
         echo "<script>document.location='aircon.php'</script>";
  $results = "SELECT * FROM tb_aircon ORDER BY dateadded";     
} ?>


             
<?php //fetching the data of aircon type
$type_res = mysqli_query($konek, "SELECT type FROM tb_type WHERE type_id=1");
$type = "";

while($row2 = mysqli_fetch_array($type_res)) 
   {
    $type = $type."<option>$row2[0]</option>";

   }
  ?>


<?php //fetching the data of aircon brand
$brand_res = mysqli_query($konek, "SELECT brand FROM tb_brand WHERE brand_id=1");
$brand = "";

while($row2 = mysqli_fetch_array($brand_res)) 
   {
    $brand = $brand."<option>$row2[0]</option>"; 

   }
  ?>

<?php //fetching the data of aircon model
$model_res = mysqli_query($konek, "SELECT model FROM tb_model WHERE model_id=1");
$model = "";

while($row2 = mysqli_fetch_array($model_res)) 
   {
    $model = $model."<option>$row2[0]</option>"; 

   }
  ?>





  <?php  //fetching the data of aircon location
$location_res = mysqli_query($konek, "SELECT location FROM tb_location WHERE location_id=1");
$location = "";

while($row2 = mysqli_fetch_array($location_res)) 
   {
    $location = $location."<option>$row2[0]</option>";

   }

if(isset($_POST['airLocation'])) {
      $air_location = $_POST['air_location'];
      $search_result = mysqli_query($konek,"SELECT * FROM tb_aircon WHERE air_location='$air_location'");

}




  ?>
  <?php  //fetching the data of aircon location
$kondition_res = mysqli_query($konek, "SELECT kondition FROM tb_condition WHERE condition_id=1");
$kondition = "";

while($row2 = mysqli_fetch_array($kondition_res)) 
   {
    $kondition = $kondition."<option>$row2[0]</option>";

   }
  ?>
    <?php  //fetching the data of aircon location
$name_res = mysqli_query($konek, "SELECT air_name FROM tb_aircon");
$name = "";

while($row2 = mysqli_fetch_array($name_res)) 
   {
    $name = $name."<option>$row2[0]</option>";
    
   }
  ?>



