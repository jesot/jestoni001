 

  <?php

  $konek = mysqli_connect('localhost', 'root', '', 'asset');

    $updatePrinter=false;
    $printer_type= "";
    $printer_brand="";
    $printer_model= "";
    $printer_location= "";
    $printer_kondition= "";
    $dateadded= "";
    $printer_serial= "";
    $printer_name="";
    $printer_id = 0;
   //adding a printer
    ?>
<?php
     if(isset($_POST['addPrinter'])) {
   //id
       $printer_name= ($_POST['printer_name']);
      $printer_type = ($_POST['printer_type']);
       $printer_brand = ($_POST['printer_brand']);
       $printer_model = ($_POST['printer_model']);
       $printer_location = ($_POST['printer_location']);
       $printer_kondition = ($_POST['printer_kondition']);
    //dateadded
       $printer_serial = ($_POST['printer_serial']);
   
       
      mysqli_query($konek,"INSERT INTO tb_printer(printer_type,printer_brand,printer_model,printer_location,
       printer_kondition,dateadded,printer_serial,printer_name) VALUES ('$printer_type','$printer_brand','$printer_model','$printer_location',
       '$printer_kondition',now(),'$printer_serial','$printer_name')");

          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='printer.php'</script>";
      }

?>
<?php

    if(isset($_POST['updatePrinter'])) {

       $printer_type = ($_POST['printer_type']);
       $printer_brand = ($_POST['printer_brand']);
       $printer_model = ($_POST['printer_model']);
       $printer_location = ($_POST['printer_location']);
       $printer_serial = ($_POST['printer_serial']);
       $printer_name = ($_POST['printer_name']);
       $printer_id = ($_POST['printer_id']); 

       mysqli_query($konek, "UPDATE tb_printer SET printer_type='$printer_type',printer_brand='$printer_brand',printer_model='$printer_model',printer_location='$printer_location', printer_serial='$printer_serial', printer_name='$printer_name' WHERE printer_id=$printer_id");
         echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
         echo "<script>document.location='printer.php'</script>";
    }

  
      if (isset($_GET['delPrinter'])) {
         $printer_id = $_GET['delPrinter'];
         mysqli_query($konek, "DELETE FROM tb_printer WHERE printer_id=$printer_id");
         echo "<script type='text/javascript'>alert('Successfully DELETED!');</script>";
         echo "<script>document.location='printer.php'</script>";  
         } ?>


             

<?php //fetching the data of aircon type
$type_res = mysqli_query($konek, "SELECT type FROM tb_type WHERE type_id=2");
$type = "";

while($row2 = mysqli_fetch_array($type_res)) 
   {
    $type = $type."<option>$row2[0]</option>";

   }
  ?>

<?php //fetching the data of printercon brand
$brand_res = mysqli_query($konek, "SELECT brand FROM tb_brand WHERE brand_id=2");
$brand = "";

while($row2 = mysqli_fetch_array($brand_res)) 
   {
    $brand = $brand."<option>$row2[0]</option>"; 

   }
  ?>

<?php //fetching the data of printercon model
$model_res = mysqli_query($konek, "SELECT model FROM tb_model WHERE model_id=2");
$model = "";

while($row2 = mysqli_fetch_array($model_res)) 
   {
    $model = $model."<option>$row2[0]</option>"; 

   }
  ?>

<?php  //fetching the data of printercon location
$location_res = mysqli_query($konek, "SELECT location FROM tb_location WHERE location_id=2");
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
    <?php  //fetching the data of printercon location
$name_res = mysqli_query($konek, "SELECT printer_name FROM tb_printer");
$name = "";

while($row2 = mysqli_fetch_array($name_res)) 
   {
    $name = $name."<option>$row2[0]</option>";

   }
  ?>


