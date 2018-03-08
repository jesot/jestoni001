<!-- adding types of Printer -->

<?php 

  include('dbcon.php');
  ob_start();

?>
 
  <!--<div class="modal fade in" id="addpcType" tabindex="-1" role="dialog" aria-labelledby="     exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD TYPE of pc:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="pc_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="type_id" value="3">
            <input class="form-control" placeholder="type o" name="type">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="television.php" name="addpcType">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>-->
<?php 
//inserting type of aircon 
/*if (isset($_POST['addpcType'])) {

    $type_id = ($_POST['type_id']);
    $type = strip_tags($_POST['type']);

    mysqli_query($konek, "INSERT INTO tb_type(type_id,type) VALUES ('$type_id','$type')"); 
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='television.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }*/

?>

<!-- adding brand of Printer -->
<div class="modal fade in" id="addmouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">+ Processor</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="pc_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="brand_id" value="4">
            <label></label>
           <select class="form-control" style="border-color: green" ><p contenteditable="true">
             <option>AMD</option>
              <option></option>
               <option></option>
                <option></option>
                 <option></option></p>
           </select><br>
             <input class="form-control" placeholder="brand of computer" name="brand">
              <input class="form-control" placeholder="brand of computer" name="brand">
               <input class="form-control" placeholder="brand of computer" name="brand">
                <input class="form-control" placeholder="brand of computer" name="brand">

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addpcBrand">SAVE</button>

          </div>
        </form>
        </div>
      </div>
    </div>
<?php 

if (isset($_POST['addpcBrand'])) {

    $brand_id = ($_POST['brand_id']);
    $brandname = strip_tags($_POST['brand']);

    mysqli_query($konek, "INSERT INTO tb_brand(brand_id,brand) VALUES ('$brand_id','$brandname')"); 
   $brand="";
         echo "<script type='text/javascript'>alert('Successfully Added $brandname!');</script>";
         echo "<script>document.location='systemunit.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>
<!-- adding model of pc -->
<div class="modal fade in" id="addpcModel" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD MODEL</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="pc_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="model_id" value=4>
            <input class="form-control" placeholder="model of pc" name="model">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="systemunit.php" name="addpcModel">SAVE</button>

          </div>
        </form>
        </div>
      </div>
    </div>
<?$konek=close;?>
<?php $konek=mysqli_connect("localhost","root","","asset");
 //inserting MODEL of Printer 
 if (isset($_POST['addpcModel'])) {

    $model_id = ($_POST['model_id']);
    $model = strip_tags($_POST['model']);

    mysqli_query($konek, "INSERT INTO tb_model(model_id,model) VALUES ('$model_id','$model')"); 
         echo "<script type='text/javascript'>alert('Successfully Added $model!');</script>";
         echo "<script>document.location='systemunit.php'</script>";
    
     $model="";
  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>
<!-- adding model of Printer -->
<div class="modal fade in" id="addpcLocation" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD LOCATION</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="pc_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="location_id" value="4">
            <input class="form-control" placeholder="location of pc" name="location">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="systemunit.php" name="addpcLocation">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>

<?php 
 //inserting LOCATION of Printer 
 if (isset($_POST['addpcLocation'])) {

    $locate_id = ($_POST['location_id']);
    $locate = strip_tags($_POST['location']);
    mysqli_query($konek, "INSERT INTO tb_location(location_id,location) VALUES ('$locate_id','$locate')"); 
     $location="";
         echo "<script type='text/javascript'>alert('Successfully Added $locate!');</script>";
         echo "<script>document.location='systemunit.php'</script>";
  }

?>






