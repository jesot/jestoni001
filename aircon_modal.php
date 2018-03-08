<!-- adding types of aircon -->

<?php 

  include('dbcon.php');
  ob_start();

?>
  <div class="modal fade in" id="addAirType" tabindex="-1" role="dialog" aria-labelledby="     exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD TYPE OF AIRCON:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="" method="POST">
          <div class="modal-body">
            <input class="hidden" name="type_id" value="1">
            <input class="form-control" placeholder="type of aircon" name="type">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addAirType">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>
<?php 
//inserting type of aircon 
if (isset($_POST['addAirType'])) {

    $type_id = ($_POST['type_id']);
    $type = strip_tags($_POST['type']);

    mysqli_query($konek, "INSERT INTO tb_type(type_id,type) VALUES ('$type_id','$type')"); 
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='aircon.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>

<!-- adding brand of aircon -->
<div class="modal fade in" id="addAirBrand" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD BRAND</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="" method="POST">
          <div class="modal-body">
            <input class="hidden" name="brand_id" value="1">
            <input class="form-control" placeholder="brand of aircon" name="brand">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="asset_add.php" name="addAirBrand">SAVE</button>

          </div>
        </form>
        </div>
      </div>
    </div>
<?php 
//inserting type of aircon 
if (isset($_POST['addAirBrand'])) {

    $brand_id = ($_POST['brand_id']);
    $brand = strip_tags($_POST['brand']);

    mysqli_query($konek, "INSERT INTO tb_brand(brand_id,brand) VALUES ('$brand_id','$brand')"); 
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='aircon.php'</script>";

  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>
<!-- adding model of aircon -->
<div class="modal fade in" id="addAirModel" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD MODEL</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="" method="POST">
          <div class="modal-body">
            <input class="hidden" name="model_id" value=1>
            <input class="form-control" placeholder="model of aircon" name="model">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="asset_add.php" name="addAirModel">SAVE</button>

          </div>
        </form>
        </div>
      </div>
    </div>
<?$konek=close;?>
<?php $konek=mysqli_connect("localhost","root","","asset");
 //inserting MODEL of aircon 
 if (isset($_POST['addAirModel'])) {

    $model_id = ($_POST['model_id']);
    $model = strip_tags($_POST['model']);

    mysqli_query($konek, "INSERT INTO tb_model(model_id,model) VALUES ('$model_id','$model')"); 
  echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='aircon.php'</script>";


  //$results = mysqli_query($konek, "SELECT * FROM tb_brand");
  }

?>
<!-- adding model of aircon -->
<div class="modal fade in" id="addAirLocation" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
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
            <input class="hidden" name="location_id" value="1">
            <input class="form-control" placeholder="location of aircon" name="location">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" href="asset_add.php" name="addAirLocation">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>

<?php 
 //inserting LOCATION of aircon 
 if (isset($_POST['addAirLocation'])) {

    $locate_id = ($_POST['location_id']);
    $locate = strip_tags($_POST['location']);
    mysqli_query($konek, "INSERT INTO tb_location(location_id,location) VALUES ('$locate_id','$locate')"); 
  echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='aircon.php'</script>";
  }

?>

<!-- modal delete aircon -->



