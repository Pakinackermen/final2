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
?>

<div class="col-lg-6">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
            <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
            <h3 class="page-title">ระบบกู้คืนข้อมูล</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="card card-small mb-4">
        <div class="card-header border-bottom">
            <h6 class="m-0">กู้คืนข้อมูล</h6>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item p-4">
                <div class="row">
                    <div class="col">
                        <form action="core.php?page=recovery" method="post">
                            <div class="form-row ">
                                <div class="form-group col-md-12">
                                    <label>เลือกไดเรกทอรี่ที่ต้องการ</label>
                                    <select id="pathBackup" class="form-control" name="idSetting">
                                        <option selected>กู้คืนไดเรกทอรี่...</option>
                                       <?php
                                            while($row = $result->fetch_assoc()) {
                                               echo '<option value=" '.$row["id_setting"].' ">'.$row["dir_src"].'</option>';
                                            }                                                    
                                            
                                        ?>
                                    </select>
                                    </br>
                                   
                                    <span class="d-flex justify-content-center">
                                        <button type="submit" value="R" name="status" class="btn btn-accent col-md-3 ">ถัดไป</button>
                                    </span>
                        </form>
                        
                       
                        </div>
                        </div>
            </li>

            <?php                  
                if(isset($_POST["idSetting"])){ 
                $id_setting = $_POST["idSetting"];        
                $sql = "SELECT * FROM filebackup ";        
                $sql .= "where id_setting = ".$id_setting;
                $recoveryStep2 = $conn->query($sql);
            ?>

<div class="col-lg-6">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
            <!-- <span class="text-uppercase page-subtitle">Overview</span> -->
            <h3 class="page-title"> Ster 2</h3>
        </div>
    </div>
    <!-- End Page Header -->

            <!-- <h6 class="m-0"><?= $_GET[""]?></h6> -->
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-4">
                <div class="row">
                    <div class="col">
                        <form action="../../backup_recovery/backend/recovery/index.recovery.php" method="post">
                            <div class="form-row ">
                                <div class="form-group col-md-12">
                                    <label>เลือกไฟล์ที่ต้องการ</label>
                                    <select id="pathBackup" class="form-control" name="id_filebackup">
                                        <option selected>ไฟล์...</option>
                                       <?php
                                            while($row = $recoveryStep2->fetch_assoc()) {                                                                                               
                                               echo '<option value=" '.$row["id_filebackup"].' ">'.$row["file_name"].'</option>';
                                            }                                                    
                                            $conn->close();
                                        ?>
                                    </select>
                                    </br>
                                   
                                    <span class="d-flex justify-content-center">                                                                          
                                         <input type="hidden" name="idSetting" value='<?=$id_setting?>'>                                
                                        <button type="submit"value="R" name="status" class="btn btn-accent col-md-3 ">ยืนยัน</button>
                                    </span>
                        </form>
                     
            </li>
        </ul>
        </div>
        </div>

            <?php }?>
        </ul>
        </div>
        </div>