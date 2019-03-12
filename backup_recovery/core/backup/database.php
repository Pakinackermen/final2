<form action="../../backup_recovery\backend\backup\exportdb.php" method="post">

<div class="form-row">

<div class="form-group col-md-6 m-3">
    <div class="form-control col-md-12 ">
        <h6 class="m-0">ฐานข้อมูล</h6>
    </div>
    <div class="form-control col-md-12 m-1">
        <label for="feEmailAddress">ผู้ใช้ฐาน</label>
        <input type="text" class="form-control" id="nameBackup" placeholder="root" name="database_user">
    </div>
    <div class="form-control col-md-12 m-1 ">
        <label for="feEmailAddress">รหัสผ่าน</label>
        <input type="password" class="form-control" id="nameBackup" placeholder="******" name="database_pass">
    </div>
    <div class="form-control col-md-12 m-1">
        <label for="feEmailAddress">ชื่อฐานข้อมูล</label>
        <input type="text" class="form-control" id="nameBackup" placeholder="Mydatabase" name="database_name">
    </div>
    <div class="form-control col-md-12 m-1">
        <label for="feEmailAddress">ที่อยู่</label>
        <input type="text" class="form-control" id="nameBackup" placeholder="localhost" name="database_host">
    </div>
    <div class="form-control m-1">
        <button type="submit" class="form-control btn btn-primary">ตกลง</button>
    </div>
</div>
</div>
</form>