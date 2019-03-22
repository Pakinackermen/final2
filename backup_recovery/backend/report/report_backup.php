<?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
?>


<?php
include_once "config/connectDB.php";
$count = 0;
$class = new allDB();
$sql = "checkdata where status = 'B' ORDER BY id DESC";
$row = $class->select($sql);
?>

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
                <!-- <h4 class="col-12 col-sm-12 text-center">รายงานการสำรองข้อมูล</h4> -->
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->                                
            <div class="row" name="checkDisable">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">รายงานการสำรองข้อมูล</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">ที่อยู่</th>
                          <th scope="col" class="border-0">วันที่</th>
                          <th scope="col" class="border-0">เพิ่มเติม</th>                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        while ($Row = $row->fetch_assoc()) {                                                                            
                      ?>
                       <tr>
                        <td><?= ++$count?></td>
                        <td><?= $Row["directory"]?></td>
                        <td><?= $Row["datetime"]?></td>
                        <td>
                          <a href="core.php?Backup=<?=$Row["id"]?>" onclick="doDisiplay()">รายละเอียด </a>                        
                        </td>
                       </tr>

                      <?php } ?>
                                                
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>  
              </div>
            </div>

