<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM setting";
$result = $conn->query($sql);

$ftp = "SELECT * FROM ftp";
$resultFtp = $conn->query($ftp);

  // ftp map
if(isset($_POST['idSetting']) && isset($_POST['ftp_username'])){
  $que = "UPDATE setting 
    SET ftp_user = '".$_POST['ftp_username'] ."' 
    WHERE id_setting = ".$_POST['idSetting'];
  
  if($conn->query($que)){

    include_once "tamplat/success.php";
    die();
  }else{
    include_once "tamplat/fail.php";
    die();
  }
}
 

?>

<div class="col-lg-6">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <h3 class="page-title">การตั้งค่า</h3>
    </div>
  </div>
  <!-- End Page Header -->
      <?php 
        if( isset($_POST['add']) ){
          echo'<form action="setting\database\insert.php" method="POST">';
        // echo '<form action="http://localhost:9000/index.php" method="POST">';
            include "setting.backup.php";
            include "setting.selectUserftp.php";
            include "setting.line.php";     
            
            echo '<div class="form-control d-flex justify-content-center">
                  <button type="submit" class="btn btn-success col-md-5 mx-2" value="backup" name="add">ตกลง</button>   
                  <button type="button" class="btn btn-accent col-md-3" onclick="window.history.back()" name="edit">กลับ</button>
                </div>'; 
            echo'</from>';  
        }elseif(isset($_POST['edit'])){ ?>
          <!-- edit -->          
          <form action="setting\database\formedit.php" method="post">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อ</th>                    
                    <th scope="col">จัดการ</th>
                  </tr>
                </thead>
                <tbody>
              <?php 
              // select setting ID
              $c = 1;
                while($row = $result->fetch_assoc()) {
                               
              ?>                 
                  <tr>
                    <th scope="row"><?=$c++?></th>                    
                    <td><?= $row["dir_src"] ?></td>
                    <td>
                      <button type="submit" name="edit_setting" class="btn btn-warning" value="<?= $row["id_setting"] ?>">แก้ไข</button>
                    </td>
                  </tr>                
                          
               <?php 
               } // end loop 
                $conn->close();
              ?>
              <!-- end table -->
              </tbody>
              </table>
          </form>
        
      <?php }  //edit end 
      
      // ftp
        elseif( isset($_POST['addFtp']) ){
        echo '<form action="setting\database\insert.php" method="POST">';

        include "setting.ftp.php";

        echo '<div class="form-control d-flex justify-content-center">
                  <button type="submit" class="btn btn-success col-md-5 mx-2" value="addftp" name="addFtp">ตกลง</button>
                  <button type="button" class="btn btn-accent col-md-3" onclick="window.history.back()" name="edit">กลับ</button>
              </div>';              
        echo '</from>';
        
      }elseif( isset($_POST['editFtp']) ){ //edit FTP
        ?>
         <form action="setting\database\formFtpEdit.php" method="post">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">FTP Name</th>                    
                    <th scope="col">จัดการ</th>
                  </tr>
                </thead>
                <tbody>
              <?php 
              // select setting ID
              $c = 1;
                while($row = $resultFtp->fetch_assoc()) {
                               
              ?>                 
                  <tr>
                    <th scope="row"><?=$c++?></th>                    
                    <td><?= $row["ftp_username"] ?></td>
                    <td>
                      <button type="submit" class="btn btn-warning" name="edit_ftp" value="<?= $row["id_ftp"] ?>">แก้ไข</button>
                    </td>
                  </tr>                
                          
               <?php 
               } // end loop 
                $conn->close();
              ?>
              <!-- end table -->
              </tbody>
              </table>
          </form>
      <?php 
      }elseif( isset($_POST['editFtpUser']) )
       { 
        include_once "setting.ftpmap.php";

      }elseif( isset($_POST['addnew']) ){
        include_once "addnewUsers.php";

      }
       else{
          echo'
          <form action="core.php?page=setting" method="POST">
            <div class="form-control d-flex justify-content-center">
              <button type="submit" class="btn btn-accent col-md-5 " name="add">เพิ่มข้อมูลการทำงาน</button>          
            </div>            

            <div class="form-control d-flex justify-content-center">           
              <button type="submit" class="btn btn-accent col-md-5 " name="edit">แก้ไขข้อมูลการทำงาน</button>
            </div>

            <div class="form-control d-flex justify-content-center">
              <button type="submit" class="btn btn-info col-md-5 " name="addFtp">เพิ่มผู้ใช้ FTP</button>          
            </div>            

            <div class="form-control d-flex justify-content-center">
              <button type="submit" class="btn btn-info col-md-5 " name="editFtp">แก้ไขเพิ่มผู้ใช้ FTP</button>          
            </div>

            
            <div class="form-control d-flex justify-content-center">
              <button type="submit" class="btn btn-info col-md-5 " name="addnew">เพิ่มผู้ใช้ในระบบ</button>          
            </div>
          </form>';
        }
        // <div class="form-control d-flex justify-content-center">
        //   <button type="submit" class="btn btn-info col-md-5 " name="editFtpUser">เปลี่ยนผู้ใช้ FTP สำหรับกู้ข้อมูล</button>
        // </div>

      ?>
</div>
<script src="setting/setting.js"></script>
