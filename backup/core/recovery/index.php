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
                        <form action="../../backup_recovery/backend/recovery/index.recovery.php" method="post">
                            <div class="form-row ">
                                <div class="form-group col-md-12">
                                    <label>เลือกไดเรกทอรี่ที่ต้องการ</label>
                                    <select id="pathBackup" class="form-control" name="idSetting">
                                        <option selected>กู้คืนไดเรกทอรี่...</option>
                                       <?php
                                            while($row = $result->fetch_assoc()) {
                                               echo '<option value=" '.$row["id_setting"].' ">'.$row["dir_src"].'</option>';
                                            }                                                    
                                            $conn->close();
                                        ?>
                                    </select>
                                    </br>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <br><label for="feDescription">เหตุผล</label>
                                                    <textarea class="form-control" name="feDescription" pa rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-accent col-md-3 ">ยืนยัน</button>
                                    </span>
                        </form>
                        </div>
                        </div>
            </li>
        </ul>
        </div>
        </div>