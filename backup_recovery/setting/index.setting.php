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
            include "setting.backup.php";
            include "setting.line.php";     
            
            echo '<div class="form-control d-flex justify-content-center">
                  <button type="submit" class="btn btn-success col-md-5 mx-2" name="add">ตกลง</button>   
                  <button type="button" class="btn btn-accent col-md-3" onclick="window.history.back()" name="edit">กลับ</button>
                </div>'; 
            echo'</from>';  
        }elseif(isset($_POST['edit'])){
         
      ?>
          <!-- edit -->
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
            ?>
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
                      <button type="submit" name="edit_setting" value="<?= $row["id_setting"] ?>">แก้ไข</button>
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
        // end edit

        //add ftp 
      } elseif( isset($_POST['addFtp']) ){
        echo '<form action="setting\database\insert.php" method="POST">';

        include "setting.ftp.php";

        echo '<div class="form-control d-flex justify-content-center">
                  <button type="submit" class="btn btn-success col-md-5 mx-2" name="add">ตกลง</button>
                  <button type="button" class="btn btn-accent col-md-3" onclick="window.history.back()" name="edit">กลับ</button>
              </div>';              
        echo '</from>';

        
      } // else if 
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
              <button type="submit" class="btn btn-accent col-md-5 " name="addFtp">เพิ่มผู้ใช้ FTP</button>          
            </div>            

            <div class="form-control d-flex justify-content-center">
              <button type="submit" class="btn btn-accent col-md-5 " name="editFtp">แก้ไขเพิ่มผู้ใช้ FTP</button>          
            </div>
          </form>';
        }          
      ?>
</div>
<script src="setting/setting.js"></script>
