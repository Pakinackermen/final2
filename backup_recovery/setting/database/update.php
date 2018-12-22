
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body style="margin: 0 10% 10% 10%;">

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
        mysqli_set_charset($conn,"utf8");

        // update
        if(isset($_POST['update'])){  
          $namedata = $_POST['namedata'];
          $dir_src = $_POST['dir_src'];
          $id_ftp = $_POST['id_ftp'];
          $ftp_server = $_POST['ftp_server'];
          $ftp_user = $_POST['ftp_user'];
          $ftp_pass = $_POST['ftp_pass'];
          $database_user = $_POST['database_user'];
          $database_pass = $_POST['database_pass'];
          $database_name = $_POST['database_name'];
          $database_host = $_POST['database_host'];
          $token_line = $_POST['token_line'];
        
         if( isset($_POST['day']) ){
              $isday = $_POST['isday'];
              
          }else{
              $isday ="";
          }
          if( isset($_POST['week']) ){
             echo $isweek = $_POST['isweek'];
              
          }else{
              $isweek ="";
          }
          if( isset($_POST['month']) ){
              $ismouth = $_POST['ismonth'];
              
          }else{
              $ismouth = "";
          }

        $updateSQL = "UPDATE `setting` SET 
        `name`=  '$namedata',
        `dir_src`= '$dir_src', 
        `ftp_user`= '$ftp_user', 
        `day`= '$isday', 
        `week`= '$isweek', 
        `mouth`='$ismouth', 
        `database_user`= '$database_user',
        `database_pass`= '$database_pass',
        `database_name`= '$database_name', 
        `database_host`= '$database_host', 
        `token_line`= '$token_line' WHERE `id_setting` ='" .$_POST['update']."' ;";
        // FTP table
        echo $updateSQL .= "UPDATE ftp SET 
        ftp_server = '$ftp_server',
        ftp_username = '$ftp_user',
        ftp_password = '$ftp_pass' WHERE id_ftp = ".$id_ftp;

          if ($conn->multi_query($updateSQL) === TRUE) {
              echo '<script>alert("UPDATE success");window.location.href = "../../core.php";  </script>';

          } else {
              echo '<script>alert("มีข้อผิดพลาดโปรดตรวจสอบข้อมูล");</script>';;
          }

        }else{
          // Create connection
        // เลือก แก้ไข
        $id_setting = $_POST['edit_setting'];
        $edit_setting = "SELECT * FROM setting WHERE id_setting = ".$id_setting;
        $result = $conn->query($edit_setting);
        $row = $result->fetch_assoc();

        $editftp = "SELECT * FROM ftp WHERE ftp_username = '".$row['ftp_user']."'";
        $result1 = $conn->query($editftp);
        $row1 = $result1->fetch_assoc();
        }
        
    ?>  
    
    <br>
    <form action="update.php" method="post">
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">แก้ไขการตั้งค่า</h6>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-2">
          <div class="row">
            <div class="col">
              <div class="form-row">              
                <div class="form-group col-md-12">
                  <label>ไดเรกทอรี่ต้นทาง</label>
                  <input type="text" class="form-control" id="pathfile" name="dir_src" placeholder="กำหนดไดเรกทอรี่ต้นทาง" value="<?= $row['dir_src']?>">
                </div>
                <div class="form-group col-md-12">
                  <label>FTP Server</label>
                  <input type="hidden" name="id_ftp" value="<?=$row1['id_ftp']?>">
                  <input type="text" class="form-control" id="pathfile" name="ftp_server" placeholder="FTP Server" value="<?= $row1['ftp_server']?>">
                </div>
                <div class="form-group col-md-12">
                  <label>FTP User</label>
                  <input type="text" class="form-control" id="pathfile" name="ftp_user" placeholder="FTP User" value="<?= $row['ftp_user']?>">
                </div>
                <div class="form-group col-md-12">
                  <label>FTP User</label>
                  <input type="password" class="form-control" id="pathfile" name="ftp_pass" placeholder="Password" value="<?= $row1['ftp_password']?>" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <div class="col-md-12">กำหนดวันเวลาการสำรองข้อมูล</div>


                 <div class="form-check form-check-inline  col-md-12 ">
                  <input class="form-check-input" type="checkbox" id="day" name="day">
                  <label class="form-check-label" for="day">รายวัน</label>
                </div>

                 <div class="form-check form-check-inline  col-md-12" >
                  <select class="form-control form-control-sm" id="day_select" name="isday">
                    <option value="">เวลา/ชม</option>
                    <?php
                        for ($i=1; $i < 24; $i++) { 
                          if ($i <= 9) {
                            echo "<option value='".$i."'>0".$i.":00</option>";
                          }else{
                            echo "<option value='".$i.":00'>".$i.":00</option>";
                          }                                                    
                        }
                        echo "<option value='00'>00:00</option>";
                    ?>
                  </select>
                </div>

                 <div class="form-check form-check-inline col-md-12">
                  <input class="form-check-input " type="checkbox" id="week" value="week" name="week">
                  <label class="form-check-label" for="week">รายสัปดาห์</label>
                 </div>
                  
                <div class="form-check form-check-inline  col-md-12" >
                  <select class="form-control form-control-sm " id="week_select" display = "none" name="isweek">
                    <option value="">วัน...</option>
                    <option value="จันทร์">จันทร์</option>
                    <option value="อังคาร">อังคาร</option>
                    <option value="พุธ">พุธ</option>
                    <option value="พฤหัส">พฤหัส</option>
                    <option value="ศุกร์">ศุกร์</option>
                     <option value="เสาร์">เสาร์</option>
                      <option value="อาทิตย์">อาทิตย์</option>
                  </select>
                </div>
                 
                 <div class="form-check form-check-inline col-md-12">
                  <input class="form-check-input" type="checkbox" id="month" value="month" name="month" >
                  <label class="form-check-label" for="month">รายเดือน</label>
                 </div>
                
                <div class="form-check form-check-inline  col-md-12" >
                  <select class="form-control form-control-sm" id="month_select" name="ismonth">
                    <option value="">วันที่...</option>
                    <?php
                      for ($i=1; $i <= 30; $i++) { 
                        echo '<option value="'.$i.'">'.$i.'</option>';
                      }
                    ?>
                  </select>
                </div>

                </div>
              </div>
              <div class="card-header border-bottom">
               <h6 class="m-0">ฐานข้อมูล</h6>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">ผู้ใช้ฐาน</label>
                  <input type="text" class="form-control" id="nameBackup" placeholder="root" name="database_user" value="<?= $row['database_user']?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">รหัสผ่าน</label>
                  <input type="password" class="form-control" id="nameBackup" placeholder="******" name="database_pass" value="<?= $row['database_pass']?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">ชื่อฐาน</label>
                  <input type="text" class="form-control" id="nameBackup" placeholder="Mydatabase" name="database_name" value="<?= $row['database_name']?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">ที่อยู่</label>
                  <input type="text" class="form-control" id="nameBackup" placeholder="localhost" name="database_host" value="<?= $row['database_host']?>">
                </div>
                
              </div>                                
            </div>
          </div>
        </li>
      </ul>  
      <div class="card-header border-bottom">
        <h6 class="m-0">ตั้งค่า App LINE</h6>
      </div>
      <!-- End Page Header -->
      <ul class="list-group list-group-flush">
        <li class="list-group-item p-2">
          <div class="row">
            <div class="col">
              
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="feEmailAddress">Token</label>
                  <input type="text" 
                         class="form-control" 
                         id="nameBackup" 
                         placeholder="กำหนด Token application LINE" 
                         name="token_line"
                         value="<?= $row['token_line']?>">
                </div>              
              </div>
            </div>
          </div>
        </li>
          <div class="form-group col-md-12 justify-content-center">
            <button type="submit" class="btn btn-primary col-md-12 " value="<?=$_POST['edit_setting']?>" name="update">แก้ไข</button>          
          </div>
      </ul>    
    </form>
      <script src="../setting/setting.js"></script>
</body>
</html>
<?php 

$conn->close(); 
?>