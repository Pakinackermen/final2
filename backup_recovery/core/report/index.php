  <?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
?>



<div class="col-lg-12">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
      <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
      <h3 class="page-title">ระบบรายงาน</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-5">
      <ul class="list-group">
        <li class="list-group-item">
          
        </li>
        <li class="list-group-item">
          <a href="core.php?report=backup&page=report">รายงานการสำรองข้อมูล</a>
        </li>
        <li class="list-group-item">
          <a href="core.php?report=recovery&page=report">รายงานการกู้คืนข้อมูล</a>
        </li>
        <li class="list-group-item">
          <a href="core.php?report=checkdata&page=report">รายงานการตรวจสอบข้อมูลด้วยตัวเอง</a>
        </li>
        <li class="list-group-item">
          <a href="core.php?page=Previous">รายงานการตรวจสอบเพิ่มและลดของข้อมูล</a>
        </li>
      </ul>
    </div>
  </div>