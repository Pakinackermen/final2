
<?php
include_once "../../link/linkup.php";
?>
<form action="/backup_recovery/core.php?page=setting" method="post">
<div class="card card-small  text-center mb-4 ">
  <div class="card-header border-bottom">
    <h4 class="m-0" ><?=$h4?></h4>
  </div>
  <ul class="list-group list-group-flush ">
    <li class="list-group-item p-2">
      <div class="row">
        <div class="col">
          <div class="form-row">
          <div class="form-group col-md-12 justify-content-center">
              <span style="color:red;"><?= $txt ?></span>
          </div>
          <div class="form-group col-md-12 justify-content-center">
            <button type="submit" value="S" name="settingInsert" class="btn btn-danger col-md-2">ตกลง</button>
          </div>
        </div>
      </div>
    </li>
  </ul>
  </div>

</form>
<?php
include_once "../../link/linkdown.php";
?>