  <?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backup";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM setting";
$result = $conn->query($sql);

// $ftp = "SELECT * FROM ftp";
// $selectftp = $conn->query($ftp);

?>
<div class="col-lg-6">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
      <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
      <h3 class="page-title">ระบบตรวจสอบด้วยตัวเอง</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <div class="card card-small mb-4">
    <div class="card-header border-bottom">
      <h6 class="m-0">ตรวจสอบข้อมูล</h6>
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item p-4">
        <div class="row">
          <div class="col">
            <form action="backend\checkData\checkNewFile.php" method="post">
              <div class="form-row h-10">
                <div class="form-group col-md-12">
                  <label>เลือกไดเรกทอรี่ที่ต้องการ</label>
                  <select id="pathBackup" class="form-control" name="checkdata">
                    <option selected>ตรวจสอบไดเรกทอรี่...</option>
                    <?php
                       while($row = $result->fetch_assoc()) {
                          echo "<option value='".$row['dir_src']."'> ".$row['dir_src']."</option>";                        
                      }  
                    ?>
                  </select>
                </br>                
                  <span class="d-flex justify-content-center">
                    <button type="submit" name="status" value="C" class="btn btn-accent col-md-3 ">ยืนยัน</button>
                  </span>
            </form>
            </div>
            </div>
      </li>
    </ul>
    </div>
    </div>
