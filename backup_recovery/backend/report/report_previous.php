
<?php
include_once "config/connectDB.php";
$count = 0;
$class = new allDB();
$sql = "checkdata where status = 'R'";
$sql .= "";
$row = $class->select($sql);
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
?>

<div class="col-lg-6">
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
    <!-- <h4 class="col-12 col-sm-12 text-center">รายงานการสำรองข้อมูล</h4> -->
    </div>
</div>
<div class="card card-small mb-4">
    <div class="card-header border-bottom">
    <h6 class="m-0">รายงานการตรวจสอบย้อนหลัง STEP 1</h6>
    </div>

<ul class="list-group list-group-flush">
    <li class="list-group-item p-2">
    <div class="row">
    <div class="col">
    <form action="../../backup_recovery/backend/recovery/index.recovery.php" method="post">
        <div class="form-row ">
            <div class="form-group col-md-12">
            <label>ตรวจสอบข้อมูลไฟล์ที่ 1</label>
                <select id="pathBackup" class="form-control" name="idSetting">
                    <option selected>กู้คืนไดเรกทอรี่...</option>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    echo '<option value=" ' . $row["id_setting"] . ' ">' . $row["dir_src"] . '</option>';
                    }
                    $conn->close();
                    ?>
                </select>                                                                                                          
            </div>
        </div>
    </div>
    </div>
    </li>
    
    <li class="list-group-item p-4">
         <span class="d-flex justify-content-center">
            <!-- <button type="submit"value="R" name="status" class="btn btn-accent col-md-3 ">ยืนยัน</button> -->
            <a class="btn btn-accent col-md-3 " href="core.php?page=Previous2">ถัดไป</a>
        </span>
    </li>
</ul>


