<!-- adding types of Printer -->

<?php 

  include('dbcon.php');
  ob_start();

?>
 
  <div class="modal fade in" id="addtvType" tabindex="-1" role="dialog" aria-labelledby="     exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD TYPE OF TELEVISION:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="tv_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="type_id" value="3">
            <input class="form-control" placeholder="type of television" name="type">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="television.php" name="addtvType">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>
<?php 
//inserting type of aircon 
if (isset($_POST['addtvType'])) {

    $type_id = ($_POST['type_id']);
    $type = strip_tags($_POST['type']);

    mysqli_query($konek, "INSERT INTO tb_type(type_id,type) VALUES ('$type_id','$type')"); 
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='television.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>

<!-- adding brand of Printer -->
<div class="modal fade in" id="addtvBrand" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD BRAND</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="tv_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="brand_id" value="3">
            <input class="form-control" placeholder="brand of television" name="brand">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="television.php" name="addtvBrand">SAVE</button>

          </div>
        </form>
        </div>
      </div>
    </div>
<?php 

if (isset($_POST['addtvBrand'])) {

    $brand_id = ($_POST['brand_id']);
    $brandname = strip_tags($_POST['brand']);

    mysqli_query($konek, "INSERT INTO tb_brand(brand_id,brand) VALUES ('$brand_id','$brandname')"); 
   $brand="";
         echo "<script type='text/javascript'>alert('Successfully Added $brandname!');</script>";
         echo "<script>document.location='television.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>
<!-- adding model of television -->
<div class="modal fade in" id="addtvModel" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD MODEL</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="tv_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="model_id" value=3>
            <input class="form-control" placeholder="model of television" name="model">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="television.php" name="addtvModel">SAVE</button>

          </div>
        </form>
        </div>
      </div>
    </div>
<?$konek=close;?>
<?php $konek=mysqli_connect("localhost","root","","asset");
 //inserting MODEL of Printer 
 if (isset($_POST['addtvModel'])) {

    $model_id = ($_POST['model_id']);
    $model = strip_tags($_POST['model']);

    mysqli_query($konek, "INSERT INTO tb_model(model_id,model) VALUES ('$model_id','$model')"); 
         echo "<script type='text/javascript'>alert('Successfully Added $model!');</script>";
         echo "<script>document.location='television.php'</script>";
    
     $model="";
  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>
<!-- adding model of Printer -->
<div class="modal fade in" id="addtvLocation" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD LOCATION</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="" method="POST">
          <div class="modal-body">
            <input class="hidden" name="location_id" value="3">
            <input class="form-control" placeholder="location of television" name="location">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="television.php" name="addtvLocation">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>

<?php 
 //inserting LOCATION of Printer 
 if (isset($_POST['addtvLocation'])) {

    $locate_id = ($_POST['location_id']);
    $locate = strip_tags($_POST['location']);
    mysqli_query($konek, "INSERT INTO tb_location(location_id,location) VALUES ('$locate_id','$locate')"); 
     $location="";
         echo "<script>document.location='television.php'</script>";
         echo "<script type='text/javascript'>alert('Successfully Added $locate!');</script>";
        
  }

?>






