 

  <?php 

  $konek = mysqli_connect('localhost', 'root', '', 'asset');

    $updatePrinter=false;
    $tv_type= "";
    $tv_brand="";
    $tv_model= "";
    $tv_location= "";
    $tv_kondition= "";
    $dateadded= "";
    $tv_serial= "";
    $tv_name="";
    $tv_id = 0;
   //adding a printer
    ?>
<?php
     if(isset($_POST['addTV'])) {
   //id
       $tv_name= ($_POST['tv_name']);
      $tv_type = ($_POST['tv_type']);
       $tv_brand = ($_POST['tv_brand']);
       $tv_model = ($_POST['tv_model']);
       $tv_location = ($_POST['tv_location']);
       $tv_kondition = ($_POST['tv_kondition']);
    //dateadded
       $tv_serial = ($_POST['tv_serial']);
   
       
      mysqli_query($konek,"INSERT INTO tb_tv(tv_type,tv_brand,tv_model,tv_location,
       tv_kondition,dateadded,tv_serial,tv_name) VALUES ('$tv_type','$tv_brand','$tv_model','$tv_location',
       '$tv_kondition',now(),'$tv_serial','$tv_name')");

          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='television.php'</script>";
      }

?>
<?php

    if(isset($_POST['updateTV'])) {

       $tv_type = ($_POST['tv_type']);
       $tv_brand = ($_POST['tv_brand']);
       $tv_model = ($_POST['tv_model']);
       $tv_location = ($_POST['tv_location']);
       $tv_serial = ($_POST['tv_serial']);
       $tv_name = ($_POST['tv_name']);
       $tv_id = ($_POST['tv_id']); 

       mysqli_query($konek, "UPDATE tb_tv SET tv_type='$tv_type',tv_brand='$tv_brand',tv_model='$tv_model',tv_location='$tv_location', tv_serial='$tv_serial', tv_name='$tv_name' WHERE tv_id=$tv_id");
         echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
         echo "<script>document.location='television.php'</script>";
    }

  
      if (isset($_GET['delTV'])) {
         $tv_id = $_GET['delTV'];
         mysqli_query($konek, "DELETE FROM tb_tv WHERE tv_id=$tv_id");
         echo "<script type='text/javascript'>alert('Successfully DELETED!');</script>";
         echo "<script>document.location='television.php'</script>";  
         } ?>


             

<?php //fetching the data of aircon type
$type_res = mysqli_query($konek, "SELECT type FROM tb_type WHERE type_id=3");
$type = "";

while($row2 = mysqli_fetch_array($type_res)) 
   {
    $type = $type."<option>$row2[0]</option>";

   }
  ?>

<?php //fetching the data of printercon brand
$brand_res = mysqli_query($konek, "SELECT brand FROM tb_brand WHERE brand_id=3");
$brand = "";

while($row2 = mysqli_fetch_array($brand_res)) 
   {
    $brand = $brand."<option>$row2[0]</option>"; 

   }
  ?>

<?php //fetching the data of printercon model
$model_res = mysqli_query($konek, "SELECT model FROM tb_model WHERE model_id=3");
$model = "";

while($row2 = mysqli_fetch_array($model_res)) 
   {
    $model = $model."<option>$row2[0]</option>"; 

   }
  ?>





  <?php  //fetching the data of printercon location
$location_res = mysqli_query($konek, "SELECT location FROM tb_location WHERE location_id=3");
$location = "";

while($row2 = mysqli_fetch_array($location_res)) 
   {
    $location = $location."<option>$row2[0]</option>";

   }
  ?>
  <?php  //fetching the data of printercon location
$kondition_res = mysqli_query($konek, "SELECT kondition FROM tb_condition WHERE condition_id=1");
$kondition = "";

while($row2 = mysqli_fetch_array($kondition_res)) 
   {
    $kondition = $kondition."<option>$row2[0]</option>";

   }
  ?>


