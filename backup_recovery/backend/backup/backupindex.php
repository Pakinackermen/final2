<?php
include_once "../config/connectDB.php";
echo "CWD=".getcwd()."<br>" ;
$idSetting = $_POST['idSetting'];
$id_ftp = $_POST['id_ftp'];

if (isset($_POST['idSetting'])) {
    $class = new allDB();
    $row = $class->select("setting where id_setting = " . $idSetting);
    $path = "";
    $filename = "";
    $Row = $row->fetch_assoc();
    $filename = $Row['id_setting'];
    $path .= $Row['dir_src'];

    echo "PATH=" . $path . " filename=" . $filename."<br>";
    // backupfile($filename, $path, $id_ftp);
    //  echo $_POST['name_zip_file']; เปลี่ยน get id from DB=>{ backupPathname}
} else {
    echo '<h1>ข้อมูลไม่ถูกต้อง</h1>';
}

function backupfile($filename, $path, $id_ftp)
{
    echo "PATH=" . $path . " filename=" . $filename;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "backup";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    date_default_timezone_set("Asia/Bangkok");
    require_once 'bk_zip.php'; /* include zip lib */

    $name_zip_file = $filename; /* get date now  */
    $name_zip_file .= '.zip';
    $files_to_zip = directoryToArray($path, true);

    /*Zip file*/
    $result = create_zip($files_to_zip, $name_zip_file);

    /*Transfer file & send to store */

    // ftp
    $ftp = "SELECT * FROM ftp WHERE id_ftp = " . $id_ftp;
    $result_id_ftp = $conn->query($ftp);
    $row_ftp = $result_id_ftp->fetch_assoc();
    $server = '127.0.0.1';
    $ftp_username = $row_ftp['ftp_username'];
    $ftp_password = $row_ftp['ftp_password'];
    $connection = ftp_connect($server);

    $login = ftp_login($connection, $ftp_username, $ftp_password);

    if (!$connection || !$login) {die('Connection attempt failed!');}

    $upload = ftp_put($connection, $name_zip_file, $name_zip_file, FTP_BINARY);
    if ($upload) {
        echo '
            <form action="../../core.php">
                <div style="text-align: center;">
                    <h2>สำรองข้อมูลแล้ว</h2>
                    <button
                    style="width: 100px; height: 50px; type="submit">กลับหน้าหลัก</button>
                </div>
            </form>';

    } else {
        echo 'FTP upload failed!';
    }

    ftp_close($connection);

    unlink($name_zip_file);

}
