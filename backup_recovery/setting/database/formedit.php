<?php
include_once "connect.php";
// Create connection
// เลือก แก้ไข
$id_setting = $_POST['edit_setting'];
$edit_setting = "SELECT * FROM setting WHERE id_setting = " . $id_setting;
$result = $conn->query($edit_setting);
$row = $result->fetch_assoc();

$editftp = "SELECT * FROM ftp WHERE ftp_username = '" . $row['ftp_user'] . "'";
$result1 = $conn->query($editftp);
$row1 = $result1->fetch_assoc();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body style="margin: 0 10% 10% 10%;">
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
                                    <input type="text" class="form-control" id="pathfile" name="dir_src"
                                        placeholder="กำหนดไดเรกทอรี่ต้นทาง" value="<?=$row['dir_src']?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="col-md-12">กำหนดวันเวลาการสำรองข้อมูล</div>


                                    <div class="form-check form-check-inline  col-md-12 ">
                                        <input class="form-check-input" type="checkbox" id="day" name="day">
                                        <label class="form-check-label" for="day">รายวัน</label>
                                    </div>

                                    <div class="form-check form-check-inline  col-md-12">
                                        <select class="form-control form-control-sm" id="day_select" name="isday">
                                            <option value="">เวลา/ชม</option>
                                            <?php
for ($i = 1; $i < 24; $i++) {
    if ($i <= 9) {
        echo "<option value='" . $i . "'>0" . $i . ":00</option>";
    } else {
        echo "<option value='" . $i . ":00'>" . $i . ":00</option>";
    }
}
echo "<option value='00'>00:00</option>";
?>
                                        </select>
                                    </div>

                                    <div class="form-check form-check-inline col-md-12">
                                        <input class="form-check-input " type="checkbox" id="week" value="week"
                                            name="week">
                                        <label class="form-check-label" for="week">รายสัปดาห์</label>
                                    </div>

                                    <div class="form-check form-check-inline  col-md-12">
                                        <select class="form-control form-control-sm " id="week_select" display="none"
                                            name="isweek">
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
                                        <input class="form-check-input" type="checkbox" id="month" value="month"
                                            name="month">
                                        <label class="form-check-label" for="month">รายเดือน</label>
                                    </div>

                                    <div class="form-check form-check-inline  col-md-12">
                                        <select class="form-control form-control-sm" id="month_select" name="ismonth">
                                            <option value="">วันที่...</option>
                                            <?php
for ($i = 1; $i <= 30; $i++) {
    echo '<option value="' . $i . '">' . $i . '</option>';
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
                                    <input type="text" class="form-control" id="nameBackup" placeholder="root"
                                        name="database_user" value="<?=$row['database_user']?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="feEmailAddress">รหัสผ่าน</label>
                                    <input type="password" class="form-control" id="nameBackup" placeholder="******"
                                        name="database_pass" value="<?=$row['database_pass']?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="feEmailAddress">ชื่อฐาน</label>
                                    <input type="text" class="form-control" id="nameBackup" placeholder="Mydatabase"
                                        name="database_name" value="<?=$row['database_name']?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="feEmailAddress">ที่อยู่</label>
                                    <input type="text" class="form-control" id="nameBackup" placeholder="localhost"
                                        name="database_host" value="<?=$row['database_host']?>">
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
                                    <input type="text" class="form-control" id="nameBackup"
                                        placeholder="กำหนด Token application LINE" name="token_line"
                                        value="<?=$row['token_line']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <div class="form-group col-md-12 justify-content-center">
                    <button type="submit" class="btn btn-primary col-md-12 " value="<?=$_POST['edit_setting']?>"
                        name="update">แก้ไข</button>
                </div>
            </ul>
    </form>
    <script src="../setting/setting.js"></script>
</body>

</html>