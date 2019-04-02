  <?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
  $sessionUsername =  authentication::getSessionUsername();
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

    $sql = "SELECT * FROM setting WHERE name = " ."'$sessionUsername'";    
    $ftp = "SELECT * FROM ftp WHERE update_by = ". "'$sessionUsername'";
    $result = $conn->query($sql);
    $selectftp = $conn->query($ftp);

  ?>
<div class="col-lg-6">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4 ">
  
    <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
      <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
      <h3 class="page-title">ระบบสำรองข้อมูล</h3>
    </div>
    
  </div>
  <!-- End Page Header -->
  <div class="card card-small mb-4">
    <div class="card-header border-bottom">
      <h6 class="m-0">สำรองข้อมูล</h6>
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item p-4">
        <div class="row">
          <div class="col">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
            
            <form action="../../backup_recovery" method="get"></form>
              <!-- <div  class="form-group col-md-12">
              การสำรองฐานข้อมูล
              <a class="btn btn-secondary  d-flex justify-content-center" href="../../backup_recovery\core.php?page=backupDatabase">สำรองฐานข้อมูล</a>
              </div> -->
              <!-- <strong><a href="../../backup_recovery\backend\backup\exportdb.php">สำรองฐานข้อมูล</a></strong> -->
            </div>
            <form action="backend\backup\backupindex.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>เลือกไดเรกทอรี่ที่ต้องการ</label>
                  <select id="pathBackup" class="form-control" name="idSetting">
                    <option value="NULL">ไดเรกทอรี่...</option>
                    <?php
                      while($row = $result->fetch_assoc()) {
                          echo "<option value='".$row['id_setting']."'> ".$row['dir_src']."</option>";                        
                      }                      
                    ?>
                  </select>
                  </div>
                </div>
                </br>
                <div class="form-row">                
                    <div class="form-group col-md-12">
                      <label for="feEmailAddress">เลือก User FTP</label>
                      <select id="pathBackup" class="form-control" name="id_ftp">
                        <option value="NULL">USER...</option>
                        <?php
                          while($row = $selectftp->fetch_assoc()) {
                            echo "<option value='".$row['id_ftp']."'>".$row['ftp_username']."</option>";                        
                          }
                          $conn->close();
                        ?>
                      </select>
                    </div>                    
                  </div>
                           
                  <span class="d-flex justify-content-center">
                    <button type="submit" value="B" name="status" class="btn btn-accent col-md-3 ">ยืนยัน</button>
                  </span>                                    
            </form>            
            </div>
            </div>
      </li>
    </ul>
    </div>
    </div>
   
  

