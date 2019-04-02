<?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
  $sessionUsername =  authentication::getSessionUsername();
?>


<?php
include_once "config/connectDB.php";
$count = 0;
$class = new allDB();
 $sql = "setting WHERE name = '$sessionUsername' ";
$sql .= " ORDER BY id_setting DESC ";
$row = $class->select($sql);
?>

<div class="col-lg-6">
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
    <!-- <h4 class="col-12 col-sm-12 text-center">รายงานการสำรองข้อมูล</h4> -->
    </div>
</div>
<div class="card card-small mb-4">
    <div class="card-header border-bottom">
    <h6 class="m-0">เลือกรายการการเพิ่มและลด</h6>
    </div>
 <form action="core.php?page=Previous2" method="post">
<ul class="list-group list-group-flush">
    <li class="list-group-item p-2">
    <div class="row">
    <div class="col">
   
        <div class="form-row ">
            <div class="form-group col-md-12">
            <label>เลือกไดเรกทอรี่ที่ต้องการดูรายงานการเพิ่มลด</label>
                <select id="pathBackup" class="form-control" name="dir_src">                   
                    <?php
                    while ($Row = $row->fetch_assoc()) {
                        echo '<option value=" ' . $Row["dir_src"] . ' ">' . $Row["dir_src"] . '</option>';
                    }
                    $class->closeDB();
                    ?>
                </select>                       
            </div>
        </div>
    </div>
    </div>
    
    </li>
    <li  class="list-group-item p-4">
    
         <div class="form-group">
         <div class="form-control">
            เลือกรายการที่ต้องการดู 
         </div>                       
            <label class="form-control" for="backup">
                <input type="radio" name="status" id="backup" checked value="B">สำรองข้อมูล
            </label>            
            <label class="form-control" for="recovery">
                <input  type="radio" name="status" id="recovery" value="R"> การกู้คืนข้อมูล
            </label>
            <label class="form-control" for="checkdata">
                <input type="radio" name="status" id="checkdata" value="C">ตรวจสอบด้วยตัวเอง
            </label>
         </div>  
        <span class="d-flex justify-content-center">
            <button type="submit" class="btn btn-accent col-md-3 " >ถัดไป</button>
        </span>
        </div>
    </li>
</ul>

</form>
