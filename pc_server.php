<?php 
//connection to the database
  $konek = mysqli_connect('localhost', 'root', '', 'asset');

//disable update
 $updatePC=false;

  
//set default value as empty   
    $pc_id = 0; 
    $lab_location=""; 
    $pc_name="";
    $acqDate="";
    $manuDate="";
    $assetTag="";

    $processor="";
    $ram="";
    $hardDisk="";
    $videoCard="";
    $motherBoard="";
    $powerSupply="";
    $other="";

    $keyboard="";
    $mouse="";
    $monitor="";
    $headset="";
    ?>


<?php

//add computer unit to the database
     if(isset($_POST['addPC'])) {
       $lab_location= ($_POST['lab_location']);
       $pc_name= ($_POST['pc_name']);
       $acqDate = ($_POST['acqDate']);
       $manuDate = ($_POST['manuDate']);
       $assetTag = ($_POST['assetTag']);

       $processor = ($_POST['processor']);
       $ram = ($_POST['ram']);
       $hardDisk = ($_POST['hardDisk']);
       $videoCard = ($_POST['videoCard']);
       $motherBoard = ($_POST['motherBoard']);
       $powerSupply = ($_POST['powerSupply']);
       $other = ($_POST['other']);
 
       $keyboard = ($_POST['keyboard']);
       $mouse = ($_POST['mouse']);
       $monitor = ($_POST['monitor']);
       $headset = ($_POST['headset']);


      mysqli_query($konek,"INSERT INTO tb_pc(lab_location,pc_name,acqDate,manuDate,assetTag,processor,ram,hardDisk,videoCard,motherBoard,powerSupply,other,keyboard,mouse,monitor,headset)VALUES('$lab_location','$pc_name','$acqDate','$manuDate','$assetTag','$processor','$ram','$hardDisk','$videoCard','$motherBoard','$powerSupply','$other','$keyboard','$mouse','$monitor','$headset')");

      echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
      echo "<script>document.location='systemunit.php'</script>";
      }
?>
<?php 
if(isset($_POST['updatePC'])) {
       $lab_location=($_POST['lab_location']);
       $pc_name= ($_POST['pc_name']);
       $acqDate = ($_POST['acqDate']);
       $manuDate = ($_POST['manuDate']);
       $assetTag = ($_POST['assetTag']);

       $processor = ($_POST['processor']);
       $ram = ($_POST['ram']);
       $hardDisk = ($_POST['hardDisk']);
       $videoCard = ($_POST['videoCard']);
       $motherBoard = ($_POST['motherBoard']);
       $powerSupply = ($_POST['powerSupply']);
       $other = ($_POST['other']);

       $keyboard = ($_POST['keyboard']);
       $mouse = ($_POST['mouse']);
       $monitor = ($_POST['monitor']);
       $headset = ($_POST['headset']);
       $pc_id=($_POST['pc_id']);

      mysqli_query($konek, "UPDATE tb_pc SET lab_location='$lab_location',pc_name='$pc_name',acqDate='$acqDate',manuDate='$manuDate',assetTag='$assetTag',processor='$processor',ram='$ram',hardDisk='$hardDisk',videoCard='$videoCard',motherBoard='$motherBoard',powerSupply='$powerSupply',other='$other',keyboard='$keyboard',mouse='$mouse',monitor='$monitor',headset='$headset' WHERE pc_id=$pc_id");
         echo "<script type='text/javascript'>alert('Successfully updated!');</script>";
         echo "<script>document.location='systemunit.php'</script>";
    }

  /* if (isset($_POST['cancelPCupdate'])) {
         $updatePC=false;*/
     
?>
<?php
      if (isset($_GET['delPC'])) {
         $pc_id = $_GET['delPC'];
         mysqli_query($konek, "DELETE FROM tb_pc WHERE pc_id=$pc_id");
         echo "<script type='text/javascript'>alert('Successfully DELETED!');</script>";
         echo "<script>document.location='systemunit.php'</script>";
         } ?>


<?php //fetching the data of pc location
$type_res = mysqli_query($konek, "SELECT location FROM tb_location WHERE location_id=10");
$type = "";

while($row2 = mysqli_fetch_array($type_res))
   {
    $type = $type."<option>$row2[0]</option>";
   }
  ?>

<?php //fetching the data of printercon brand
$brand_res = mysqli_query($konek, "SELECT brand FROM tb_brand WHERE brand_id=4");
$brand = "";

while($row2 = mysqli_fetch_array($brand_res))
   {
    $brand = $brand."<option>$row2[0]</option>";
   }
  ?>

<?php //fetching the data of printercon model
$model_res = mysqli_query($konek, "SELECT model FROM tb_model WHERE model_id=4");
$model = "";

while($row2 = mysqli_fetch_array($model_res))
   {
    $model = $model."<option>$row2[0]</option>";
   }
  ?>





  <?php  //fetching the data of printercon location
$location_res = mysqli_query($konek, "SELECT location FROM tb_location WHERE location_id=4");
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
