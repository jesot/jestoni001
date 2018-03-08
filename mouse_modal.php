
 <?php include('dbcon.php');
 ob_start();?>
  <!-- ADD TYPE OF MOUSE -->
  <div class="modal fade in" id="addmouseType" tabindex="-1" role="dialog" aria-labelledby="     exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD TYPE OF MOUSE:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="mouse_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="type_id" value="5">
            <input class="form-control" placeholder="type of mouse" name="type">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addmouseType">SAVE</button>
          </div>
        </form>
        </div>
      </div>
    </div>



<!-- ADD MOUSE BRAND -->
<div class="modal fade in" id="addmouseBrand" tabindex="-1" role="dialog" aria-labelledby="                exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD BRAND</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form action="mouse_modal.php" method="POST">
          <div class="modal-body">
            <input class="hidden" name="brand_id" value="5">
            <input class="form-control" placeholder="brand of mouse" name="brand">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="addmouseBrand">SAVE</button>

          </div>
        </form>
        </div>
      </div>
    </div>
