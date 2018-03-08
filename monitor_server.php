<?php include('dbcon.php'); 
$updateMouse=false;

$pc_name="";
$mouse_type="";
$mouse_brand="";
$mouse_model="";
$mouse_serial="";
$mouse_id=0;

?>

<?php 
     if(isset($_POST['updateMouse'])) {
       $mouse_id = ($_POST['mouse_id']); 
       $mouse_type = ($_POST['mouse_type']);
       $mouse_brand = ($_POST['mouse_brand']);
       $mouse_model = ($_POST['mouse_model']);
     //  $mouse_location = ($_POST['mouse_location']);
       $mouse_serial = ($_POST['mouse_serial']);
     //  $mouse_name = ($_POST['mouse_name']);
   

       mysqli_query($konek, "UPDATE tb_mouse SET mouse_type='$mouse_type',mouse_brand='$mouse_brand',mouse_model='$mouse_model',mouse_serial='$mouse_serial' WHERE mouse_id=$mouse_id");
         echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
         echo "<script>document.location='mouse.php'</script>";
    }


 ?>

<?php //fetching the data location
     $pcres = mysqli_query($konek, "SELECT pc_name FROM tb_pc_nonbranded");
     $pc1_name = "";
          while($row2 = mysqli_fetch_array($pcres)) 
                  {
          $pc1_name= $pc1_name."<option>$row2[0]</option>"; 
                  }
    ?>

    <?php //fetching the data location
     $pcres = mysqli_query($konek, "SELECT type FROM tb_type WHERE type_id=5");
     $mouse1_type = "";
          while($row2 = mysqli_fetch_array($pcres)) 
                  {
          $mouse1_type= $mouse1_type."<option>$row2[0]</option>"; 
                  }
    ?>

    <?php 
//inserting type of mouse 
if (isset($_POST['addmouseType'])) {

    $type_id = ($_POST['type_id']);
    $type = strip_tags($_POST['type']);

    mysqli_query($konek, "INSERT INTO tb_type(type_id,type) VALUES ('$type_id','$type')"); 
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='mouse.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>

     <?php //fetching the data location
     $pcres = mysqli_query($konek, "SELECT brand FROM tb_brand WHERE brand_id=5");
     $brand = "";
          while($row2 = mysqli_fetch_array($pcres)) 
                  {
          $brand= $brand."<option>$row2[0]</option>"; 
                  }
    ?>
    <?php 

if (isset($_POST['addmouseBrand'])) {

    $brand_id = ($_POST['brand_id']);
    $brandname = strip_tags($_POST['brand']);

    mysqli_query($konek, "INSERT INTO tb_brand(brand_id,brand) VALUES ('$brand_id','$brandname')"); 
   $brand="";
         echo "<script>document.location='mouse.php'</script>";
           echo "<script type='text/javascript'>alert('Successfully Added $brandname!');</script>";
    }

?>

<?php

if (isset($_POST['addMouse'])) {
    $pc1_name =  ($_POST['pc_name']);
    $mouse_type = ($_POST['mouse_type']);
    $mouse_brand = ($_POST['mouse_brand']);
    $mouse_model = ($_POST['mouse_model']);
    $mouse_serial = ($_POST['mouse_serial']);

    mysqli_query($konek, "INSERT INTO tb_mouse(pc_name,mouse_type,mouse_brand,mouse_model,mouse_serial,dateinstalled) VALUES ('$pc1_name','$mouse_type','$mouse_brand','$mouse_model','$mouse_serial',now())"); 
   echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
         echo "<script>document.location='mouse.php'</script>";
           


  }



 ?>

 <?php
  if (isset($_GET['delMouse'])) {
  $mouse_id = $_GET['delMouse'];
  mysqli_query($konek, "DELETE FROM tb_mouse WHERE mouse_id=$mouse_id");
 // $_SESSION['message'] = "Successfully DELETED!"; 

         echo "<script type='text/javascript'>alert('Successfully DELETED!');</script>";
         echo "<script>document.location='mouse.php'</script>";

}
 ?>