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
          <form action="setting\database\update.php" method="post">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">ไฟล์ต้นทาง</th>
                    <th scope="col">จัดการ</th>
                  </tr>
                </thead>
                <tbody>
              <?php 
              // select setting ID
                while($row = $result->fetch_assoc()) {
                               
              ?>
                  
                  <tr>
                    <th scope="row">1</th>
                    <td><?= $row["name"] ?></td>
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
        
      } // else if 
      else{
          echo'
          <form action="core.php?page=setting" method="POST">
            <div class="form-control d-flex justify-content-center">           
            <button type="submit" class="btn btn-accent col-md-3 " name="edit">แก้ไข</button>
            </div>
            <div class="form-control d-flex justify-content-center">
            <button type="submit" class="btn btn-accent col-md-3 " name="add">เพิ่ม</button>          
            </div>
          </form>';
        }
            

      ?>
              
  
  

</div>
<script src="setting/setting.js"></script>
